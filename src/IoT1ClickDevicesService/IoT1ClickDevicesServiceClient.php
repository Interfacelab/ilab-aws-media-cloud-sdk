<?php
namespace ILAB_Aws\IoT1ClickDevicesService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT 1-Click Devices Service** service.
 * @method \ILAB_Aws\Result claimDevicesByClaimCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise claimDevicesByClaimCodeAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result finalizeDeviceClaim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise finalizeDeviceClaimAsync(array $args = [])
 * @method \ILAB_Aws\Result getDeviceMethods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceMethodsAsync(array $args = [])
 * @method \ILAB_Aws\Result initiateDeviceClaim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateDeviceClaimAsync(array $args = [])
 * @method \ILAB_Aws\Result invokeDeviceMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeDeviceMethodAsync(array $args = [])
 * @method \ILAB_Aws\Result listDeviceEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceEventsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \ILAB_Aws\Result unclaimDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unclaimDeviceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDeviceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceStateAsync(array $args = [])
 */
class IoT1ClickDevicesServiceClient extends AwsClient {}
