<?php
/**
 * Create By Hunter
 * 2019/12/22 11:11 上午
 *
 */
namespace Small\WeChat;

class WeChat
{
    public static function connect($setting)
    {
        return new Connection($setting);
    }
}