<?php
namespace Pluswerk\Simpleblog\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Fabio Picciau <fabio@rncstudio.com>
 */
class PostTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pluswerk\Simpleblog\Domain\Model\Post
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pluswerk\Simpleblog\Domain\Model\Post();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
