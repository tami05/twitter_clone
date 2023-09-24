<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    /**
     * Userテーブルのレコードを削除
     *
     * @return void
     */
    protected function truncateUserDatabase(): void
    {
        // テーブル名を設定
        $tablesToTruncate = 'user';

        // 外部キー制約を無効化
        Schema::disableForeignKeyConstraints();

        //
        if(Schema::hasTable($tablesToTruncate)){
            // 各テーブル毎にtruncateでデータ削除
            DB::table($tablesToTruncate)->truncate();
        }

        // 外部キー制約を有効化
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Tweetテーブルのレコードを削除
     *
     * @return void
     */
    protected function truncateTweetDatabase(): void
    {
        // テーブル名を設定
        $tablesToTruncate = 'tweet';

        // 外部キー制約を無効化
        Schema::disableForeignKeyConstraints();

        //
        if(Schema::hasTable($tablesToTruncate)){
            // 各テーブル毎にtruncateでデータ削除
            DB::table($tablesToTruncate)->truncate();
        }

        // 外部キー制約を有効化
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Billingテーブルのレコードを削除
     *
     * @return void
     */
    protected function truncateBillingDatabase(): void
    {
        // テーブル名を設定
        $tablesToTruncate = 'billing';

        // 外部キー制約を無効化
        Schema::disableForeignKeyConstraints();

        //
        if(Schema::hasTable($tablesToTruncate)){
            // 各テーブル毎にtruncateでデータ削除
            DB::table($tablesToTruncate)->truncate();
        }

        // 外部キー制約を有効化
        Schema::enableForeignKeyConstraints();

    }

}
