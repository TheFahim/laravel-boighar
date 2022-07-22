<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class donatebook extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='donatebooks';
    protected $fillable=['fullname','email','address','mobile','booktitle','bookauthor','bookedition','bookquantity','bookimage','status'];
}
