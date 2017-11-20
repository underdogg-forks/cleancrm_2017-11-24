<?php namespace App\Repositories\Criteria\Menu;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class MenusByPositionAscending extends Criteria
{

    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('position', 'ASC');
        return $model;
    }

}
