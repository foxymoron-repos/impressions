<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryIdToPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    		 
        Schema::table('blog_post', function(Blueprint $table){
        	
        	$table->foreign('category_id')->references('id')->on('post_category');
        	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('blog_post', function(Blueprint $table){
    		 
    		$table->dropColumn(['category_id']);
    		 
    	});
    }
}
