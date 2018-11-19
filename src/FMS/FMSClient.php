<?php
namespace ILAB_Aws\FMS;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Firewall Management Service** service.
 * @method \ILAB_Aws\Result associateAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAdminAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteNotificationChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAdminAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result getAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAdminAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result getComplianceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceDetailAsync(array $args = [])
 * @method \ILAB_Aws\Result getNotificationChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotificationChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result listComplianceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result listMemberAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMemberAccountsAsync(array $args = [])
 * @method \ILAB_Aws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result putNotificationChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putNotificationChannelAsync(array $args = [])
 * @method \ILAB_Aws\Result putPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPolicyAsync(array $args = [])
 */
class FMSClient extends AwsClient {}
