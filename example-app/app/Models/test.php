<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;

   protected $table='test';
   protected $primary_key='id';

   protected $fillable = [
    'number1',
    'number2',
    'text',
   ];

}
