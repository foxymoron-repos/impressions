<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageFieldsToPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_post', function(Blueprint $table){
        	
        	$table->string('thumbnail_url', 255);
        	
        	$table->string('primary_image_url', 255);
        	
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
    		 
    		$table->dropColumn('thumbnail_url');
    		 
    		$table->dropColumn('primary_image_url');
    		 
    	});
    }
}
