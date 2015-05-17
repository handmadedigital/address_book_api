<?php namespace ThreeAccents\Companies\Repositories;

use ThreeAccents\Companies\Entities\Company;
use ThreeAccents\Companies\Entities\CompanyDetail;

class CompanyRepository
{
    /**
     * @var Company
     */
    protected $model;

    /**
     * @param Company $model
     */
    function __construct(Company $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->orderBy('name', 'ASC')->get();
    }

    public function getBySlug($slug)
    {
        return $this->model->where('slug', '=', $slug)->first();
    }

    public function persist($company)
    {
        $this->model->name = $company->name;
        $this->model->slug = $this->sluggify($company->name);

        $this->model->save();

        $details = new CompanyDetail([
            'address' => $company->address,
            'city' => $company->city,
            'state_id' => 15,
            'country' => $company->country,
            'zip_code' => $company->zip_code,
            'phone' => $company->phone_number,
            'email' => $company->email
        ]);

        $this->model->detail()->save($details);
    }

    public function sluggify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
}