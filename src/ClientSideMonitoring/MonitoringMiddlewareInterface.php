<?php

namespace ILAB_Aws\ClientSideMonitoring;

use ILAB_Aws\CommandInterface;
use ILAB_Aws\Exception\AwsException;
use ILAB_Aws\ResultInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

/**
 * @internal
 */
interface MonitoringMiddlewareInterface
{

    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function getRequestData(RequestInterface $request);


    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param ResultInterface|AwsException|\Exception $klass
     * @return array
     */
    public static function getResponseData($klass);

    public function __invoke(CommandInterface $cmd, RequestInterface $request);
}
