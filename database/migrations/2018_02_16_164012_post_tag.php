<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



 
  
class PostTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('post_id');
            $table->integer('tag_id');
            $table->primary(['post_id','tag_id']); //primary key to this connections table for unique combinations of the id's
            //$table->string('name')->unique();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
