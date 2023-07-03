<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $citoyene_id
 * @property integer $reaction_id
 * @property string $date
 * @property string $like
 * @property string $deslike
 * @property string $created_at
 * @property string $updated_at
 * @property Citoyene $citoyene
 * @property Reaction $reaction
 */
class Likesdeslike extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['citoyene_id', 'reaction_id', 'date', 'like', 'deslike', 'created_at', 'updated_at'];

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
    public function reaction()
    {
        return $this->belongsTo('App\Models\Reaction');
    }
}
