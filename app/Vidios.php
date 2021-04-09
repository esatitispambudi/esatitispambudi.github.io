<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vidios extends Model
{
    protected $table="Vidios";
    protected $primaryKey="id";
    protected $fillable=['url_vidio','ket'];
}
