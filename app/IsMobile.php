<?php

namespace App;


class IsMobile
{
    /**
     * Create a new class instance.
     */
    public $is_mobile;
    public function __construct()
    {
        $request = Request();
        $this->is_mobile = is_numeric(strpos(strtolower($request->header('User-Agent')), 'mobile'));
    }
}
