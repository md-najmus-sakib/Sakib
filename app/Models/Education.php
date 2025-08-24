<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'institution_name',
        'degree',
        'field_of_study',
        'start_year',
        'end_year',
        'status',
        'description',
        'order'
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('start_year', 'desc');
    }

    public function getYearRangeAttribute()
    {
        return $this->start_year . ($this->end_year ? ' - ' . $this->end_year : ' - Present');
    }
}
