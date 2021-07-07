<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\PrescriptionService;

class PrescriptionController extends Controller
{

    protected $service;

    public function __construct(PrescriptionService $service)
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

    public function store(Request $request)
    {
      return $this->service->store($request);
    }

    public function update(Request $request,$id)
    {
      return $this->service->update($id,$request);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
