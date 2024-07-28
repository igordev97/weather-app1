<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitiesModel extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'name'
    ];


    public function forcasts(){
        return $this->hasMany(ForcasterModel::class,'city_id','id');
    }
}
