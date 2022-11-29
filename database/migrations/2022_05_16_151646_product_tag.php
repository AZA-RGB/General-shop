<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('product_tag',function(Blueprint $table){
            $table->bigInteger('product_id');
            $table->bigInteger('tag_id');
            $table->primary(['product_id','tag_id']);
            $table->timestamps();

        });
    }


    public function down()
    {

    }
};
