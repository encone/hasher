<?php
namespace Encone\Hashers;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/15
 * Time: 12:37
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $option
     * @return string
     */
    public function make($value, array $option = [] )
    {
        $salt = isset($option['salt']) ? $option['salt'] : '';
        return hash('md5',$value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $option
     * @return bool
     */
    public function check($value, $hashValue, array $option = [])
    {
        $salt = isset($option['salt']) ? $option['salt'] : '';

        return hash('md5',$value .$salt ) === $hashValue;
    }
}