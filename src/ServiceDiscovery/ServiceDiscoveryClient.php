<?php
namespace ILAB_Aws\ServiceDiscovery;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Route 53 Auto Naming** service.
 * @method \ILAB_Aws\Result createPrivateDnsNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPrivateDnsNamespaceAsync(array $args = [])
 * @method \ILAB_Aws\Result createPublicDnsNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPublicDnsNamespaceAsync(array $args = [])
 * @method \ILAB_Aws\Result createService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamespaceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result getInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result getInstancesHealthStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancesHealthStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result getNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNamespaceAsync(array $args = [])
 * @method \ILAB_Aws\Result getOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationAsync(array $args = [])
 * @method \ILAB_Aws\Result getService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceAsync(array $args = [])
 * @method \ILAB_Aws\Result listInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstancesAsync(array $args = [])
 * @method \ILAB_Aws\Result listNamespaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamespacesAsync(array $args = [])
 * @method \ILAB_Aws\Result listOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOperationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \ILAB_Aws\Result registerInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateInstanceCustomHealthStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInstanceCustomHealthStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result updateService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 */
class ServiceDiscoveryClient extends AwsClient {}
