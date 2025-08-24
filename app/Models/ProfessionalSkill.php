<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'icon',
        'color',
        'technologies',
        'proficiency',
        'order',
        'is_active'
    ];

    protected $casts = [
        'technologies' => 'array',
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

    public function getTechnologiesAsStringAttribute()
    {
        return is_array($this->technologies) ? implode(', ', $this->technologies) : '';
    }

    public function getProficiencyStarsAttribute()
    {
        return str_repeat('⭐', $this->proficiency) . str_repeat('☆', 5 - $this->proficiency);
    }
}
