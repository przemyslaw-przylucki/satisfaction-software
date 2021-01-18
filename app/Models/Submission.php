<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'additional' => 'array'
    ];

    public function survey() : BelongsTo
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
