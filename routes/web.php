<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index', [
        "title"     => "Laravel - Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"     => "Laravel - About",
        "nama"      => "M.Andhi Rohmat Basuki",
        "guru"      => "Mapel Produktif RPL"
    ]);
});

Route::get('/blog', function () {
    $new_blog = [
        [
            "title"         => "Blog pertama",
            "title_lain"    => "blog-pertama",
            "penulis"       => "Mr.Basuki",
            "konten"        => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam saepe quaerat fugiat aliquam magni rerum, eius voluptatibus totam dicta obcaecati sapiente ipsa blanditiis, enim reprehenderit unde a quidem ex aspernatur?"
        ],
        [
            "title"         => "Blog kedua",
            "title_lain"    => "blog-kedua",
            "penulis"       => "Mr.Andhi",
            "konten"        => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam saepe quaerat fugiat aliquam magni rerum, eius voluptatibus totam dicta obcaecati sapiente ipsa blanditiis, enim reprehenderit unde a quidem ex aspernatur?"
        ]
    ];
    return view('blog', [
        "title"     => "Laravel - Blog",
        "post"      => $new_blog
    ]);
});

Route::get('read/{title_lain}', function($title_lain){
    $new_blog = [
        [
            "title"         => "Blog pertama",
            "title_lain"    => "blog-pertama",
            "penulis"       => "Mr.Basuki",
            "konten"        => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit distinctio impedit pariatur architecto nulla numquam reprehenderit facere, vel itaque aliquid tempore illum beatae placeat voluptate, velit illo totam dolorem quaerat minus temporibus eos ipsam? Rem fugiat temporibus ad, fuga harum aliquam, cumque sint iure ex a vitae dolores velit quos quo facilis doloremque ducimus voluptate animi doloribus quidem! Eos maxime soluta commodi dignissimos architecto quam natus. Optio id tempora fuga dolores, fugit, dolor voluptates culpa architecto odio ratione sapiente eum voluptate itaque magnam corrupti? Officia laborum delectus obcaecati animi saepe nisi rem, quibusdam nemo adipisci eos ipsum. Consectetur, dicta nostrum."
        ],
        [
            "title"         => "Blog kedua",
            "title_lain"    => "blog-kedua",
            "penulis"       => "Mr.Andhi",
            "konten"        => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit distinctio impedit pariatur architecto nulla numquam reprehenderit facere, vel itaque aliquid tempore illum beatae placeat voluptate, velit illo totam dolorem quaerat minus temporibus eos ipsam? Rem fugiat temporibus ad, fuga harum aliquam, cumque sint iure ex a vitae dolores velit quos quo facilis doloremque ducimus voluptate animi doloribus quidem! Eos maxime soluta commodi dignissimos architecto quam natus. Optio id tempora fuga dolores, fugit, dolor voluptates culpa architecto odio ratione sapiente eum voluptate itaque magnam corrupti? Officia laborum delectus obcaecati animi saepe nisi rem, quibusdam nemo adipisci eos ipsum. Consectetur, dicta nostrum."
        ]
    ];

    $new_post = [];
    foreach($new_blog as $post){
        if($post["title_lain"] === $title_lain){
            $new_post = $post;
        }
    }

    return view('read', [
        "title"     => "single blog",
        "post"      => $new_post
    ]);
});
