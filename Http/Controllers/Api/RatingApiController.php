<?php

namespace Modules\Rateable\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Rateable\Entities\Rating;
use Modules\Rateable\Repositories\RatingRepository;

class RatingApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Rating $model, RatingRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
