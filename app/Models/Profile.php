<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile_user';

    protected $fillable = [
        'province',
        'user_id',
        'gender',
        'bio',
        'facebook',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }

	/**
	 * @return mixed
	 */

}
