<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'article';

    protected $fillable = [
        'title_fld',
        'detail_fld',
        'user_id',
    ];
}
