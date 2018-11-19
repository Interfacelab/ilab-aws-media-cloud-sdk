<?php
namespace ILAB_Aws\CodeBuild;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method \ILAB_Aws\Result batchDeleteBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteBuildsAsync(array $args = [])
 * @method \ILAB_Aws\Result batchGetBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildsAsync(array $args = [])
 * @method \ILAB_Aws\Result batchGetProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetProjectsAsync(array $args = [])
 * @method \ILAB_Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result createWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebhookAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebhookAsync(array $args = [])
 * @method \ILAB_Aws\Result invalidateProjectCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invalidateProjectCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \ILAB_Aws\Result listBuildsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsForProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result listCuratedEnvironmentImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method \ILAB_Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILAB_Aws\Result startBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildAsync(array $args = [])
 * @method \ILAB_Aws\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result updateWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebhookAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}
