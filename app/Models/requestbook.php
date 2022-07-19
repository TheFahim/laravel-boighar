<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestbook extends Model
{
    use HasFactory;
    protected $table='requestbook';
    protected $fillable=['booktitle','bookauthor','bookedition','bookquantity','mobile','address','bookimage'];
}
