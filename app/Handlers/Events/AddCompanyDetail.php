<?php namespace ThreeAccents\Handlers\Events;

use Illuminate\Foundation\Bus\DispatchesCommands;
use ThreeAccents\Commands\AddCompanyDetailCommand;
use ThreeAccents\Events\CompanyWasAdded;

class AddCompanyDetail
{
    use DispatchesCommands;

    public function handle(CompanyWasAdded $event)
    {
        $company = $event->company;
    }
}