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
        Schema::table('students', function (Blueprint $table){
            $table->foreign('class_id')->references('id')->on('class_models');
        });

        Schema::table('class_models', function (Blueprint $table){
            $table->foreign('teacher_id') ->references('id')-> on('teachers') ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('teachers', function (Blueprint $table){
            $table->foreign('class_id')->references('id')->on('class_models')->onDelete('set null')->onUpdate('cascade');
        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table){
            $table->dropForeign('class_id');
        });

        Schema::table('class_models', function (Blueprint $table){
            $table->dropForeign('teacher_id');
        });

        Schema::table('teachers', function (Blueprint $table){
            $table->dropForeign('class_id');
        });
    }
};
