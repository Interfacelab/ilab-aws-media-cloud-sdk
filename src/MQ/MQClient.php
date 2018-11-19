<?php
namespace ILAB_Aws\MQ;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AmazonMQ** service.
 * @method \ILAB_Aws\Result createBroker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBrokerAsync(array $args = [])
 * @method \ILAB_Aws\Result createConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBroker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBrokerAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \ILAB_Aws\Result describeBroker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBrokerAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConfigurationRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationRevisionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \ILAB_Aws\Result listBrokers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBrokersAsync(array $args = [])
 * @method \ILAB_Aws\Result listConfigurationRevisions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationRevisionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILAB_Aws\Result rebootBroker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootBrokerAsync(array $args = [])
 * @method \ILAB_Aws\Result updateBroker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBrokerAsync(array $args = [])
 * @method \ILAB_Aws\Result updateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class MQClient extends AwsClient {}
