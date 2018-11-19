<?php
namespace ILAB_Aws\SnowBall;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Import/Export Snowball** service.
 * @method \ILAB_Aws\Result cancelCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \ILAB_Aws\Result createAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressAsync(array $args = [])
 * @method \ILAB_Aws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \ILAB_Aws\Result getJobManifest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobManifestAsync(array $args = [])
 * @method \ILAB_Aws\Result getJobUnlockCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobUnlockCodeAsync(array $args = [])
 * @method \ILAB_Aws\Result getSnowballUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnowballUsageAsync(array $args = [])
 * @method \ILAB_Aws\Result listClusterJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClusterJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \ILAB_Aws\Result listCompatibleImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCompatibleImagesAsync(array $args = [])
 * @method \ILAB_Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class SnowBallClient extends AwsClient {}
