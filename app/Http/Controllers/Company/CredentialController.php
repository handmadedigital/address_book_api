<?php namespace ThreeAccents\Http\Controllers\Company;

use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use ThreeAccents\Commands\AddCredentialGroupCommand;
use ThreeAccents\Commands\AddCredentialOptionCommand;
use ThreeAccents\Companies\Services\CompanyService;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Requests\AddCredentialGroupRequest;
use ThreeAccents\Http\Requests\AddCredentialOptionRequest;
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

    public function postAddCredentialGroup(AddCredentialGroupRequest $request)
    {
        $company = $this->companyService->getCompany($request->company_slug);

        $this->dispatch(new AddCredentialGroupCommand($request->name, $company->id));

        return $this->respondWithArray([
            'message' => 'Credential group was added'
        ]);
    }

    public function postAddCredentialOption(AddCredentialOptionRequest $request)
    {
        $this->dispatchFrom(AddCredentialOptionCommand::class, $request);

        return $this->respondWithArray([
            'message' => 'Credential option was added'
        ]);
    }
}