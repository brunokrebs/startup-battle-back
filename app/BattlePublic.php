<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BattlePublic extends Model
{
    protected $fillable = ['name', 'sponsor', 'seedFund'];
}
