<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform',
        'url',
        'icon',
        'color',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    public function getIconClassAttribute()
    {
        if ($this->icon) {
            return $this->icon;
        }

        // Default icons based on platform
        $defaultIcons = [
            'facebook' => 'fab fa-facebook',
            'linkedin' => 'fab fa-linkedin',
            'github' => 'fab fa-github',
            'twitter' => 'fab fa-twitter',
            'instagram' => 'fab fa-instagram',
            'email' => 'fas fa-envelope',
            'phone' => 'fas fa-phone',
            'website' => 'fas fa-globe'
        ];

        return $defaultIcons[strtolower($this->platform)] ?? 'fas fa-link';
    }
}
