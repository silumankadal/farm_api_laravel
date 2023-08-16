<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    // public function kandang(): BelongsTo{
    //     return $this->belongsTo(Animal::class, 'cage_id', 'id');
    // }

    // public function tempat(): HasOne{
    //     return $this->hasOne(Animal::class, 'cage_id', 'id');
    // }

    public function kandang(){
        return $this->hasOne(Cage::class, 'id', 'cage_id');
    }
}
