<?php
namespace Impressions\Blog\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Impressions\Blog\Model\Post;

class BlogController extends Controller
{
	
	public function index(Request $request) {
		
		$em = app('em');
		
		$repo = $em->getRepository('Impressions\Blog\Model\Post');
		
		$data = array(
				'mostliked' 	=> $repo->findMostliked(),
				'popular'		=> $repo->findPopular(),
				'categories'	=> $em->getRepository('impressions\Blog\Model\PostCategory')
										->findAll()
		);
		
		return view('impressions.blog::blog.index', $data);
	}
	
	public function item(Request $request, $slug, $id) {
		
		$post = app('em')->find('Impressions\Blog\Model\Post', $id);
		
		if(!$post) {
			
			abort(404, 'Post not found');
			
		}
		
		return view('impressions.blog::blog.post', array('post'=>$post));
		
	}
	
	public function save(Request $request) {
		
		$rules = array(
				'title'				=> 'required',
				'description'		=> 'required',
				'body'				=> 'required|min:200|max:2000',
				'thumbnail_url'		=> 'required',
				'primary_image_url'	=> 'required'
		);
		
		$this->validate($request, $rules);
		
		if ($validator != NULL and $validator->fails()) {
			return redirect('post_form')
			->withErrors($validator)
			->withInput($request->all());
		}
		
		$em = app('em');
		
		if($request->has('id')) {
			
			$post = $em->find('Impressions\Blog\Model\Post', $request->get('id'));
			
		} else {
			
			$post = new Post();
			
		}
		
		$category = $em->find('Impressions\blog\Model\Post', $request->get('category_id'));
		
		if(!$category) {
			
			return redirect(route('impressions.blog:form'))
				->with('error', 'Category not found')->withInput($request->all());
			
		}
		
		$post->__set('category', $category);
		
		$post->bind($request->except('category_id'));
		
		if ($request->has('id')) {
			$em->persist($post);
		}
		
		$em->flush();
		
		$params = array(
			'id' 	=> $post->__get('id'),
			'slug'	=> $post->__get('title') 
		);
		
		return redirect(route('post_item', array()))->with('status', 'Post created sucessfully');
	}
	
	public function form(Request $request, $id = null) {
		
		$em = app('em');
		
		if($id) {
			
			$post = $em->find('Impressions\Blog\Model\Post', $id);
			
			if(!$post) {
				
				return redirect(route('post_list'))->with('error','The post with id '.$id.' doesnt exist');
				
			}
			
		} else {
			
			$post = new Post();
		}
		
		return view('impressions.blog::blog.form', array('post'=>$post));
	}
	
}