<?php

declare(strict_types=1);

namespace Bruny\Queries;

use Bruny\Adapters\DatabaseContext\DbAdapterInterface;

/**
 * Enables querying whether a given member exists in a database context.
 */
abstract class DbQueryExists implements QueryExistsInterface
{
    public function __construct(protected DbAdapterInterface $db)
    {
    }
}
