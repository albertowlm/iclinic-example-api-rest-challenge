<?php
namespace App\Http\Controllers;


use App\Http\Requests\PatientGetOrDeleteRequest;
use App\Http\Requests\PatientStoreRequest;
use App\Http\Requests\PatientUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\PatientService;

class PatientController extends Controller
{

    protected $service;

    public function __construct(PatientService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
       return $this->service->getByFilters($request);
    }

    public function getById($id, PatientGetOrDeleteRequest $request)
    {
        return $this->service->getById($id);
    }

    public function store(PatientStoreRequest $request)
    {
        return $this->service->store($request);
    }

    public function update($id, PatientUpdateRequest $request)
    {
        return $this->service->update($id, $request);
    }

    public function delete($id, PatientGetOrDeleteRequest $request)
    {
        return $this->service->delete($id);
    }
}
