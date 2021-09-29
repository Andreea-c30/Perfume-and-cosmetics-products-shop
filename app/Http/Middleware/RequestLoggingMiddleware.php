<?php
namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Services\Logging\RequestLoggerInterface;

class RequestLoggingMiddleware
{

    private RequestLoggerInterface $logger;

    public function __construct(RequestLoggerInterface $logger)
    {
        $this->logger=$logger;
    }

    public function handle(Request $request, \Closure $next)
    {
        $this->logger->logRequest($request);
        

        return $next($request);
    }
}