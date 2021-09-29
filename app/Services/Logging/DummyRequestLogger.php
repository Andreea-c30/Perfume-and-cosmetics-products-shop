<?php

namespace App\Services\Logging;

use Illuminate\Http\Request;

class DummyRequestLogger extends AbstractRequestLogger
{

    protected function prepareMessage(): string
    {
         return 'This Dummy user is providing a massage';
    }

    protected function extractRequestData(Request $request): array
    {
        return ['data'=>'dummy data'];
    }
    
}