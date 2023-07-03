<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $intervenant_id
 * @property integer $incident_id
 * @property string $date
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property Likesdeslike[] $likesdeslikes
 * @property Photo[] $photos
 * @property Incident $incident
 * @property Intervenant $intervenant
 */
class Reaction extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['intervenant_id', 'incident_id', 'date', 'content', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likesdeslikes()
    {
        return $this->hasMany('App\Models\Likesdeslike');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

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
    public function intervenant()
    {
        return $this->belongsTo('App\Models\Intervenant');
    }
}
