<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public function users()
    {
    	$this->belongsTo(User::class);
    }

    public function instruments()
    {
    	$this->belongsTo(Instrument::class);
    }

    public function orders()
    {
    	$this->belongsTo(Order::class);
    }
}
