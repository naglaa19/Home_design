<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['name','image','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
