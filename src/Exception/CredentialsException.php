<?php
namespace ILAB_Aws\Exception;

use ILAB_Aws\HasMonitoringEventsTrait;
use ILAB_Aws\MonitoringEventsInterface;

class CredentialsException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
