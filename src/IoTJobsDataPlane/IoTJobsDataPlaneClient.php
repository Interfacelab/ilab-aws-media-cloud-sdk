<?php
namespace ILAB_Aws\IoTJobsDataPlane;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Jobs Data Plane** service.
 * @method \ILAB_Aws\Result describeJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result getPendingJobExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPendingJobExecutionsAsync(array $args = [])
 * @method \ILAB_Aws\Result startNextPendingJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startNextPendingJobExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobExecutionAsync(array $args = [])
 */
class IoTJobsDataPlaneClient extends AwsClient {}
