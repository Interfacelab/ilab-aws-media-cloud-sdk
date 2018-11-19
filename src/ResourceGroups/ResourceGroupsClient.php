<?php
namespace ILAB_Aws\ResourceGroups;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups** service.
 * @method \ILAB_Aws\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result getGroupQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupQueryAsync(array $args = [])
 * @method \ILAB_Aws\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result listGroupResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \ILAB_Aws\Result searchResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result tag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagAsync(array $args = [])
 * @method \ILAB_Aws\Result untag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGroupQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupQueryAsync(array $args = [])
 */
class ResourceGroupsClient extends AwsClient {}
