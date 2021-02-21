<?php
    $arResult = 'arData.txt';
    $brands = json_decode(file_get_contents($arResult), true);
    $brands = array_shift($brands);

    function sorting_brands(array &$brands)
    {
        usort($brands, function ($a, $b) {
            return $a['NAME'] <=> $b['NAME'];
        });
    }

    sorting_brands($brands);

    $letter = '';
    foreach ($brands as $item) {
        if ((strcasecmp($item['NAME'][0], $letter)) != 0) {
            $letter = strtoupper($item['NAME'][0]);
            $brands[]['NAME'] = $letter;
        }
    };
    unset($item);

    sorting_brands($brands);