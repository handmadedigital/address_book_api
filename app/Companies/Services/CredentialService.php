<?php namespace ThreeAccents\Companies\Services;

use ThreeAccents\Companies\Entities\CredentialGroup;
use ThreeAccents\Companies\Entities\CredentialOption;
use ThreeAccents\Companies\Repositories\CredentialGroupRepository;
use ThreeAccents\Companies\Repositories\CredentialOptionRepository;

class CredentialService
{
    /**
     * @var CredentialGroupRepository
     */
    protected $groupRepo;

    /**
     * @var CredentialOptionRepository
     */
    protected $optionRepo;

    /**
     * @param CredentialGroupRepository $groupRepo
     * @param CredentialOptionRepository $optionRepo
     */
    function __construct(CredentialGroupRepository $groupRepo, CredentialOptionRepository $optionRepo)
    {
        $this->groupRepo = $groupRepo;
        $this->optionRepo = $optionRepo;
    }

    /**
     * @return mixed
     */
    public function getCredentialGroups()
    {
        return $this->groupRepo->getAll();
    }

    /**
     * @return mixed
     */
    public function getCredentialOptions()
    {
        return $this->optionRepo->getAll();
    }
}