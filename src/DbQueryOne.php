<?php

declare(strict_types=1);

namespace Bruny\Queries;

use Bruny\Adapters\DatabaseContext\DbAdapterInterface;

/**
 * Enables querying for one member of a set in a database context.
 */
abstract class DbQueryOne implements QueryOneInterface
{
    public function __construct(protected DbAdapterInterface $db)
    {
    }
}
