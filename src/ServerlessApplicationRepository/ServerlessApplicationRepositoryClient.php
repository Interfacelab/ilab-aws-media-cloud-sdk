<?php
namespace ILAB_Aws\ServerlessApplicationRepository;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWSServerlessApplicationRepository** service.
 * @method \ILAB_Aws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \ILAB_Aws\Result createApplicationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result createCloudFormationChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationChangeSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createCloudFormationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \ILAB_Aws\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \ILAB_Aws\Result getApplicationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getCloudFormationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFormationTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result listApplicationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \ILAB_Aws\Result putApplicationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putApplicationPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ServerlessApplicationRepositoryClient extends AwsClient {}
