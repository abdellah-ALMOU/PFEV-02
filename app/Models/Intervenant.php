<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $login
 * @property string $passe
 * @property string $address
 * @property string $date
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 * @property Reaction[] $reactions
 */
class Intervenant extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'login', 'passe', 'address', 'date', 'email', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reactions()
    {
        return $this->hasMany('App\Models\Reaction');
    }
}
