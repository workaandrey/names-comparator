<?php
declare(strict_types=1);

namespace NameComparator;

/**
 * Class NameComparator
 * @package NameComparator
 */
class NameComparator
{
    /**
     * @var Comparator
     */
    private Comparator $comparator;

    /**
     * NameComparator constructor.
     * @param Comparator $comparator
     */
    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @param string $name1
     * @param string $name2
     * @return bool
     */
    public function areNamesEqual(string $name1, string $name2):bool
    {
        return  $this->comparator->areNamesEqual($name1, $name2);
    }
}
