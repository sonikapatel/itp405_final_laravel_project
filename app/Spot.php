<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    public function SpotType(){
      return $this->belongsTo('App\Type');
    }
    public function ClosingTime(){
      return $this->belongsTo('App\Time');
    }
    public function StartTime(){
      return $this->belongsTo('App\Time2');
    }
  public function Review(){
    return $this->belongsTo('App\Review');
  }
  public function Favorite(){
    return $this->belongsTo('App\Favorite');
  }
}
