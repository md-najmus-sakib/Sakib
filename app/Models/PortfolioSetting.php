<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'bio',
        'short_description',
        'profile_image',
        'cv_file',
        'interests'
    ];

    protected $casts = [
        'interests' => 'array'
    ];

    public static function getSettings()
    {
        return self::first() ?? new self();
    }

    public function getInterestsAsStringAttribute()
    {
        return is_array($this->interests) ? implode(', ', $this->interests) : '';
    }
}
