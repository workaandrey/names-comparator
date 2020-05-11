<?php
declare(strict_types=1);

namespace NameComparator;

/**
 * Interface Comparator
 * @package NameComparator
 */
interface Comparator
{
    /**
     * @param string $name1
     * @param string $name2
     * @return bool
     */
    public function areNamesEqual(string $name1, string $name2): bool ;
}
