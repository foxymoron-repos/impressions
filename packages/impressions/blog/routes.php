<?php
Route::get('blog/submit', [
		'as' => 'blog_post_form', 
		'uses' => 'Impressions\Blog\Controller\BlogController@form'
]);

Route::get('blog/index', [
		'as' => 'blog_index',
		'uses' => 'Impressions\Blog\Controller\BlogController@index'
]);

Route::get('blog/post/{slug}/{id}', [
		'as' => 'blog_post_item',
		'uses' => 'Impressions\Blog\Controller\BlogController@item'
]);

Route::get('blog/post/form', [
		'as' => 'blog_post_form',
		'uses' => 'Impressions\Blog\Controller\BlogController@form'
]);

