<?php

namespace Pluswerk\Simpleblog\Controller;

/***
 *
 * This file is part of the "Simple Blog Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Fabio Picciau <fabio@rncstudio.com>, +Pluswerk AG
 *
 ***/

/**
 * PostController
 */

class PostController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var \Pluswerk\Simpleblog\Domain\Repository\PostRepository
     */
    protected $postRepository;

    /**
     * @param \Pluswerk\Simpleblog\Domain\Repository\PostRepository $postRepository
     */
    public function injectPostRepository(\Pluswerk\Simpleblog\Domain\Repository\PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */
    public function addFormAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post = null) 
    {
        $this->view->assign('blog', $blog);
        $this->view->assign('post', $post);
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */    
    public function addAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $post->setPostdate(new \DateTime());

        $blog->addPost($post);
        $this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\BlogRepository')->update($blog);
        $this->redirect('show', 'Blog', null, array('blog'=>$blog));
    }

    public function showAction()
    {

    }

    public function updateFormAction()
    {

    }

    public function updateAction()
    {

    }    

    public function deleteConfirmAction()
    {

    }  

    public function deleteAction()
    {

    }
}

?>