<?php

/***
 * 使用场景：在一些数据共享的时候，特别是多进程时候，可以用这个方式去做内存共享
 */

// 创建内存表
$table = new swoole_table(1024);


// 内存表增加一列
$table->column('id', $table::TYPE_INT, 4);
$table->column('name', $table::TYPE_STRING, 64);
$table->column('age', $table::TYPE_INT, 3);
$table->create();

// 一种方案 增加一行记录
$table->set('lalala',
    ['id' => 1, 'name' => 'twj', 'age' => 18]
);

// 另一种方案 增加一行记录
$table['lalala2'] = [
    'id' => 2,
    'name' => 'hhh',
    'age' => 3,
];

$a = $table->get($table['lalala2']);// 去获取我们之前设置的数据
print_r($a);