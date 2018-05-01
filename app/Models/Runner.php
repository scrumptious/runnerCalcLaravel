<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Runner extends Model {
  protected $fillable = ['name', 'age', 'distance', 'hours', 'minutes', 'seconds'];

  public function isActive() {
    return false;
  }
}
