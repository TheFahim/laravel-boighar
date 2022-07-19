<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table='sellbook';
    protected $fillable=['title','batch_no','class_start_date','class_end_date','instructor_name','is_active'];
}
