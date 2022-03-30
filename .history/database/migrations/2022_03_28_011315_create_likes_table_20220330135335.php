<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('likes', function (Blueprint $table) {
      $table->id();
      $table->bigIncrements('user_id');
      $table->unique('tui2_id');
      $table->dropPrimary(); 
      $table->primary('id');
      $table->integer('reply_id')->unsigned();
      $table->timestamps();
   });
  
 }
}
