<?php

namespace Tripteki\Uid\Observers;

use Illuminate\Support\Str;

class UniqueIdObserver
{
    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function creating($model)
    {
        if (empty($model->{$model->getKeyName()})) {

            $model->{$model->getKeyName()} = (string) Str::uuid();
        }
    }
};
