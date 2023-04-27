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
        Schema::create('post_job', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('employer_id');
            $table->foreign('employer_id')  ->references('id')->on('employer')->onDelete('cascade');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('company_email');
            $table->longText('job_description',225);
            $table->string('job_location');
            $table->string('job_type');
            $table->string('job_category');
            $table->string('job_salary');

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
        Schema::dropIfExists('post_job');
    }
};
