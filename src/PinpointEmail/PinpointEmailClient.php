<?php
namespace ILAB_Aws\PinpointEmail;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint Email Service** service.
 * @method \ILAB_Aws\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method \ILAB_Aws\Result createDedicatedIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDedicatedIpPoolAsync(array $args = [])
 * @method \ILAB_Aws\Result createEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEmailIdentityAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDedicatedIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDedicatedIpPoolAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEmailIdentityAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result getConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getConfigurationSetEventDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationSetEventDestinationsAsync(array $args = [])
 * @method \ILAB_Aws\Result getDedicatedIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDedicatedIpAsync(array $args = [])
 * @method \ILAB_Aws\Result getDedicatedIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDedicatedIpsAsync(array $args = [])
 * @method \ILAB_Aws\Result getEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailIdentityAsync(array $args = [])
 * @method \ILAB_Aws\Result listConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDedicatedIpPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDedicatedIpPoolsAsync(array $args = [])
 * @method \ILAB_Aws\Result listEmailIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEmailIdentitiesAsync(array $args = [])
 * @method \ILAB_Aws\Result putAccountDedicatedIpWarmupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountDedicatedIpWarmupAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result putAccountSendingAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountSendingAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result putConfigurationSetDeliveryOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetDeliveryOptionsAsync(array $args = [])
 * @method \ILAB_Aws\Result putConfigurationSetReputationOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetReputationOptionsAsync(array $args = [])
 * @method \ILAB_Aws\Result putConfigurationSetSendingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetSendingOptionsAsync(array $args = [])
 * @method \ILAB_Aws\Result putConfigurationSetTrackingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method \ILAB_Aws\Result putDedicatedIpInPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDedicatedIpInPoolAsync(array $args = [])
 * @method \ILAB_Aws\Result putDedicatedIpWarmupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDedicatedIpWarmupAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result putEmailIdentityDkimAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityDkimAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result putEmailIdentityFeedbackAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityFeedbackAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result putEmailIdentityMailFromAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityMailFromAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result sendEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendEmailAsync(array $args = [])
 * @method \ILAB_Aws\Result updateConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 */
class PinpointEmailClient extends AwsClient {}