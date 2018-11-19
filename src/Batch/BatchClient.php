<?php
namespace ILAB_Aws\Batch;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Batch** service.
 * @method \ILAB_Aws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \ILAB_Aws\Result createComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComputeEnvironmentAsync(array $args = [])
 * @method \ILAB_Aws\Result createJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComputeEnvironmentAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterJobDefinitionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeComputeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComputeEnvironmentsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeJobDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobDefinitionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeJobQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobQueuesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result registerJobDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerJobDefinitionAsync(array $args = [])
 * @method \ILAB_Aws\Result submitJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitJobAsync(array $args = [])
 * @method \ILAB_Aws\Result terminateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateJobAsync(array $args = [])
 * @method \ILAB_Aws\Result updateComputeEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComputeEnvironmentAsync(array $args = [])
 * @method \ILAB_Aws\Result updateJobQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobQueueAsync(array $args = [])
 */
class BatchClient extends AwsClient {}
