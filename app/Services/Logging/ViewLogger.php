<?php
namespace App\Services\Logging;
use App\Models\LoggableInterface;
use Psr\Log\LoggerInterface;
class ViewLogger
{
    private LoggerInterface $logger;
    
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function logView( LoggableInterface $loggable ,?User $user=null): void
    {
        if($user)
        {
          $name = $user->name;
        } else {
            $name='Unknown';
        }

        $this->logger->info(
            sprintf(
                '%s viewed %s',
                $name,
               $loggable->toString(),
            ),
            $loggable->toArray(),
        );
    }
}