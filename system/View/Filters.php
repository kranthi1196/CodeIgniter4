<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MyFilter implements FilterInterface
{
    public static function hideNumbers(string $value, int $display = 4): string
    {
        $txt='';
        for ($i=0; $i<strlen($value);$i++) {
            if ($i<$display) {
                $txt .=$value[$i];
            } else {
                $txt .= "x";
            }
        }
        return $txt;
    }
}
