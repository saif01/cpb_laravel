<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title')->nullable();
            $table->string('deadline')->nullable();
            $table->string('location')->nullable();
            $table->string('department')->nullable();
            $table->text('education')->nullable();
            $table->text('description')->nullable();
            $table->text('requirement')->nullable();
            $table->text('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('status')->nullable();
            $table->string('publish_by')->nullable();
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
        Schema::dropIfExists('recruits');
    }
}
