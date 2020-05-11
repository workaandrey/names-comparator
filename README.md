#Name comparator package

It allows comparing names, e.g: 
```
IDOWU is equal to idowu
IDOWU EBUNOLUWA is equal to  EBUNOLUWA IDOWU
IDOWU EBUNOLUWA is equal to  IDOWU EBUNOLUWA
IDOWU EBUNOLUWA SARAH is equal to  SARAH, EBUNOLUWA IDOWU

IDOWU EBUNOLUWA SARAH is NOT EQUAL to  SARAH, IDOWU
```

##Usage
```php
use NameComparator\BasicComparator;
use NameComparator\NameComparator;

$namesComparator = new NameComparator(new BasicComparator());
$namesComparator->areNamesEqual('IDOWU EBUNOLUWA', 'EBUNOLUWA IDOWU');
```