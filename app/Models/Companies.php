<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
   protected $fillable = ['companies_name', 'email', 'logo', 'websites'];

   
}
