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
        Schema::create('survey_logs', function (Blueprint $table) {
            $table->id();
            $table->string('control_no')->unique();
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedSmallInteger('age');
            $table->unsignedInteger('sex'); // 1 - Male, 2 - Female
            $table->string('region');
            $table->unsignedInteger('client_type'); // 1 - Citizen, 2 - Business, 3 - Government
            $table->string('agency_visited');
            $table->unsignedSmallInteger('cc1');
            $table->unsignedSmallInteger('cc2');
            $table->unsignedSmallInteger('cc3');
            $table->longtext('cc3_remarks')->nullable();
            $table->unsignedSmallInteger('sqd1');
            $table->unsignedSmallInteger('sqd2');
            $table->unsignedSmallInteger('sqd3');
            $table->unsignedSmallInteger('sqd4');
            $table->unsignedSmallInteger('sqd5');
            $table->unsignedSmallInteger('sqd6');
            $table->unsignedSmallInteger('sqd7');
            $table->unsignedSmallInteger('sqd8');
            $table->longtext('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_logs');
    }
};
