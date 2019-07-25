<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_tbl', function (Blueprint $table) {

            $table->increments('admin_id');
             $table->string('admin_first_name');
              $table->string('admin_last_name');
               $table->string('admin_business_name');
                $table->string('admin_email');
                 $table->string('admin_password');
           


            
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
        Schema::dropIfExists('admin_tbl');
    }
}
