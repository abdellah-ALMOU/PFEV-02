<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $type_id
 * @property string $name
 * @property string $datedepublier
 * @property string $datedefin
 * @property string $created_at
 * @property string $updated_at
 * @property Type $type
 */
class Annonce extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['type_id', 'name', 'datedepublier', 'datedefin', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
