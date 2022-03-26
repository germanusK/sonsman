<?php
$api_root = 'http://localhost:8001/api';
return [
    'api_base_path'=>$api_root,

    // property routes
    'api_properties'=>$api_root.'/properties',
    'api_property_count'=>$api_root.'/properties/count',
    'api_specific_properties'=>$api_root.'/properties/some',
    'api_properties_specific_count'=>$api_root.'/properties/some/count',
    'api_latest_property'=>$api_root.'/properties/latest',
    'api_latest_trending_property'=>$api_root.'/properties/latestTrending',
    'api_related_property'=>$api_root.'/properties/related',


    'api_images'=>$api_root.'/uploads/images',//attatch file_name as path variable
    'api_mail_notification'=>$api_root.'/notification/mail',

    // messages, problems and orders
    'api_messages'=>$api_root.'/messages',
    'api_problems'=>$api_root.'/problems',
    'api_orders'=>$api_root.'/orders',

    // subscription
    'api_subscriptions'=>$api_root.'/subscriptions',
];