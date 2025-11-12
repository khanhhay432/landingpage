<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    // Không dùng timestamps
    public $timestamps = false;

    // Khóa chính là setting_key, không tự tăng
    protected $primaryKey = 'setting_key';
    public $incrementing = false;
    protected $keyType = 'string';

    // Cho phép mass assignment
    protected $fillable = [
        'setting_key',
        'setting_value'
    ];
}
