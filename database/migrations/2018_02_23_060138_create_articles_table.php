<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('content');
            $table->integer('user_id')->unsigned(); 
            $table->index('user_id');   // adding index of user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // making id
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
        Schema::table('articles', function ($table) {
           $table->dropForeign('articles_user_id_foreign');
           $table->dropIndex('articles_user_id_index');
           $table->dropColumn('user_id');       
        });
        
         Schema::drop('articles');        
    }
}
