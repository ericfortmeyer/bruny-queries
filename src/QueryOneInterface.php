<?php

declare(strict_types=1);

namespace Bruny\Queries;

/**
 * Exposes the fetch method and ensures that
 * implementations are callable.
 *
 * @package Bruny\Query
 */
interface QueryOneInterface
{
    /**
     * @api
     * @return object
     */
    public function __invoke(...$args): object;

    /**
     * @api
     * @return object
     */
    public function fetch(...$args): object;
}
