<?php namespace ThreeAccents\Companies\Services;

use ThreeAccents\Companies\Repositories\CompanyRepository;

class CompanyService
{
    /**
     * @var CompanyRepository
     */
    protected $companyRepo;

    /**
     * @param CompanyRepository $companyRepo
     */
    function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepo = $companyRepo;
    }

    /**
     * @return mixed
     */
    public function getCompanies()
    {
        return $this->companyRepo->getAll();
    }
}