<?php

namespace App\Models\MainPage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontMainpage extends Model
{
    use HasFactory;

   protected $fillable = ['meta_title', 'meta_description','meta_h1'];
}
