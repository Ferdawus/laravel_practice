<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    public function carWaner()
    {
        return $this->hasOneThrough(Owner::class,Car::class);
    }
    public function car()
    {
        return $this->hasOne(Car::class);
    }
}