<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /**
     * Set the name attribute and automatically the slug
     *
     * @param string $name
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        if (! $this->exists)
        {
            $this->setUniqueSlug($name, '');
        }
    }

    /**
     * Recursive routine to set a unique slug
     *
     * @param string $name
     * @param mixed $unique
     */
    public function setUniqueSlug($name, $unique)
    {
        $slug = str_slug($name . '-' . $unique);

        if (static::whereSlug($slug)->exists())
        {
            $this->setUniqueSlug($name, $unique + 1);

            return;
        }

        $this->attributes['slug'] = $slug;
    }

    /**
     * A Collections belongs to a single Treatment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function treatment()
    {
        return $this->belongsTo('App\Treatment');
    }

    /**
     * A single Collection has many Materials.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materials()
    {
        return $this->hasMany('App\Material');
    }
}
