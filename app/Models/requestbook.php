<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class requestbook extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='requestbook';
    protected $fillable=['booktitle','bookauthor','bookedition','bookquantity','mobile','address','bookimage'];
}
