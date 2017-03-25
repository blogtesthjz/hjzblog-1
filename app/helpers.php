<?php
/**
 * Created by PhpStorm.
 * User: computer
 * Date: 2017/3/24
 * Time: 20:30
 */
/**
 * 返回可读性更好的文件尺寸
 */
function human_filesize($bytes, $decimals = 2)// 函数返回一个易读的文件尺寸
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .@$size[$factor];
}

/**
 * 判断文件的MIME类型是否为图片
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}