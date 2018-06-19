<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class thuocs extends Model
{
    //
    protected $table='thuocs';
	protected $fillable=['id','tenthuoc','soluong','giasi','giale','soke','ngayhethan','created_at'];
	public $timestamps = true;
}
