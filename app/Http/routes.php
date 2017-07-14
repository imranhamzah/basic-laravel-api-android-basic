<?php

Route::post('/add-to-whishlist','WhishListController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/1',function(){
    $data_user["server_response"] = array(array(
        "user_name" => "imran",
        "fullname"  => "Indera",
        "profile_image" => "https://scontent.fkul8-1.fna.fbcdn.net/v/t1.0-1/p160x160/13590366_1029934567082822_7217625828658638684_n.jpg?oh=52123e904f94ef1321578281925cfbd3&oe=59C88C61",
        "gender" => "Male",
        "age" => "31 years old",
        "rating" => "5.0",
        "prefer_words" => "Saya mencari seorang wanita yang serius ingin menjadi isteri saya dan mengikut saya ke London selepas berkahwin",
        "marital_status" => "Married",
        "profession" => "Full stack Software Developer @ OSEM",
        "education" => "Graduated from USM",
        "hometown" => "Cukai, Terenganu",
        "location" => "Lives in Shah Alam, Selangor",
        "viewers" => "Total unique viewers: 4570 peoples",
        "featured_image1" => "https://scontent.fkul8-1.fna.fbcdn.net/v/t1.0-9/12670506_973486192727660_2879046133286459875_n.jpg?oh=49c5a2c5f50d760e428623d985e3d71b&oe=59FBB509",
        "featured_image2" => "https://scontent.fkul8-1.fna.fbcdn.net/v/t1.0-9/12321689_973486189394327_5294380179039149998_n.jpg?oh=850dab90d0c60eb33d8ee6e83da5c276&oe=59CC2E98",
    ));

    return \Response::json($data_user, 200);
});

Route::get('/subscription', function () {
    $data_subscription['server_response'] = array(
        array(
            "plan_title" => "Package A",
            "duration" => "7 days",
            "plan_image" => "http://13.59.107.215/images/tv-on.jpg"
        ),
        array(
            "plan_title" => "Package B",
            "duration" => "30 days",
            "plan_image" => "http://13.59.107.215/images/nexus9-on.jpg"
        ),
        array(
            "plan_title" => "Package C",
            "duration" => "3 Months",
            "plan_image" => "http://13.59.107.215/images/auto-on.jpg"
        ),
        array(
            "plan_title" => "Package D",
            "duration" => "6 Months",
            "plan_image" => "http://13.59.107.215/images/nexus9-on.jpg"
        ),
        array(
            "plan_title" => "Package D",
            "duration" => "1 Year",
            "plan_image" => "http://13.59.107.215/images/nexus9-on.jpg"
        ),

    );

    return \Response::json($data_subscription, 200);
});

Route::get('/user-list', function () {
    $sample["server_response"] = array(
        array(
            "user_name" => "Imran",
            "fullname" => "Imran Hamzah"
        )
    );

    return \Response::json($sample, 200);
});