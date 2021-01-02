<?php
namespace Pluswerk\Simpleblog\Domain\Repository;

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
 * The repository for Tags
 */
class TagsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    protected $defaultOrderings = array('tagvalue' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING);
}
