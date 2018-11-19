<?php
namespace ILAB_Aws\KinesisVideo;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams** service.
 * @method \ILAB_Aws\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result getDataEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result tagStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result untagStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDataRetention(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataRetentionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStreamAsync(array $args = [])
 */
class KinesisVideoClient extends AwsClient {}
