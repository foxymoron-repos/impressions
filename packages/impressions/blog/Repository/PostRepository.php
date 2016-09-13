<?php
namespace Impressions\Blog\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
	
	public function findRelated($categoryId) {
		
		$qb = $this->_em->getConnection()->createQueryBuilder();
		
		return $qb->select(array('id','title','description','body'))
				->from('post', 'post')
				->innerJoin('post', 'post_category', 'category','category.id = post.category_id')
				->where('post.category_id = :categoryId')
				->setParameter('categoryId', $categoryId)
				->setMaxResults(10)
				->execute()
				->fetchAll();
		
	}
	
	public function findPopular() {
		
		$qb = $this->_em->getConnection()->createQueryBuilder();
		
		return $qb->select(array('id','title','description','body'))
				->from('post', 'post')
				->innerJoin('post', 'post_category', 'category','category.id = post.category_id')
				->setMaxResults(10)
				->orderBy('post.likes', 'desc')
				->execute()
				->fetchAll();
		
		
	}
	
	public function findMostLiked() {
		
		$qb = $this->_em->getConnection()->createQueryBuilder();
		
		return $qb->select(array('id','title','description','body'))
				->from('post', 'post')
				->innerJoin('post', 'post_category', 'category','category.id = post.category_id')
				->setMaxResults(10)
				->orderBy('post.likes', 'desc')
				->execute()
				->fetchAll();
		
	}
	
}