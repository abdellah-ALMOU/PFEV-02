<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $type_id
 * @property integer $citoyene_id
 * @property string $description
 * @property string $date
 * @property string $geolocalisation
 * @property string $created_at
 * @property string $updated_at
 * @property Citoyene $citoyene
 * @property Type $type
 * @property Photo[] $photos
 * @property Reaction[] $reactions
 */
class Incident extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['type_id', 'citoyene_id', 'description', 'date', 'geolocalisation', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function citoyene()
    {
        return $this->belongsTo('App\Models\Citoyene');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reactions()
    {
        return $this->hasMany('App\Models\Reaction');
    }
}
