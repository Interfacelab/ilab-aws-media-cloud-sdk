<?php
namespace ILAB_Aws\signer;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Signer** service.
 * @method \ILAB_Aws\Result cancelSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSigningProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSigningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSigningJobAsync(array $args = [])
 * @method \ILAB_Aws\Result getSigningPlatform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningPlatformAsync(array $args = [])
 * @method \ILAB_Aws\Result getSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result listSigningJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSigningPlatforms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningPlatformsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSigningProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result putSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSigningProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result startSigningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSigningJobAsync(array $args = [])
 */
class signerClient extends AwsClient {}
