<?php
namespace App\Repositories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Collection;

class TweetRepository
{
    /**
     * つぶやきの一覧を取得（ログイン・未ログイン）
     *
     * @return Collection
     */
    public static function getTweetList(): Collection
    {
        return Tweet::all();
    }
}
