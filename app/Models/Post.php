<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'photo',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function tag(): BelongsToMany
    {
        return $this->BelongsToMany(Tag::class);
    }

//  public function getFeaturedAttribute($photo)
//     {
//         return asset($photo);
//     }
}
