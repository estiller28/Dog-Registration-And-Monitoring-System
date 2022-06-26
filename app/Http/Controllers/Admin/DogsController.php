<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index()
    {
        $btn = '';
        $html = '';
        $dogCount = '';

        return view('admin.manage_dogs', compact('html', 'btn', 'dogCount'));
    }

    public function render(Request $request){

        $html = '';
        $btn = '';
        $dogCount = '';

        if($request->barangay == 1){

            $btn = '<a href="/get/dogs" type="submit" class="btn btn-info btn-sm-block"><i class="align-middle me-1" data-feather="download"></i>Export</a>';
            $dogCount = '<span class="badge bg-success fs-4">2</span>';

            $html .= ' <table id="myTable" class="table table-responsive table-striped" style="width:100%">
                            <thead style="background: #D0C9C0; color: ">
                            <tr>
                                <th>ID Number</th>
                                <th>Dog Name</th>
                                <th>Owners Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>Daniel</td>
                                <td>Daniel</td>
                                    <td>Daniel</td>
                                        <td>Daniel</td>
                                            <td>Daniel</td>
                                                <td>Daniel</td>

                             </tr>
                              <tr>
                            <td>Daniel</td>
                                <td>Daniel</td>
                                    <td>Daniel</td>
                                        <td>Daniel</td>
                                            <td>Daniel</td>
                                                <td>Daniel</td>

                             </tr>
                            </tbody>
                        </table>';
        }

        return view('admin.manage_dogs', compact('html', 'btn' ,'dogCount'));
    }


    public function create(){

        return view('admin.create_dogs');
    }

}
