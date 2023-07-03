<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $login
 * @property string $passe
 * @property integer $phone
 * @property string $address
 * @property string $genre
 * @property string $cin
 * @property string $created_at
 * @property string $updated_at
 * @property Incident[] $incidents
 * @property Likesdeslike[] $likesdeslikes
 */
class Citoyene extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'login', 'passe', 'phone', 'address', 'genre', 'cin', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidents()
    {
        return $this->hasMany('App\Models\Incident');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likesdeslikes()
    {
        return $this->hasMany('App\Models\Likesdeslike');
    }
}
