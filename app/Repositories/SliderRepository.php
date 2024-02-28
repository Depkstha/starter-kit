<?php

namespace App\Repositories;

use App\Models\Slider;

class SliderRepository implements SliderRepositoryInterface
{
    public function getAllSliders()
    {
        return Slider::where('status', 1)->get();
    }

    public function createSlider()
    {
        //
    }

    public function getSlider($id)
    {
        //
    }

    public function deleteSlider($id)
    {
        //
    }

}
