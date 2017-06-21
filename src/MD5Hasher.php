<?php

/**
 * Created by PhpStorm.
 * User: D.W.P
 * Date: 2017/06/21
 * Time: 10:39
 */

namespace Laravist\Hasher;

class MD5Hasher
{
    /**
     * @param       $value
     * @param array $options
     *
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value.$salt);
    }

    /**
     * @param       $value
     * @param       $hashValue
     * @param array $options
     *
     * @return bool
     */
    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value.$salt) === $hashValue;
    }
}