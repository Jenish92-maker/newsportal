<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
