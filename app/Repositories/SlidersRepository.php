<?php
namespace Corp\Repositories;
use Corp\Menu;
use Corp\Slider;

class SlidersRepository extends Repository{
    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }

}