<?php

declare(strict_types=1);

/*
 * This file is part of the FODDBALClickHouse package -- Doctrine DBAL library
 * for ClickHouse (a column-oriented DBMS for OLAP <https://clickhouse.yandex/>)
 *
 * (c) FriendsOfDoctrine <https://github.com/FriendsOfDoctrine/>.
 *
 * For the full copyright and license inflormation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOD\DBALClickHouse\Types;

/**
 * Array(Int32) Type
 */
class ArrayInt32Type extends AbstractArrayIntType
{
    public const BITNESS = 32;

    /** {@inheritdoc} */
    protected function getBitness() : int
    {
        return self::BITNESS;
    }
}
