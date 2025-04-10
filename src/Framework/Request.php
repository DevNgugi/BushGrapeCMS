<?php
namespace Devngugi\WildGrape\Framework;

class Request
{
    public function get($key = null)
    {
        return $key ? $_REQUEST[$key] : $_REQUEST;
    }

    public function getQueryParams()
    {
        return $_GET;
    }

    public function getBody()
    {
        return file_get_contents('php://input');
    }

}
