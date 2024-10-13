<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auction extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    use HasFactory;

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'auctionable');
    }
}
