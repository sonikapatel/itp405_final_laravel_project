<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $table = 'spotTypeTable';
  protected $fillable = ['id', 'spotType'];
}
