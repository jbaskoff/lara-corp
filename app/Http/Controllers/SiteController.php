<?php

namespace Corp\Http\Controllers;

use Corp\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Menu;
class SiteController extends Controller
{
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    protected $template;
    protected $vars = [];

    protected $contentRightbar = false;
    protected $contentLeftBar = false;

    protected $bar = false;

    public function __construct(MenusRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();
        $navigation = view(env('THEME') .'.navigation')->with('menu', $menu)->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        if ($this->contentRightbar) {
            $rightBar = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightbar)->render();
            $this->vars = array_add($this->vars, 'rightBar', $rightBar);
        }

        return view($this->template)->with($this->vars);
    }

    protected function getMenu() {
        $menu = $this->m_rep->get();
        $mBuilder = Menu::make('MyNav', function ($m) use ($menu) {
            foreach ($menu as $item) {
                if ($item->parent_id == 0) {
                    $m->add($item->title, $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent_id)) {
                        $m->find($item->parent_id)->add($item->title, $item->path)->id($item->id);
                    }
                };
            }
        });
//        dd($mBuilder);
        return $mBuilder;
    }

}
