<?php
Route::get('blog/submit', [
		'as' => 'blog_post_form', 
		'uses' => 'Impressions\Blog\Controller\BlogController@form'
]);

Route::get('blog/index', [
		'as' => 'blog_index',
		'uses' => 'Impressions\Blog\Controller\BlogController@index'
]);

