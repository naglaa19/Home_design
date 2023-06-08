<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scanDesign extends Model
{
    use HasFactory;
    protected $table='scan_designs';
    protected $fillable=['name','image','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
