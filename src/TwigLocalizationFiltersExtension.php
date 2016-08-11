<?php

namespace Bolt\Extension\Bveldhuis\TwigLocalizationFilters;

use \Bolt\Extension\SimpleExtension;

class TwigLocalizationFiltersExtension extends SimpleExtension {

    protected function registerTwigFilters() {
        
        require_once __DIR__ . '/Twig_Extensions_Extension_Intl.php';

        return [
            'localizeddate' => ['twig_localized_date_filter', ['needs_environment' => true]],
            'localizednumber' => 'twig_localized_number_filter',
            'localizedcurrency' => 'twig_localized_currency_filter'
        ];
    }
}
