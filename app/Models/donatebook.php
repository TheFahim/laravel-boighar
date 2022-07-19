<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donatebook extends Model
{
    use HasFactory;
    protected $table='donatebooks';
    protected $fillable=['fullname','email','address','mobile','booktitle','bookauthor','bookedition','bookquantity','bookimage'];
}
    