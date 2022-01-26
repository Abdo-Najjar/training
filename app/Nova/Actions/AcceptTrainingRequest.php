<?php

namespace App\Nova\Actions;

use App\Models\Alert;
use App\Models\TrainingPost;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Exception;

class AcceptTrainingRequest extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {

        foreach ($models as $model) {
            if ($model->type == TrainingPost::HOC) {
                throw new Exception('يتم فقط قبول طلبات الدريب وليس الفرص');
            }
        }

        foreach ($models as $model) {
            Alert::create([
                'user_id'   => $model->user_id,
                'content'   => 'تم قبول منشور التدريب الخاص بك من المؤسسة' . optional(user()->company)->name
            ]);
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }

    public function name()
    {
        return __('قبول منشور التدريب');
    }
}
