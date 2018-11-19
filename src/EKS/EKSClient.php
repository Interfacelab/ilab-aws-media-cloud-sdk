<?php
namespace ILAB_Aws\EKS;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Container Service for Kubernetes** service.
 * @method \ILAB_Aws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \ILAB_Aws\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 */
class EKSClient extends AwsClient {}
