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
 * BlogController
 */
class BlogController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
    * @var \Pluswerk\Simpleblog\Domain\Repository\BlogRepository
    */
    protected $blogRepository;

    /**
    * @param \Pluswerk\Simpleblog\Domain\Repository\BlogRepository $blogRepository
    */
    public function injectBlogRepository(\Pluswerk\Simpleblog\Domain\Repository\BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * list action
     * @return void
     */
    public function showAction()
    {
        $this->view->assign('blogs', $this->blogRepository->findAll());
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @return void
     */    
    public function saveAction($blog)
    {
        $this->blogRepository->add($blog);
        $this->redirect('show');
    }  
    
    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @ignorevalidation $blog
     * @return void
     */
    public function createAction(\Pluswerk\Simpleblog\Domain\Model\Blog $blog = null)
    {
        $this->view->assign('blog', $blog);
    }

    /**
     * @param \Pluswerk\Simpleblog\Domain\Model\Blog $blog
     * @return void
     */
    public function displayAction(\Pluswerk\Simpleblog\Domain\Model\Blog $blog)
    {
        $this->view->assign('blog', $blog);
    }
}
