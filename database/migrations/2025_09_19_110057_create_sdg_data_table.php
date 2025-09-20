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
        Schema::create('sdg_data', function (Blueprint $table) {
            $table->id();
            $table->string('disaster_type')->nullable();
            $table->string('affected_person')->nullable();
            $table->string('affected_person_financial_help')->nullable();
            $table->string('beneficiary_percentage')->nullable();
            $table->string('assign_amt_selected_month')->nullable();
            $table->string('monthly_available_amount')->nullable();
            $table->string('distributed_amount')->nullable();
            $table->string('distributed_percentage')->nullable();
            $table->enum('status', ['0', '1'])->default('0')->comment('0=Active, 1=Inactive');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sdg_data');
    }
};
