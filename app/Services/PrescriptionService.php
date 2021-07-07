<?php

namespace App\Services;

use App\Models\Prescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PrescriptionService extends BaseCrudService
{

    protected $model;

    public function __construct(Prescription $model)
    {
        $this->model = $model;
    }

    public function handleData(Request $request, Model $model)
    {
        if ($request->has('clinic_id') and !empty($request->clinic_id)) {
            $model->clinic_id = $request->clinic_id;
        }
        if ($request->has('physician_id') and !empty($request->physician_id)) {
            $model->physician_id = $request->physician_id;
        }
        if ($request->has('patient_id') and !empty($request->patient_id)) {
            $model->patient_id = $request->patient_id;
        }
        if ($request->has('text') and !empty($request->text)) {
            $model->text = $request->text;
        }
        return $model;
    }

    public function getByFilters(Request $request)
    {
        $model = $this->model;
        $model = $this->filterWhere('id', $request, $model);
        $model = $this->filterWhere('clinic_id', $request, $model);
        $model = $this->filterWhere('physician_id', $request, $model);
        $model = $this->filterWhere('patient_id', $request, $model);
        $model = $this->filterWhereLike('text', $request, $model);

        return $model->get();
    }
}
