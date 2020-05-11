<?php
declare(strict_types=1);

namespace NameComparator;

/**
 * Class BasicComparator
 * @package NameComparator
 */
class BasicComparator implements Comparator
{
    /**
     * @param string $name1
     * @param string $name2
     * @return bool
     */
    public function areNamesEqual(string $name1, string $name2): bool
    {
        return $this->normalizeName($name1) === $this->normalizeName($name2);
    }

    /**
     * @param string $name
     * @return string
     */
    private function normalizeName(string $name): string
    {
        $words = array_map(function($word) {
            return mb_strtolower(preg_replace('#\W*#', '', $word));
        }, explode(' ', $name));
        sort($words);

        return implode(' ', $words);
    }
}
