<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poetry extends Model
{
    use HasFactory;

    protected $table = 'poetries';
    protected $guarded = ['id'];

    protected $fillable = [
        'title','piece','author','image'
    ];
}
