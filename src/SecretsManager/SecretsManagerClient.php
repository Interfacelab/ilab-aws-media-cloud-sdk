<?php
namespace ILAB_Aws\SecretsManager;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Secrets Manager** service.
 * @method \ILAB_Aws\Result cancelRotateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRotateSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result createSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result getRandomPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRandomPasswordAsync(array $args = [])
 * @method \ILAB_Aws\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getSecretValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecretValueAsync(array $args = [])
 * @method \ILAB_Aws\Result listSecretVersionIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecretVersionIdsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSecrets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecretsAsync(array $args = [])
 * @method \ILAB_Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result putSecretValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSecretValueAsync(array $args = [])
 * @method \ILAB_Aws\Result restoreSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result rotateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSecretVersionStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretVersionStageAsync(array $args = [])
 */
class SecretsManagerClient extends AwsClient {}
