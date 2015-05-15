<?php namespace ThreeAccents\Http\Controllers\Company;

use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use ThreeAccents\Commands\AddCompanyCommand;
use ThreeAccents\Companies\Services\CompanyService;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Requests\AddCompanyRequest;
use ThreeAccents\Http\Requests\CompanyRequest;
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

        $companies = $this->service->getCompanies();

        return  $this->respondWithCollection($companies, new CompanyTransformer, 'companies');
    }

    /**
     * @param CompanyRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getCompany(CompanyRequest $request)
    {
        $includes = Input::get('includes') ?: "";

        $this->fractal->parseIncludes($includes);

        $company = $this->service->getCompany($request->company_slug);

        return  $this->respondWithItem($company, new CompanyTransformer, 'company');
    }

    /**
     * @param AddCompanyRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postAddCompany(AddCompanyRequest $request)
    {
        $this->dispatchFrom(AddCompanyCommand::class, $request);

        return $this->respondWithArray([
            'message' => 'Company was added!'
        ]);
    }
}