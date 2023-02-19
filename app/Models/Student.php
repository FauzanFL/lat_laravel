<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'students';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'nim',
        'email',
        'jk',
        'jurusan',
    ];

    use HasFactory;
}
