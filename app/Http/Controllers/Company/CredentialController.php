<?php namespace ThreeAccents\Http\Controllers\Company;

use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use ThreeAccents\Companies\Services\CompanyService;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Transformers\CredentialGroupTransformer;

class CredentialController extends ApiController
{
    protected $companyService;

    function __construct(CompanyService $companyService, Manager $fractal)
    {
        $this->companyService = $companyService;
        $this->fractal = $fractal;
    }

    public function getCredentialGroups($company_slug)
    {
        $includes = Input::get('includes') ?: "";

        $this->fractal->parseIncludes($includes);

        $credential_groups = $this->companyService->getGroups($company_slug);

        return  $this->respondWithCollection($credential_groups, new CredentialGroupTransformer, 'credentialGroups');


    }
}