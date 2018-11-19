<?php
namespace ILAB_Aws\MigrationHub;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub** service.
 * @method \ILAB_Aws\Result associateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateCreatedArtifactAsync(array $args = [])
 * @method \ILAB_Aws\Result associateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDiscoveredResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result createProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProgressUpdateStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProgressUpdateStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result describeApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationStateAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateCreatedArtifactAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDiscoveredResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result importMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importMigrationTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result listCreatedArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCreatedArtifactsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDiscoveredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoveredResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result listMigrationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMigrationTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result listProgressUpdateStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProgressUpdateStreamsAsync(array $args = [])
 * @method \ILAB_Aws\Result notifyApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyApplicationStateAsync(array $args = [])
 * @method \ILAB_Aws\Result notifyMigrationTaskState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyMigrationTaskStateAsync(array $args = [])
 * @method \ILAB_Aws\Result putResourceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourceAttributesAsync(array $args = [])
 */
class MigrationHubClient extends AwsClient {}
