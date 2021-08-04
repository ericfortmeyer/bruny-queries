<?php

declare(strict_types=1);

namespace Bruny\Queries;

/**
 * Exposes the fetchAll method and ensures that
 * implementations are callable.
 *
 * @package Bruny\Query
 */
interface QueryAllInterface
{
    /**
     * @api
     * @return object[]
     */
    public function __invoke(...$args): array;

    /**
     * @api
     * @return object[]
     */
    public function fetchAll(...$args): array;
}
