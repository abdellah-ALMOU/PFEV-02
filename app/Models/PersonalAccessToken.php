<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $tokenable_type
 * @property integer $tokenable_id
 * @property string $name
 * @property string $token
 * @property string $abilities
 * @property string $last_used_at
 * @property string $expires_at
 * @property string $created_at
 * @property string $updated_at
 */
class PersonalAccessToken extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['tokenable_type', 'tokenable_id', 'name', 'token', 'abilities', 'last_used_at', 'expires_at', 'created_at', 'updated_at'];
}
