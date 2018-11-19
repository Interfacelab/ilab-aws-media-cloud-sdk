<?php
namespace ILAB_Aws\Exception;

use ILAB_Aws\HasMonitoringEventsTrait;
use ILAB_Aws\MonitoringEventsInterface;

class UnresolvedSignatureException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
