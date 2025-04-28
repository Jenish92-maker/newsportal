<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    public function aticles(): BelongsToMany
    {
        return $this->BelongsToMany(Article::class);
    }
}
