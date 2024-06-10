<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // assuming you have a user_id column in your contacts table
        'name',
        'phone',
        'email',
        'address',
        'category',
    ];

    // Define the inverse relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
