<?php
namespace ILAB_Aws\Cloud9;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cloud9** service.
 * @method \ILAB_Aws\Result createEnvironmentEC2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentEC2Async(array $args = [])
 * @method \ILAB_Aws\Result createEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentMembershipAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentMembershipAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEnvironmentMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentMembershipsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEnvironmentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentsAsync(array $args = [])
 * @method \ILAB_Aws\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \ILAB_Aws\Result updateEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentMembershipAsync(array $args = [])
 */
class Cloud9Client extends AwsClient {}
