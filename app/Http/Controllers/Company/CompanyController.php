<?php namespace ThreeAccents\Http\Controllers\Company;

use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use ThreeAccents\Companies\Services\CompanyService;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Transformers\CompanyTransformer;

class CompanyController extends ApiController
{
    /**
     * @var CompanyService
     */
    protected $service;

    /**
     * @param CompanyService $service
     * @param Manager $fractal
     */
    function __construct(CompanyService $service, Manager $fractal)
    {
        $this->service = $service;
        $this->fractal = $fractal;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getCompanies()
    {
        $includes = Input::get('includes') ?: "";

        $this->fractal->parseIncludes($includes);

        $teams = $this->service->getCompanies();

        return  $this->respondWithCollection($teams, new CompanyTransformer);
    }
}