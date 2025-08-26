<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('repairers', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->string("email",100);
            $table->string("phone",15);
            $table->string("password",255);
            $table->string("garage_name",150);
            $table->text("garage_address");
            $table->string("state",150);
            $table->string("city",150);
            $table->string("pincode",10);
           $table->enum('service_type',['Car','Bike','Both'])->default('Both');
            $table->text("service_offered");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairers');
    }
};
