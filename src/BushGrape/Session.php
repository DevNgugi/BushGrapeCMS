<?php

namespace Devngugi\BushGrape\BushGrape;

class Session
{
    public function start()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function get($key = null)
    {
        return $key ? $_SESSION[$key] : $_SESSION;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function destroy()
    {
        session_destroy();
    }
}
