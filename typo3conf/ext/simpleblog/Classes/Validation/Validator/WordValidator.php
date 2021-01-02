<?php
namespace Pluswerk\Simpleblog\Validation\Validator;

class WordValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator
{
    protected $supportedOptions = array(
        'max' => array(PHP_INT_MAX, 'Il numero massimo di parole da accettare', 'integer'),
    );

    public function isValid($property)
    {
        $max = $this->options['max'];

        if( str_word_count($property, 0) <= $max ) {
            return true;
        } else {
            $this->addError('Riduci la quantità di parole - sono ammessi ' . $max . ' max!');
            return false;
        }


    }
}

?>