<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
  public $timestamps = false;

  protected $table = 'favorites';
  protected $fillable = ['id', 'spot_id', 'user_id'];

}
