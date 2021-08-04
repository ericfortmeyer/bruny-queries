<?php

declare(strict_types=1);

namespace Bruny\Queries;

use Bruny\Adapters\DatabaseContext\DbAdapterInterface;

/**
 * Enables querying a set in a database context.
 */
abstract class DbQueryAll implements QueryAllInterface
{
    public function __construct(protected DbAdapterInterface $db)
    {
    }
}
