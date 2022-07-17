<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->nullable();
            $table->foreignId('barangay_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('dog_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('dog_image')->nullable();
            $table->string('origin')->nullable();
            $table->string('breed')->nullable();
            $table->string('color')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('sex_description')->nullable();
            $table->string('vaccines_taken')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('purok')->nullable();
            $table->timestamps();

            //table index
            $table->index('id_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
};
