<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewService extends Model
{
    use HasFactory;
    protected $table = 'new_service';

    protected $fillable = [
        'title_uz',
        'title_en',
        'title_ru',
        'description_uz',
        'description_en',
        'description_ru',
        'image',
        'price',
        'deadline_uz',
        'deadline_en',
        'deadline_ru',
    ];
}
