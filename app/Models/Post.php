<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
  private static $posts = [
    [
      "text" => "Rek info menu buka di manarul hari ini dong",
      "slug" => "202304021345-rek-info-menu-buka-di-manarul-hari-ini-dong",
      "date" => "Sun, 2 Apr",
      "time" => "13.45",
      "author" => "shintaeyong",
      "image" => Null
    ],
    [
      "text" => "Semangat ETS ayang 5005******",
      "slug" => "202304021044-semangat-ets-ayang-5005",
      "date" => "Sun, 2 Apr",
      "time" => "10.44",
      "author" => "flappybird",
      "image" => Null,
    ],
    [
      "text" => "Rek gerbang asrama buka ga ya sekarang??",
      "slug" => "202304020845-rek-gerbang-asrama-buka-ga-ya-sekarang",
      "date" => "Sun, 2 Apr",
      "time" => "08.45",
      "author" => "__xxoyou33",
      "image" => Null,
    ],
  ];

  public static function all() {
    return self::$posts;
  }

  public static function find($slug) {
    $posts = self::$posts;
    foreach($posts as $p) {
        if ($p["slug"] === $slug) {
            return $p;
        }
    }
  }
}
