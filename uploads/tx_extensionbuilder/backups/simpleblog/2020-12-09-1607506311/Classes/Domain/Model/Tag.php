<?php
namespace Pluswerk\Simpleblog\Domain\Model;

/***
 *
 * This file is part of the "Simple Blog Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Patrick Lobacher <nomail@mail.com>, +Pluswerk AG
 *
 ***/

/**
 * Tags
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * tagValue
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $tagValue = '';

    /**
     * Returns the tagValue
     * 
     * @return string $tagValue
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }

    /**
     * Sets the tagValue
     * 
     * @param string $tagValue
     * @return void
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
    }
}
