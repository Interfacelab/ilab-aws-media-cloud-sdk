<?php
namespace ILAB_Aws\Pricing;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Price List Service** service.
 * @method \ILAB_Aws\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \ILAB_Aws\Result getAttributeValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttributeValuesAsync(array $args = [])
 * @method \ILAB_Aws\Result getProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProductsAsync(array $args = [])
 */
class PricingClient extends AwsClient {}
