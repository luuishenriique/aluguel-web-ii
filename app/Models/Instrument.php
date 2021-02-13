<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'model',
        'year',
        'type',
        'price',
        'status',
    ];

    public function rents()
    {
    	return $this->hasMany(Rent::class);
    }
}
