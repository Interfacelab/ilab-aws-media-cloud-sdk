<?php
namespace ILAB_Aws\Sfn;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Step Functions** service.
 * @method \ILAB_Aws\Result createActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivityAsync(array $args = [])
 * @method \ILAB_Aws\Result createStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStateMachineAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivityAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStateMachineAsync(array $args = [])
 * @method \ILAB_Aws\Result describeActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivityAsync(array $args = [])
 * @method \ILAB_Aws\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStateMachineAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStateMachineForExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStateMachineForExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result getActivityTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActivityTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result getExecutionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExecutionHistoryAsync(array $args = [])
 * @method \ILAB_Aws\Result listActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActivitiesAsync(array $args = [])
 * @method \ILAB_Aws\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listStateMachines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStateMachinesAsync(array $args = [])
 * @method \ILAB_Aws\Result sendTaskFailure(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskFailureAsync(array $args = [])
 * @method \ILAB_Aws\Result sendTaskHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskHeartbeatAsync(array $args = [])
 * @method \ILAB_Aws\Result sendTaskSuccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTaskSuccessAsync(array $args = [])
 * @method \ILAB_Aws\Result startExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result stopExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateStateMachine(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStateMachineAsync(array $args = [])
 */
class SfnClient extends AwsClient {}
