<?php

namespace App\Exports;

use App\Models\Barangay;
use App\Models\Dogs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\DB;

class DogExport implements FromCollection, WithHeadings, WithEvents,WithMapping
{
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function headings() :array
    {
        return [
            'Barangay',
            'Dog Name',
            'ID Number',
            'Owner Name',
            'Origin',
            'Breed',
            'Color',
            'Age',
            'Sex',
            'Sex Description',
            'Vaccines Taken',
        ];
    }

    public function map($dog): array{

        return [
            $dog->barangay_name,
            $dog->dog_name,
            $dog->id_number,
            $dog->owner_name,
            $dog->origin,
            $dog->breed,
            $dog->color,
            $dog->age,
            $dog->sex,
            $dog->sex_description,
            $dog->vaccines_taken,
        ];
    }

    public function collection()
    {
        if($this->id == 0){
            return  Barangay::select('*')
                ->join('dogs', 'barangays.id', '=', 'dogs.barangay_id')
                ->orderBy('barangays.barangay_name', 'asc')
                ->get();

        }else{
            return  Barangay::where('dogs.barangay_id', $this->id)
                ->join('dogs', 'barangays.id', '=', 'dogs.barangay_id')
                ->get();
        }
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                // bg-color
                $event->sheet->getDelegate()->getStyle('A1:K1')->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('215476');

                // font-color
                $event->sheet->getDelegate()->getStyle('A1:K1')
                    ->getFont()
                    ->getColor()
                    ->setARGB('FFFFFF');

                // font-weight
                $event->sheet->getDelegate()->getStyle('A1:K1')
                    ->getFont()->setBold(true);

                //align-center
                $event->sheet->getDelegate()->getStyle('A1:K1')
                    ->getAlignment()
                    ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

                //row-height
                $event->sheet->getDelegate()->getRowDimension('1')->setRowHeight(20);

                //cell-width
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(40);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('F')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('G')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('H')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('I')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('J')->setWidth(35);
                $event->sheet->getDelegate()->getColumnDimension('K')->setWidth(35);

            },
        ];
    }
}
