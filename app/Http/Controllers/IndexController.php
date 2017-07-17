<?php

namespace Corp\Http\Controllers;

use Corp\Repositories\MenusRepository;
use Corp\Repositories\PortfoliosRepository;
use Corp\Repositories\SlidersRepository;
use Illuminate\Http\Request;
use Config;

class IndexController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = $this->getPortfolio();
        $content = view(env('THEME') . '.content')->with('portfolios', $portfolios)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        $sliderItems = $this->getSliders();
        $sliders = view(env('THEME') . ".slider")->with('sliders', $sliderItems)->render();
        $this->vars = array_add($this->vars, 'sliders', $sliders);

        $articles = false;
        $this->contentRightbar = view(env('THEME') . '.indexBar')->with('articles', $articles)->render();

        return $this->renderOutput();
    }

    public function __construct(SlidersRepository $r_rep, PortfoliosRepository $p_rep)
    {

        $this->s_rep = $r_rep;
        $this->p_rep = $p_rep;

        parent::__construct(new MenusRepository(new \Corp\Menu()));

        $this->bar = 'right';
        $this->template = env('THEME') . '.index';
    }

    public function getSliders()
    {
        $sliders = $this->s_rep->get();
        if ($sliders->isEmpty()) {
            return false;
        }
        foreach ($sliders as $slider) {
            $slider->img = Config::get('settings.slider_path') . '/' . $slider->img;
        }
        return $sliders;

    }

    protected function getPortfolio() {
        $portfolio = $this->p_rep->get('*', Config::get('settings.home_port_count')) ;
        return $portfolio;
    }
}
