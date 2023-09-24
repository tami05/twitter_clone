<?php

namespace Tests\Unit\Repositories;

use App\Models\Tweet;
use App\Repositories\TweetRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class TweetRepositoryTest extends TestCase
{
    /**
     * setUp
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        //DB初期化
        $this->truncateTweetDatabase();
    }

    /**
     * tearDown
     *
     * @return void
     */
    protected function tearDown(): void
    {
        //DB初期化
        $this->truncateTweetDatabase();
        parent::tearDown();
    }

    /**
     * tweetの一覧を取得（0レコード）
     *
     * @return void
     */
    public function testGetTweetListZeroRecord(): void
    {
        //チェック用データ
        //レコードが0の場合を判定するので空の配列を用意
        $expectedResult = [];
        //countで配列数をカウント
        $expectedResultCount = count($expectedResult);

        //User保存処理
        DB::transaction(function () use ($expectedResult) {
            Tweet::insert($expectedResult);
        });

        $repository = new TweetRepository();
        $result = $repository->getTweetList();
        dd($result);

        Log::info('OK1');
        //判定
        $this->assertCount($expectedResultCount, $result);
        Log::info('OK2');
        $this->assertEquals($expectedResult, $result->toArray());
        Log::info('OK3');

    }

    /**
     * tweetの一覧を取得（0レコード）
     *
     * @return void
     */
    public function testGetTweetListOneRecord(): void
    {
        //データ設定
        $data = [
            [
                'id' => 1,
                'content' => 'testtweet1',
                'user_id' => '1',
                'created_at' => null,
                'updated_at' => null,
            ],
        ];
    }

}
