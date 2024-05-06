<?php

namespace App\Filters\Api\V1;

use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{
    protected $allowedParms = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ls' => '<',
        'lse' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}
