<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'price'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
