<?php 

namespace App\Controller;

use Cmfcmf\OpenWeatherMap;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    private $city;

    public function __construct()
    {
        $this->api = new OpenWeatherMap("e33a3033c421b3cb3a7e59d3e9e0cf19");
    }

    /**
     * @Route("/{city}", name="index");
     * 
     * Method return json with all city info
     * 
     */

    public function index($city)
    {
        $this->city = $this->api->getWeather($city, "celsus", "fr");
        return new Response(json_encode($this->city));
    }

    /**
     * @Route("/{city}/temperature", name="temperature");
     * 
     * Method return string of current temperature with unit
     * 
     * Example: "15 °C"
     * 
     */

    public function temperature($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->temperature->now);

    }

    /**
     * @Route("/{city}/temperature_max", name="temperature_max");
     * 
     * Method return string of max temperature with unit
     * 
     * Example: "18 °C"
     * 
     */

    public function temperatureMax($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->temperature->max);
    }

    /**
     * @Route("/{city}/temperature_min", name="temperature_min");
     * 
     * Method return string of min temperature with unit
     * 
     *  Example: "13 °C"
     * 
     */

    public function temperatureMin($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->temperature->min);

    }

    /**
     * @Route("/{city}/weather", name="weather");
     * 
     * Method return string of current weather in French
     * 
     * Example: "ciel dégagé"
     * 
     */

    public function weather($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->clouds->getDescription());
    }

    /**
     * @Route("/{city}/windspeed", name="windspeed");
     * 
     * Method return string wind speed with unit
     * 
     * Example: 6.2m/s
     * 
     */

    public function WindSpeed($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->wind->speed);
    }

    /**
     * @Route("/{city}/winddirection", name="winddirection");
     * 
     * Method return a string wind direction
     * 
     * Example: "20 NNE"
     * 
     */

    public function WindDirection($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->wind->direction);
    }

    /**
     * @Route("/{city}/precipitation", name="precipitation");
     * 
     * Method return a string "rain" or "no"
     */

    public function precipitation($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->precipitation->getDescription());
    }

    /**
     * @Route("/{city}/sunrise", name="sunrise");
     * 
     * Method return a string of date in this format (D, d.m.y h.m.s O)
     * 
     */

    public function sunRise($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->sun->rise->format('r'));
    }

    /**
     * @Route("/{city}/sunset", name="sunset");
     * 
     * Method return a string of date in this format (D, d.m.y h.m.s O)
     * 
     */

    public function sunSet($city)
    {
        $this->city = $this->api->getWeather($city, "metric", "fr");
        return new Response($this->city->sun->set->format('r'));
    }
}