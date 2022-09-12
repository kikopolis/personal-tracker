<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInvite extends Model {
    use HasFactory;
    
    protected $fillable = [
        'email',
        'token',
    ];
    
    protected $casts = [
        'token_expires_at' => 'datetime',
    ];
}
