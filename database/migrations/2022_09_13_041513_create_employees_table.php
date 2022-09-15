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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id_number', 18);
            $table->string('name', 50);
            $table->string('email', 100);
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->date('date_of_birth');
            $table->string('phone_number', 13);
            $table->text('address');
            $table->string('division', 50);
            $table->string('position', 50);
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
        Schema::dropIfExists('employees');
    }
};
