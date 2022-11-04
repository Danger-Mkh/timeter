<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Imanghafoori\EloquentMockery\MockableModel;

class Time extends Model
{
    use HasFactory, MockableModel, SoftDeletes;

    protected $fillable = [
        'start_at',
        'end_at'
    ];

    protected $dates = [
        'start_at',
        'end_at'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
