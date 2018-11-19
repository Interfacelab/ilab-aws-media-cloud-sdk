<?php
namespace ILAB_Aws\PI;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Performance Insights** service.
 * @method \ILAB_Aws\Result describeDimensionKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDimensionKeysAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourceMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceMetricsAsync(array $args = [])
 */
class PIClient extends AwsClient {}
