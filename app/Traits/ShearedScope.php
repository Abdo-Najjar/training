<?php

namespace App\Traits;

trait ShearedScope
{
    /**
     * For view data ordered by something desc.
     */
    public function scopeIndex($query)
    {
        return $query->orderByDesc(static::$sortBy ?? 'updated_at')->get();
    }

    /**
     * For view data ordered by something asc.

     */
    public function scopeAscIndex($query)
    {
        return $query->orderBy(static::$sortBy ?? 'updated_at')->get();
    }
}
