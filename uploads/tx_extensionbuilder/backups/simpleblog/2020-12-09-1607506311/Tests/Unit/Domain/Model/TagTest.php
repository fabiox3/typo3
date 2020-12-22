<?php
namespace Pluswerk\Simpleblog\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Patrick Lobacher <nomail@mail.com>
 */
class TagTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pluswerk\Simpleblog\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pluswerk\Simpleblog\Domain\Model\Tag();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTagValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTagValue()
        );

    }

    /**
     * @test
     */
    public function setTagValueForStringSetsTagValue()
    {
        $this->subject->setTagValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tagValue',
            $this->subject
        );

    }
}
