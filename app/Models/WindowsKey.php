use Illuminate\Database\Eloquent\Model;

<?php

namespace App\Models;


class WindowsKey extends Model
{
    protected $table = 'windows_keys';

    protected $fillable = [
        'name',
        'auth',
        '',
        '',
    ];

    protected $casts = [
        'activated' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
