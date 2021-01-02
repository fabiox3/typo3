<?php

namespace Pluswerk\Simpleblog\Service;

class GoogleAutocompleteApiService implements \TYPO3\CMS\Core\SingletonInterface
{
    /**
     * @param mixed $object
     * @param string $property
     * @return array
     */
    public function validateData($object, $property)
    {
        $errors = array();

        //ottieni valore dalla proprietà
        $getter = 'get' . ucfirst($property);
        $getValue = strtolower($object->$getter);

        // URL per richiedere suggerimenti di autocompletamento
        $url = 'https://www.google.com/complete/search?output=firefox&q=' . urlencode($getValue);

        if( !empty($getValue) ) {
            $result = json_decode(utf8_encode(file_get_contents($url)));
        }

        // verifica se c'è alcun risultato o se il valore non è nei suggerimenti
        if( !empty($getValue) && (empty($result[1]) || array_search($getValue, $result[1]) === false) ) {
            $errors[$property] = 'Nessuna voce di autocompletamento per <strong>' . $getValue . '</strong>';

            // Aggiungi valori di autocompletamento (se esistono)
            if( !empty($result[1]) ) {
                $errors[$property] .= ' (valori possibili sono: ' . implode(', ' . $result[1]) . ')';
            }
        }
        return $errors;
    }    
}

?>