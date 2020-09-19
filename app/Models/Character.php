<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * A character belonging to a player.
 *
 * @package App\Models
 */
class Character extends Model
{
    use HasFactory;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'character_id';

    /**
     * Whether to use timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'steam_identifier',
        'gender',
        'first_name',
        'last_name',
        'date_of_birth',
        'job_name',
    ];

    /**
     * Gets the route key name.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }

    /**
     * Gets the full name by concatenating first name and last name together.
     *
     * @return string
     */
    protected function getNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Gets player that owns this character.
     *
     * @return BelongsTo
     */
    public function player() : BelongsTo
    {
        return $this->belongsTo(Player::class, 'steam_identifier', 'steam_identifier');
    }

    /**
     * Gets the vehicles owned by this character.
     *
     * @return HasMany
     */
    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class, 'owner_cid');
    }

    /**
     * Gets the arrest reports that this character has received.
     *
     * @return HasMany
     */
    public function arrests(): HasMany
    {
        return $this->hasMany(ArrestReport::class);
    }

    /**
     * Gets the fine reports that this character has recieved.
     *
     * @return HasMany
     */
    public function fines(): HasMany
    {
        return $this->hasMany(FineReport::class);
    }

}
