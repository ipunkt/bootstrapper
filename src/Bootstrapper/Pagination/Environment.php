<?php

namespace Bootstrapper\Pagination;

use Bootstrapper\Paginator;

class Environment extends \Illuminate\Pagination\Environment{
    /**
     * Get a new paginator instance.
     *
     * @param  array  $items
     * @param  int    $total
     * @param  int    $perPage
     * @return \Illuminate\Pagination\Paginator
     */
    public function make(array $items, $total, $perPage)
    {
        $paginator = new Paginator($this, $items, $total, $perPage);

        return $paginator->setupPaginationContext();
    }
}