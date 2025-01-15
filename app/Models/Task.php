<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = ['project_id', 'title', 'description', 'assigned_to', 'due_date', 'status'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
