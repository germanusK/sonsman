<?php

namespace App\HttpService;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class HttpServiceProvider{


    function testString(){
        return "Seems better now";
    }
    
    function getProperty(){
        return Http::get(Config::get('api_routes.api_properties'));
    }
    function getLatestProperty(){
        return Http::get(Config::get('api_routes.api_latest_property'));
    }

    function getRelatedProperty($id){
        return Http::get(Config::get('api_routes.api_relatred_property').'/'.$id);
    }

    function getById($id){
        return Http::get(Config::get('api_routes.api_properties').'/'.$id);
    }

    function genericGetProperty($argumentArray){
        return Http::get(Config::get('api_routes.api_specific_properties'), [$argumentArray]);
    }

    function getLatestTrendingProperty(){
        return Http::get(Config::get('api_routes.api_latest_trending_property'));
    }

    function getPropertyCount(){
        return Http::get(Config::get('api_routes.api_property_count'));
    }
}