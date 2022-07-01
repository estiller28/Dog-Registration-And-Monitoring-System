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
            $table->foreignId('barangay_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('purok_id')->nullable()->constrained()->nullOnDelete();
            $table->string('dog_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('dog_image')->nullable();
            $table->string('origin')->nullable();
            $table->string('breed')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('vaccines_taken')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
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
