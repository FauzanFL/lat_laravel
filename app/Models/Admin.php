<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'admins';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'username',
        'password',
    ];
    use HasFactory;
}
