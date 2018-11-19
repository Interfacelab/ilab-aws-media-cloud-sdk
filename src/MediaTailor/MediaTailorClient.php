<?php
namespace ILAB_Aws\MediaTailor;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS MediaTailor** service.
 * @method \ILAB_Aws\Result deletePlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePlaybackConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result getPlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPlaybackConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result listPlaybackConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPlaybackConfigurationsAsync(array $args = [])
 * @method \ILAB_Aws\Result putPlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPlaybackConfigurationAsync(array $args = [])
 */
class MediaTailorClient extends AwsClient {}
