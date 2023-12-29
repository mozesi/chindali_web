<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    protected $fillable = ['ndali_word', 'english_word'];

    function description(): HasMany
    {

        return $this->hasMany(Description::class);
    }
}
