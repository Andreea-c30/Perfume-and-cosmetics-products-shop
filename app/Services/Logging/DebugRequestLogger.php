<?php

namespace App\Services\Logging;

use Illuminate\Http\Request;

class DebugRequestLogger extends AbstractRequestLogger
{

    protected function prepareMessage(): string
    {
         return 'Debug information';
    }

    protected function extractRequestData(Request $request): array
    {
    
        return [

            'url'=>$request->fullUrl(),
            'uri' => $request->path(),
            'method' => $request->method(),
            'value'=> $request->header('Header'),
            'ip'=> $request->ip(),
            'query' => $request->query(),
            'archived' => $request->boolean('archived'),
            
        ];
    }
    
}