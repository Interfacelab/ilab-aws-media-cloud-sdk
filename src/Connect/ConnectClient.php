<?php
namespace ILAB_Aws\Connect;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Service** service.
 * @method \ILAB_Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUserHierarchyGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserHierarchyGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUserHierarchyStructure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserHierarchyStructureAsync(array $args = [])
 * @method \ILAB_Aws\Result getCurrentMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCurrentMetricDataAsync(array $args = [])
 * @method \ILAB_Aws\Result getFederationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFederationTokenAsync(array $args = [])
 * @method \ILAB_Aws\Result getMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricDataAsync(array $args = [])
 * @method \ILAB_Aws\Result listRoutingProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoutingProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result listSecurityProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecurityProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result listUserHierarchyGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserHierarchyGroupsAsync(array $args = [])
 * @method \ILAB_Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILAB_Aws\Result startOutboundVoiceContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startOutboundVoiceContactAsync(array $args = [])
 * @method \ILAB_Aws\Result stopContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopContactAsync(array $args = [])
 * @method \ILAB_Aws\Result updateContactAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserHierarchy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserHierarchyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserIdentityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserIdentityInfoAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserPhoneConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserPhoneConfigAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserRoutingProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserRoutingProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserSecurityProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserSecurityProfilesAsync(array $args = [])
 */
class ConnectClient extends AwsClient {}
