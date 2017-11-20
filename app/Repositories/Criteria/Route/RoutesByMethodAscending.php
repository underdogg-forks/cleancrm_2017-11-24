<?php namespace App\Repositories\Criteria\Route;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class RoutesByMethodAscending extends Criteria
{

    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('method', 'ASC');
        return $model;
    }

}
