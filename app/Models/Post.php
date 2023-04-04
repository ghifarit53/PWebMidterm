<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post
{
  private static $posts = [
    [
      "text" => "Rek info menu buka di manarul hari ini dong",
      "slug" => "202304021345-rek-info-menu-buka-di-manarul-hari-ini-dong",
      "date" => "Sun, 2 Apr",
      "time" => "13.45",
      "user" => "shintaeyong",
      "image" => Null
    ],
    [
      "text" => "Semangat ETS ayang 5005******",
      "slug" => "202304021044-semangat-ets-ayang-5005",
      "date" => "Sun, 2 Apr",
      "time" => "10.44",
      "user" => "flappybird",
      "image" => Null,
    ],
    [
      "text" => "Rek gerbang asrama buka ga ya sekarang??",
      "slug" => "202304020845-rek-gerbang-asrama-buka-ga-ya-sekarang",
      "date" => "Sun, 2 Apr",
      "time" => "08.45",
      "user" => "__xxoyou33",
      "image" => Null,
    ],
  ];

  public static function all() {
    return self::$posts;
  }

  public static function slugify($text, string $divider = '-') {
    $now = new DateTime();
    $timestamp = $now->format('YmdHis');
    
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
  
    // trim
    $text = trim($text, $divider);
  
    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);
  
    // lowercase
    $text = strtolower($text);
  
    if (empty($text)) {
      $text = 'n-a';
    }
  
    // trim slug to max 128 characters
    $slug = $timestamp . $divider . $text;
    $slug = substr($slug, 0, 128);
  
    return $slug;
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
