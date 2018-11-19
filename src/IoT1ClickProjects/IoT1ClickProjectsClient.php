<?php
namespace ILAB_Aws\IoT1ClickProjects;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT 1-Click Projects Service** service.
 * @method \ILAB_Aws\Result associateDeviceWithPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDeviceWithPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result createPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result describePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateDeviceFromPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDeviceFromPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result getDevicesInPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicesInPlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result listPlacements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPlacementsAsync(array $args = [])
 * @method \ILAB_Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILAB_Aws\Result updatePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePlacementAsync(array $args = [])
 * @method \ILAB_Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class IoT1ClickProjectsClient extends AwsClient {}
