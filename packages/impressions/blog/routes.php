<?php
Route::get('impressions/blog/submit', [
		'as' => 'blog_post_form', 
		'uses' => 'Impressions\Blog\Controller\BlogController@form'
		
]);
