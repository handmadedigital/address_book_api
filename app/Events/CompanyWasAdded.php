<?php namespace ThreeAccents\Events;

use ThreeAccents\Companies\Entities\Company;

use Illuminate\Queue\SerializesModels;

class CompanyWasAdded extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 * @param Company $company
	 */
	public function __construct(Company $company)
	{
		$this->company = $company;
	}

}
