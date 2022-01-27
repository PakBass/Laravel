<?php

namespace App\Models;

class Blog
{
    private static $new_blog = [
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

    public static function all()
    {
        return collect(self::$new_blog);
    }

    public static function find($title_lain)
    {
        $postingan = static::all();
        return $postingan->firstWhere('title_lain', $title_lain);
    }
}
