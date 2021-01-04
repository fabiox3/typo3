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

    public function initializeAction()
    {
        $action = $this->request->getControllerActionName();
        if( $action != 'display' && $action != 'ajax' ) {
            if( !$GLOBALS['TSFE']->fe_user->user['uid'] ) {
                $this->redirect(null, null, null, null, $this->settings['loginpage']);
            }
        }    
    }

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
    public function createAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post = null) 
    {
        $this->view->assign('blog', $blog);
        $this->view->assign('post', $post);
        $this->view->assign('tags', $this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\TagsRepository')->findAll());
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */    
    public function saveAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $post->setPostdate(new \DateTime());
        $post->setAuthor($this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\AuthorRepository')->findByUid($GLOBALS['TSFE']->fe_user->user['uid']));
        $blog->addPost($post);
        $this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\BlogRepository')->update($blog);
        $this->redirect('show', 'Blog', null, array('blog'=>$blog));
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */      
    public function displayAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $this->view->assign('blog', $blog);
        $this->view->assign('post', $post);
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */ 
    public function updateFormAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $this->view->assign('blog', $blog);
        $this->view->assign('post', $post);
        $this->view->assign('tags', $this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\TagsRepository')->findAll());
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */ 
    public function updateAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $this->postRepository->update($post);
        $this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\BlogRepository')->update($blog);
        $this->redirect('display', 'Post', null, array('blog'=>$blog, 'post'=>$post));
    }    

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */     
    public function deleteConfirmAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $this->view->assign('blog', $blog);
        $this->view->assign('post', $post);
    }  

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     */       
    public function deleteAction(
        \Pluswerk\Simpleblog\Domain\Model\Blog $blog,
        \Pluswerk\Simpleblog\Domain\Model\Post $post)
    {
        $blog->removePost($post);
        $this->objectManager->get('Pluswerk\\Simpleblog\\Domain\\Repository\\BlogRepository')->update($blog);
        $this->redirect('display', 'Blog', null, array('blog'=>$blog));
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Post $post
     * @param \Pluswerk\Simpleblog\Domain\Model\Comment $comment
     */     
    public function ajaxAction(
        \Pluswerk\Simpleblog\Domain\Model\Post $post, 
        \Pluswerk\Simpleblog\Domain\Model\Comment $comment = null)
    {
        if( $comment->getComment() == "" ) {
            return false;
        }

        $comment->setCommentdate(new \DateTime);
        $post->addComment($comment);
        $this->postRepository->update($post);
        $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager')->persistAll();
        $comments = $post->getComments();
        foreach( $comments as $comment ) {
            $json[$comment->getUid()] = array(
                'comment'=>$comment->getComment(),
                'commentdate'=>$comment->getCommentdate()
            );
        }
        return json_encode($json);
    }
}

?>