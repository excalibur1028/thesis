<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
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
     * A single Treatment has many Collections.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections()
    {
        return $this->hasMany('App\Collection');
    }
}
