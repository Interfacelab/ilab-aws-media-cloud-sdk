<?php
namespace ILAB_Aws\MediaConvert;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaConvert** service.
 * @method \ILAB_Aws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \ILAB_Aws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \ILAB_Aws\Result createJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result createPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPresetAsync(array $args = [])
 * @method \ILAB_Aws\Result createQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePresetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \ILAB_Aws\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \ILAB_Aws\Result getJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result getPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPresetAsync(array $args = [])
 * @method \ILAB_Aws\Result getQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueueAsync(array $args = [])
 * @method \ILAB_Aws\Result listJobTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobTemplatesAsync(array $args = [])
 * @method \ILAB_Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result listPresets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPresetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueuesAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result updatePreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePresetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateQueueAsync(array $args = [])
 */
class MediaConvertClient extends AwsClient {}
