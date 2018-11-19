<?php
namespace ILAB_Aws\Mobile;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Mobile** service.
 * @method \ILAB_Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result describeBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBundleAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result exportBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBundleAsync(array $args = [])
 * @method \ILAB_Aws\Result exportProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result listBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBundlesAsync(array $args = [])
 * @method \ILAB_Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class MobileClient extends AwsClient {}
