<?php namespace ThreeAccents\Http\Controllers\Company;

use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use ThreeAccents\Commands\AddCredentialCommand;
use ThreeAccents\Commands\AddCredentialGroupCommand;
use ThreeAccents\Commands\AddCredentialOptionCommand;
use ThreeAccents\Companies\Entities\CredentialOption;
use ThreeAccents\Companies\Services\CredentialService;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Requests\AddCredentialGroupRequest;
use ThreeAccents\Http\Requests\AddCredentialOptionRequest;
use ThreeAccents\Http\Requests\AddCredentialRequest;
use ThreeAccents\Http\Transformers\CredentialGroupTransformer;
use ThreeAccents\Http\Transformers\CredentialOptionTransformer;

class CredentialController extends ApiController
{
    protected $credentialService;

    function __construct(CredentialService $credentialService, Manager $fractal)
    {
        $this->credentialService = $credentialService;
        $this->fractal = $fractal;
    }

    public function getCredentialGroups()
    {
        $includes = Input::get('includes') ?: "";

        $this->fractal->parseIncludes($includes);

        $credential_groups = $this->credentialService->getCredentialGroups();

        return  $this->respondWithCollection($credential_groups, new CredentialGroupTransformer, 'credentialGroups');
    }

    public function getCredentialOptions()
    {
        $includes = Input::get('includes') ?: "";

        $this->fractal->parseIncludes($includes);

        $credential_options = $this->credentialService->getCredentialOptions();

        return  $this->respondWithCollection($credential_options, new CredentialOptionTransformer, 'credential_options');
    }

    public function postAddCredentialGroup(AddCredentialGroupRequest $request)
    {
        $this->dispatchFrom(AddCredentialGroupCommand::class, $request);

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

    public function postAddCredential(AddCredentialRequest $request)
    {
        $this->dispatchFrom(AddCredentialCommand::class, $request);

        return $this->respondWithArray([
            'message' => 'Credential was added'
        ]);
    }
}