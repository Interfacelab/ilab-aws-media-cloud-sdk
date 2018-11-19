<?php
namespace ILAB_Aws\Exception;

use ILAB_Aws\HasMonitoringEventsTrait;
use ILAB_Aws\MonitoringEventsInterface;

class UnresolvedApiException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
