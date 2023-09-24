<?php

namespace App\Http\Controllers;

use App\Repositories\TweetRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TweetController extends Controller
{
    /**
     * コンストラクタ
     *
     * @param TweetRepository $tweetRepository
     */
    public function __construct(
        TweetRepository $tweetRepository
    )
    {
        $this->tweetRepository = $tweetRepository;
    }

    /**
     * つぶやき内容の一覧を表示
     *
     * @param int|null $userId
     * @return View
     */
    public function index(int $userId = null): View
    {
        $tweetList = $this->tweetRepository->getTweetList($userId);

        return view('index', ['tweetList' => $tweetList]);

    }

    /**
     * つぶやきを投稿（ログインユーザーのみ）
     *
     * @param int $userId
     * @return View
     */
    public function post(int $userId): View
    {
        $tweetList = $this->tweetRepository->postTweet($userId);

        return view('post', ['tweetList' => $tweetList]);
    }

    /**
     * つぶやきを削除（ログインユーザーのみ）
     *
     * @param int $userId
     * @param int $tweetId
     * @return View
     */
    public function delete(int $userId, int $tweetId): View
    {
        $tweetList = $this->tweetRepository->deleteTweet($userId);

        return view('delete', ['tweetList' => $tweetList]);

    }
}
