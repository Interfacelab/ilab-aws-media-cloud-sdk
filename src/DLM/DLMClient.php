<?php
namespace ILAB_Aws\DLM;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Data Lifecycle Manager** service.
 * @method \ILAB_Aws\Result createLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLifecyclePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getLifecyclePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLifecyclePolicyAsync(array $args = [])
 */
class DLMClient extends AwsClient {}
