<?php

namespace Modules\Rateable\View\Components;

use Illuminate\View\Component;

class Rating extends Component
{


  public $view;
  public $params;
  public $model;
  public $rating;
  public $ratingSum;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($layout = "rating-layout-1", $model,$params = [])
  {

    $this->view = "rateable::frontend.components.rating.layouts.$layout.index";
    $this->model = $model;
    $this->params = $params;

    $this->getRatingData();
    
  }

  /*
  * Get data to show in the view
  */
  private function getRatingData(){

    $this->ratingSum = $this->model->SumRating;
    $this->rating = round($this->model->AverageRating,2);


  }
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|string
   */
  public function render()
  {
    return view($this->view);
  }

}