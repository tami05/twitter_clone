<?php

namespace Controllers;

use tests\TestCase;

class TweetControllerTest extends TestCase
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
    public function testIndexAsNotLogin(): void
    {

    }
}
