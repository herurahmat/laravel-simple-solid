<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class Repository implements RepositoryInterface
{

    protected $query;

    public function __construct(Model $model)
    {
        $this->query = $model;
    }

    public function all(array $columns=array("*"))
    {
        if($this->query instanceof Builder)
        {
            return $this->query->get($columns);
        }
        return $this->query->all($columns);
    }

    public function find($id,array $columns=array("*"))
    {
        return $this->query->find($id,$columns);
    }

    public function create(array $data)
    {
        return $this->query->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->query->find($id);
        $model->fill($data);
        return $model->save();
    }

    public function delete($id)
    {
        $model = $this->query->find($id);
        return $model->delete();
    }




}
