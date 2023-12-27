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
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedSmallInteger('age');
            $table->enum('sex', ['1', '2']); // 1 - Male, 2 - Female
            $table->enum('region', ['1', '2', '3', '4-A', '4-B', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'CAR']);
            $table->enum('client_type', ['1', '2', '3']); // 1 - Citizen, 2 - Business, 3 - Government
            $table->string('agency_visited');
            $table->unsignedSmallInteger('cc1');
            $table->unsignedSmallInteger('cc2');
            $table->unsignedSmallInteger('cc3');
            $table->unsignedSmallInteger('sqd1');
            $table->unsignedSmallInteger('sqd2');
            $table->unsignedSmallInteger('sqd3');
            $table->unsignedSmallInteger('sqd4');
            $table->unsignedSmallInteger('sqd5');
            $table->unsignedSmallInteger('sqd6');
            $table->unsignedSmallInteger('sqd7');
            $table->unsignedSmallInteger('sqd8');
            $table->longtext('remark');
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
