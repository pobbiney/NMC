<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardMembers extends Model
{
    public function category()
    {
        return $this->belongsTo(BoardCategory::class, 'category_id', 'id'); // Adjust if your FK is different
    }
}
