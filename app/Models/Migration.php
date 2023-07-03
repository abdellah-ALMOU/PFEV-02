<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $migration
 * @property integer $batch
 */
class Migration extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['migration', 'batch'];
}
