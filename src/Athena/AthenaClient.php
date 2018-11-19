<?php
namespace ILAB_Aws\Athena;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Athena** service.
 * @method \ILAB_Aws\Result batchGetNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetNamedQueryAsync(array $args = [])
 * @method \ILAB_Aws\Result batchGetQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetQueryExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result createNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNamedQueryAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamedQueryAsync(array $args = [])
 * @method \ILAB_Aws\Result getNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNamedQueryAsync(array $args = [])
 * @method \ILAB_Aws\Result getQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \ILAB_Aws\Result listNamedQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamedQueriesAsync(array $args = [])
 * @method \ILAB_Aws\Result listQueryExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueryExecutionsAsync(array $args = [])
 * @method \ILAB_Aws\Result startQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result stopQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopQueryExecutionAsync(array $args = [])
 */
class AthenaClient extends AwsClient {}
