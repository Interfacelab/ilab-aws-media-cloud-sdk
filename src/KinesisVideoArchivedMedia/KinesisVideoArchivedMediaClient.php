<?php
namespace ILAB_Aws\KinesisVideoArchivedMedia;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams Archived Media** service.
 * @method \ILAB_Aws\Result getHLSStreamingSessionURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHLSStreamingSessionURLAsync(array $args = [])
 * @method \ILAB_Aws\Result getMediaForFragmentList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaForFragmentListAsync(array $args = [])
 * @method \ILAB_Aws\Result listFragments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFragmentsAsync(array $args = [])
 */
class KinesisVideoArchivedMediaClient extends AwsClient {}
