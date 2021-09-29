<?php

namespace App\Services\Logging;

use Illuminate\Http\Request;

class ProductionRequestLogger extends AbstractRequestLogger
{

    protected function prepareMessage(): string
    {
         return 'Production information';
    }

    protected function extractRequestData(Request $request): array
    {
        return [
            'ips' => $request->ips(),
            'url' => $request->url(),
            'input' => $request->all(),
            'method' => $request->method(),
        ];
    }
    
}