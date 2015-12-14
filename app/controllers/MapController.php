<?php

class MapController extends \BaseController {

    public function showHeatMap($crop_id){
        $product = Product::where('crop_id',$crop_id)
                            ->get(['location']);

        //return $product;

        return View::make('map.heatmap')->with('title','Heatmap');
    }

    public function latlong($location){

     // Get lat and long by address
        $address = $location; // Google HQ
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        $output= json_decode($geocode);
        $latitude = $output->results[0]->geometry->location->lat;
        $longitude = $output->results[0]->geometry->location->lng;

        return ['lat'=>$latitude,
                'long'=>$longitude];

    }
}