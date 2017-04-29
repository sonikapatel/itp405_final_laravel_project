<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
  protected $table = 'closingTimeTable';
protected $fillable = ['id', 'closingTime'];
}
