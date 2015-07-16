<?php
return array(
    'weather' => array (
        'class' => 'EssentialWeatherService',
        'period' => '/5 * * * *',
        'drivers' => array (
            'ekb' => array(
                'class' => 'EssentialHmnDriver',
                'title' => 'Прогноз погоды в Екатеринбурге на 10 дней',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => '66_ru',
                'cityId' => 28440,
            ),
            'perm' => array(
                'class' => 'EssentialHmnDriver',
                'title' => 'Прогноз погоды в Перми на 10 дней',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'properm_ru',
                'cityId' => 28224,
            ),
            'tambov' => array(
                'class' => 'EssentialHmnDriver',
                'title' => 'Прогноз погоды в Тамбове на 10 дней',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'vtambove_ru',
                'cityId' => 27947,
            ),
            'almaty' => array(
                    'class' => 'EssentialHmnDriver',
                    'title' => 'Прогноз погоды в Алматы на 10 дней',
                    'url1' => $params['hmnUrl'],
                    'url2' => $params['hmnUrl2'],
                    'prefix' => 'k1_kz',
                    'cityId' => 36870,
            ),
            'omsk' => array(
                    'class' => 'EssentialHmnDriver',
                    'title' => 'Прогноз погоды в Омске на 10 дней',
                    'url1' => $params['hmnUrl'],
                    'url2' => $params['hmnUrl2'],
                    'prefix' => 'om1_ru',
                    'cityId' => 28698,
            ),
            'gorodche' => array(
                    'class' => 'EssentialHmnDriver',
                    'title' => 'Прогноз погоды в Череповце на 10 дней',
                    'url1' => $params['hmnUrl'],
                    'url2' => $params['hmnUrl2'],
                    'prefix' => 'gorodche_ru',
                    'cityId' => 27113,
            ),
            'engels' => array(
                    'class' => 'EssentialHmnDriver',
                    'title' => 'Прогноз погоды в Энгельсе на 10 дней',
                    'url1' => $params['hmnUrl'],
                    'url2' => $params['hmnUrl2'],
                    'prefix' => 'los-engels_ru',
                    'cityId' => 34778,
            )
        ),
    ),
    'weathercurrent' => array (
        'class' => 'EssentialCurrentWeatherService',
        'period' => '/5 * * * *',
        'drivers' => array (
            'ekb' => array(
                'class' => 'EssentialCurrentEkburgDriver',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => '66_ru',
                'cityId' => 28440,
            ),
            'perm' => array(
                'class' => 'EssentialCurrentHmnDriver',
                'title' => 'Текущая погода в Перми',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'properm_ru',
                'cityId' => 28224,
            ),
            'tambov' => array(
                'class' => 'EssentialCurrentHmnDriver',
                'title' => 'Текущая погода в Тамбове',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'vtambove_ru',
                'cityId' => 27947,
            ),
            'almaty' => array(
                'class' => 'EssentialCurrentHmnDriver',
                'title' => 'Текущая погода в Алматы',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'k1_kz',
                'cityId' => 36870,
            ),
            'omsk' => array(
                'class' => 'EssentialCurrentHmnDriver',
                'title' => 'Текущая погода в Омске',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'om1_ru',
                'cityId' => 28698,
            ),
            'gorodche' => array(
                'class' => 'EssentialCurrentHmnDriver',
                'title' => 'Текущая погода в Череповце',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'gorodche_ru',
                'cityId' => 27113,
            ),
            'engels' => array(
                'class' => 'EssentialCurrentHmnDriver',
                'title' => 'Текущая погода в Энгельсе',
                'url1' => $params['hmnUrl'],
                'url2' => $params['hmnUrl2'],
                'prefix' => 'los-engels_ru',
                'cityId' => 34778,
            )
        ),
    )
);