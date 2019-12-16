<?php
namespace Cvar1984\Skeleton;

class Hello
{
    protected $message;
    /*
     * @param $arg string pesan
     */
    public static function setMessage(string $arg)
    {
        $this->message = $arg;
    }
    public static function getMessage()
    {
        return $this->message;
    }
}
