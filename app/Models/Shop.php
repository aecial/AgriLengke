<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'user_id',
        'latitude',
        'longitude',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
