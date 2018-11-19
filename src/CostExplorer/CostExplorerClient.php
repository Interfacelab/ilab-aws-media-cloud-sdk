<?php
namespace ILAB_Aws\CostExplorer;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cost Explorer Service** service.
 * @method \ILAB_Aws\Result getCostAndUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCostAndUsageAsync(array $args = [])
 * @method \ILAB_Aws\Result getCostForecast(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCostForecastAsync(array $args = [])
 * @method \ILAB_Aws\Result getDimensionValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDimensionValuesAsync(array $args = [])
 * @method \ILAB_Aws\Result getReservationCoverage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReservationCoverageAsync(array $args = [])
 * @method \ILAB_Aws\Result getReservationPurchaseRecommendation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReservationPurchaseRecommendationAsync(array $args = [])
 * @method \ILAB_Aws\Result getReservationUtilization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReservationUtilizationAsync(array $args = [])
 * @method \ILAB_Aws\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 */
class CostExplorerClient extends AwsClient {}
