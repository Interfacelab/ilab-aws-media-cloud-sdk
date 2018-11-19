<?php
namespace ILAB_Aws\Shield;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Shield** service.
 * @method \ILAB_Aws\Result associateDRTLogBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDRTLogBucketAsync(array $args = [])
 * @method \ILAB_Aws\Result associateDRTRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDRTRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result createProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtectionAsync(array $args = [])
 * @method \ILAB_Aws\Result createSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtectionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAttack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDRTAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDRTAccessAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEmergencyContactSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEmergencyContactSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateDRTLogBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDRTLogBucketAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateDRTRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDRTRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result getSubscriptionState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionStateAsync(array $args = [])
 * @method \ILAB_Aws\Result listAttacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttacksAsync(array $args = [])
 * @method \ILAB_Aws\Result listProtections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectionsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateEmergencyContactSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEmergencyContactSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionAsync(array $args = [])
 */
class ShieldClient extends AwsClient {}
