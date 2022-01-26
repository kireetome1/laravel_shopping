<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        "name",
        "code",
        "price",
        "amount",
        "picture",
    ];

    protected $guarded = 
    [
        "id",
        "created_at",
        "updated_at",
    ];

    protected $dates =
    [
        "created_at",
        "updated_at",
    ];


}
