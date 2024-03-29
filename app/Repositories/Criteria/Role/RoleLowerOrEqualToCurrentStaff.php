<?php namespace App\Repositories\Criteria\Role;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;
use Illuminate\Contracts\Auth\Guard;

// TODO: Is this class needed?
class RoleLowerOrEqualToCurrentStaff extends Criteria
{

    public function __construct($staff)
    {
        $this->staff = $staff;
    }

    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->where('level', '<=', $this->staff->getLevelMax());
        return $model;
    }

}
