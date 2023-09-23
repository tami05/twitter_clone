<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    /**
     * 課金なし
     *
     * @var int
     */
    const IS_NOT_BILLING = 0;

    /**
     * 課金あり
     *
     * @var int
     */
    const IS_BILLING = 1;
}
