<?php
declare(strict_types=1);

namespace Tests;

use NameComparator\BasicComparator;
use NameComparator\NameComparator;

/**
 * Class NameComparatorTest
 * @package Tests
 */
class NameComparatorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_compare_names()
    {
        $namesComparator = new NameComparator(new BasicComparator());

        $this->assertTrue($namesComparator->areNamesEqual('IDOWU', 'IDOWU'));
        $this->assertTrue($namesComparator->areNamesEqual('IDOWU EBUNOLUWA', 'EBUNOLUWA IDOWU'));
        $this->assertTrue($namesComparator->areNamesEqual('IDOWU EBUNOLUWA', 'IDOWU EBUNOLUWA'));
        $this->assertFalse($namesComparator->areNamesEqual('IDOWU SARAH EBUNOLUWA', 'EBUNOLUWA IDOWU'));
        $this->assertTrue($namesComparator->areNamesEqual('IDOWU EBUNOLUWA SARAH', 'SARAH, EBUNOLUWA IDOWU'));
        $this->assertTrue($namesComparator->areNamesEqual('ZAINAB, OLABISI Abdulsalam', 'Abdulsalam ZAINAB, OLABISI'));
        $this->assertFalse($namesComparator->areNamesEqual('IDOWU', 'IDOWU EBUNOLUWA'));
    }
}
