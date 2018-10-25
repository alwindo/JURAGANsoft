<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
  protected $table ='aplikasi';
  public $timestamp = false;//dibuat jika kolom created_at & updated_at tidak ada

}
