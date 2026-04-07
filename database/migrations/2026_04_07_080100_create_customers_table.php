<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('email')->nullable();
            $table->string('representative_name')->nullable();
            $table->string('country')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('province')->nullable();
            $table->string('representative_phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->date('representative_dob')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
