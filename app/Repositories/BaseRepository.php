<?php

namespace App\Repositories;

use App\Exceptions\GeneralException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BaseRepository.
 */
abstract class BaseRepository
{
    /**
     * The repository model.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    abstract public function model();

    /**
     * @return Model|mixed
     * @throws GeneralException
     */
    public function makeModel()
    {
        $model = app()->make($this->model());

        if (! $model instanceof Model) {
            throw new GeneralException("Class {$this->model()} must be an instance of ".Model::class);
        }

        return $this->model = $model;
    }
}
