<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BattlePrivate extends Model
{
    protected $fillable = ['name', 'sponsor', 'seedFund'];
}
