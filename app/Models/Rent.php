<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function instruments()
    {
    	return $this->belongsTo(Instrument::class);
    }

    public function orders()
    {
    	return $this->belongsTo(Order::class);
    }
}
