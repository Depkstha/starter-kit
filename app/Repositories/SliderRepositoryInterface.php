<?php
namespace App\Repositories;

interface SliderRepositoryInterface
{
    public function getAllSliders();
    public function createSlider();
    public function getSlider($id);
    public function deleteSlider($id);
}
