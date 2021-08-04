<?php

declare(strict_types=1);

namespace Bruny\Queries;

/**
 * Exposes the exists method and ensures that
 * implementations are callable.
 *
 * @package Bruny\Query
 */
interface QueryExistsInterface
{
    /**
     * @api
     * @return bool
     */
    public function __invoke(...$args): bool;

    /**
     * @api
     * @return bool
     */
    public function exists(...$args): bool;
}
