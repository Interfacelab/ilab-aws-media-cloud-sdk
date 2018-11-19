<?php
namespace ILAB_Aws\AutoScalingPlans;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Auto Scaling Plans** service.
 * @method \ILAB_Aws\Result createScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScalingPlanAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPlanAsync(array $args = [])
 * @method \ILAB_Aws\Result describeScalingPlanResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlanResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeScalingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlansAsync(array $args = [])
 * @method \ILAB_Aws\Result updateScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScalingPlanAsync(array $args = [])
 */
class AutoScalingPlansClient extends AwsClient {}
