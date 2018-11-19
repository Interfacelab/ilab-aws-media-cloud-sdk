<?php
namespace ILAB_Aws\MediaPackage;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage** service.
 * @method \ILAB_Aws\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result createOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOriginEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOriginEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result describeChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result describeOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOriginEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \ILAB_Aws\Result listOriginEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOriginEndpointsAsync(array $args = [])
 * @method \ILAB_Aws\Result rotateChannelCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateChannelCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result rotateIngestEndpointCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateIngestEndpointCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result updateOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOriginEndpointAsync(array $args = [])
 */
class MediaPackageClient extends AwsClient {}
