<?php
$api_root = 'http://localhost:8000/api';
return [
    'api_base_path'=>$api_root,

    // property routes
    'api_related_property'=>$api_root.'/properties/related',
    'api_properties'=>$api_root.'/properties',
    'api_property_count'=>$api_root.'/properties/count',
    'api_generic_property'=>$api_root.'/properties/some',
    'api_generic_property_count'=>$api_root.'/properties/some/count',
    'api_latest_property'=>$api_root.'/properties/latest',
    'api_latest_trending_property'=>$api_root.'/properties/latestTrending',
    'api_generic_latest_property'=>$api_root.'/properties/genericLatest',


    'api_images'=>$api_root.'/uploads/images',//attatch file_name as path variable
    'api_mail_notification'=>$api_root.'/notification/mail',

    // messages, problems and orders
    'api_messages'=>$api_root.'/messages',


    'api_orders'=>$api_root.'/orders',
    'api_orders_count'=>$api_root.'/orders/count',
    'api_specific_orders'=>$api_root.'/orders/some',
    'api_specific_orders_count'=>$api_root.'/orders/some/count',
    'api_recent_orders'=>$api_root.'/orders/recent',

    // subscription
    'api_subscriptions'=>$api_root.'/subscriptions',

    'api_schedules'=>$api_root.'/schedules',
    'api_schedules_count'=>$api_root.'/schedules/count',
    'api_specific_schedules'=>$api_root.'/schedules/some',
    'api_specific_schedules_count'=>$api_root.'/schedules/some/count',
    'api_recent_schedules'=>$api_root.'/schedules/recent',
    'api_pending_schedules'=>$api_root.'/schedules/pending',
    'api_acheived_schedules'=>$api_root.'/schedules/acheived',

    // customers
    'api_customers'=>$api_root.'/customers',
    'api_customers_count'=>$api_root.'/customers/count',
    'api_specific_customers'=>$api_root.'/customers/some',
    'api_specific_customers_count'=>$api_root.'/customers/some/count',

    // users
    'api_users'=>$api_root.'/users',
    'api_users_count'=>$api_root.'/users/count',
    'api_specific_users'=>$api_root.'/users/some',
    'api_specific_users_count'=>$api_root.'/users/some/count'
];