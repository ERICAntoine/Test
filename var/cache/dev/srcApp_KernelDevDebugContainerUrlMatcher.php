<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/([^/]++)(?'
                        .'|(*:181)'
                        .'|/(?'
                            .'|temperature(?'
                                .'|(*:207)'
                                .'|_m(?'
                                    .'|ax(*:222)'
                                    .'|in(*:232)'
                                .')'
                            .')'
                            .'|w(?'
                                .'|eather(*:252)'
                                .'|ind(?'
                                    .'|speed(*:271)'
                                    .'|direction(*:288)'
                                .')'
                            .')'
                            .'|precipitation(*:311)'
                            .'|sun(?'
                                .'|rise(*:329)'
                                .'|set(*:340)'
                            .')'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            181 => [[['_route' => 'index', '_controller' => 'App\\Controller\\WeatherController::index'], ['city'], null, null, false, true, null]],
            207 => [[['_route' => 'temperature', '_controller' => 'App\\Controller\\WeatherController::temperature'], ['city'], null, null, false, false, null]],
            222 => [[['_route' => 'temperature_max', '_controller' => 'App\\Controller\\WeatherController::temperatureMax'], ['city'], null, null, false, false, null]],
            232 => [[['_route' => 'temperature_min', '_controller' => 'App\\Controller\\WeatherController::temperatureMin'], ['city'], null, null, false, false, null]],
            252 => [[['_route' => 'weather', '_controller' => 'App\\Controller\\WeatherController::weather'], ['city'], null, null, false, false, null]],
            271 => [[['_route' => 'windspeed', '_controller' => 'App\\Controller\\WeatherController::WindSpeed'], ['city'], null, null, false, false, null]],
            288 => [[['_route' => 'winddirection', '_controller' => 'App\\Controller\\WeatherController::WindDirection'], ['city'], null, null, false, false, null]],
            311 => [[['_route' => 'precipitation', '_controller' => 'App\\Controller\\WeatherController::precipitation'], ['city'], null, null, false, false, null]],
            329 => [[['_route' => 'sunrise', '_controller' => 'App\\Controller\\WeatherController::sunRise'], ['city'], null, null, false, false, null]],
            340 => [[['_route' => 'sunset', '_controller' => 'App\\Controller\\WeatherController::sunSet'], ['city'], null, null, false, false, null]],
        ];
    }
}
