<?php

namespace App\Filters\Api\V1;

use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{
    protected $allowedParms = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'ls' => '<',
        'lse' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}
