<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminJobPostTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_job_post_tbl', function (Blueprint $table) {

            $table->increments('job_id');
             $table->string('job_title');
              $table->string('job_description');
               $table->string('job_salary');
                $table->string('job_location');
                 $table->string('job_country');


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
        Schema::dropIfExists('admin_job_post_tbl');
    }
}
