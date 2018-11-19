<?php
namespace ILAB_Aws\RAM;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Access Manager** service.
 * @method \ILAB_Aws\Result acceptResourceShareInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptResourceShareInvitationAsync(array $args = [])
 * @method \ILAB_Aws\Result associateResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResourceShareAsync(array $args = [])
 * @method \ILAB_Aws\Result createResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceShareAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceShareAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResourceShareAsync(array $args = [])
 * @method \ILAB_Aws\Result enableSharingWithAwsOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSharingWithAwsOrganizationAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourcePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourceShareAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceShareAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourceShareInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceShareInvitationsAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourceShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceSharesAsync(array $args = [])
 * @method \ILAB_Aws\Result listPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalsAsync(array $args = [])
 * @method \ILAB_Aws\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result rejectResourceShareInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectResourceShareInvitationAsync(array $args = [])
 * @method \ILAB_Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceShareAsync(array $args = [])
 */
class RAMClient extends AwsClient {}
