<?php

namespace Corp\Http\Controllers;

use Corp\Repositories\MenusRepository;
use Illuminate\Http\Request;

class IndexController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->renderOutput();
    }

    public function __construct()
    {
        parent::__construct(new MenusRepository(new \Corp\Menu()));

        $this->bar = 'right';
        $this->template = env('THEME') .'.index';
    }
}
