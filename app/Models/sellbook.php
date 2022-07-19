<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellbook extends Model
{
    use HasFactory;
    protected $table='sellbook';
    protected $fillable=['booktitle','bookauthor','bookedition','bookquantity','mobile','price','bookimage'];
}
