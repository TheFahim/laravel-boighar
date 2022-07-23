<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sellbook extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='sellbook';
    protected $fillable=['booktitle','bookauthor','bookedition','bookquantity','mobile','price','bookimage'];
}
