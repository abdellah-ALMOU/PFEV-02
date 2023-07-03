<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $incident_id
 * @property integer $reaction_id
 * @property string $name
 * @property string $path
 * @property string $created_at
 * @property string $updated_at
 * @property Incident $incident
 * @property Reaction $reaction
 */
class Photo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['incident_id', 'reaction_id', 'name', 'path', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function incident()
    {
        return $this->belongsTo('App\Models\Incident');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reaction()
    {
        return $this->belongsTo('App\Models\Reaction');
    }
}
