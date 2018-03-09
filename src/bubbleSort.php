<?php
/**
 * 冒泡排序
 * @param  array &$arr 待排序的数组
 * @return
 */
function bubbleSort(&$arr)
{
    $size = count($arr);
    if ($size <= 1) {
        return;
    }
    // 外层循环，将剩余未排序数组元素中值最大的元素移至末位
    for ($i = 0; $i < $size - 1; $i++) {
        // 内层循环，若当前元素的值比下一位元素值大，交换两元素位置
        for ($j = 0; $j < $size - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp         = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j]     = $tmp;
            }
        }
    }
    return;
}

$arr = array(6, 8, 3, 4, 1, 2, 5, 9, 7, 10);
bubbleSort($arr);
print_r($arr);
