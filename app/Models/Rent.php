<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public class users()
    {
    	$this->belongsTo(User::class);
    }

    public class instruments()
    {
    	$this->belongsTo(Instrument::class);
    }

    public class orders()
    {
    	$this->belongsTo(Order::class);
    }
}
