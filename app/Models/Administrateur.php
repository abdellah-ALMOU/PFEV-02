<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $login
 * @property string $passe
 * @property string $email
 * @property string $phone
 * @property string $created_at
 * @property string $updated_at
 */
class Administrateur extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'login', 'passe', 'email', 'phone', 'created_at', 'updated_at'];
}
