<?php
namespace ILAB_Aws\CodeStar;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeStar** service.
 * @method \ILAB_Aws\Result associateTeamMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTeamMemberAsync(array $args = [])
 * @method \ILAB_Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result createUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserProfileAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateTeamMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTeamMemberAsync(array $args = [])
 * @method \ILAB_Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILAB_Aws\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result listTeamMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTeamMembersAsync(array $args = [])
 * @method \ILAB_Aws\Result listUserProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserProfilesAsync(array $args = [])
 * @method \ILAB_Aws\Result tagProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result untagProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result updateTeamMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTeamMemberAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserProfileAsync(array $args = [])
 */
class CodeStarClient extends AwsClient {}
