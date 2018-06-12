<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicTable extends Model
{
    //
    protected $fillable = [
      'input','output','tanggal_proses' , 'kata_berulang'
  ];
}
