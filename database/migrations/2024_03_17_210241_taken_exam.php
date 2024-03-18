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
        Schema::create('taken_exam', function (Blueprint $table) {
            $table->id('takenExamId');
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('examId');
            $table->integer('attempt');
            $table->integer('oralScore')->nullable();
            $table->integer('writtenScore')->nullable();             
   

        });
        Schema::table('taken_exam',function($table){
            $table->foreign('studentId')
                  ->references('id')
                  ->on('student')
                  ->onDelete('cascade');
            
            $table->foreign('examId')
                        ->references('examId')
                        ->on('comprehensive_exam')
                        ->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taken_exam');

    }
};
