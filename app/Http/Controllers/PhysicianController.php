<?php
namespace App\Http\Controllers;


use App\Http\Requests\PhysicianGetOrDeleteRequest;
use App\Http\Requests\PhysicianStoreRequest;
use App\Http\Requests\PhysicianUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\PhysicianService;

class PhysicianController extends Controller
{

    protected $service;

    public function __construct(PhysicianService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
       return $this->service->getByFilters($request);
    }

    public function getById($id)
    {
        return $this->service->getById($id);
    }

    public function store(PhysicianStoreRequest $request)
    {
        return $this->service->store($request);
    }

    public function update($id, PhysicianUpdateRequest $request)
    {
        return $this->service->update($id, $request);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
