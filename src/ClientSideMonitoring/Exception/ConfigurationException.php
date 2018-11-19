<?php
namespace ILAB_Aws\ClientSideMonitoring\Exception;

use ILAB_Aws\HasMonitoringEventsTrait;
use ILAB_Aws\MonitoringEventsInterface;


/**
 * Represents an error interacting with configuration for client-side monitoring.
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
