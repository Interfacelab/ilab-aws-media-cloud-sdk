<?php
namespace ILAB_Aws\CostandUsageReportService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Cost and Usage Report Service** service.
 * @method \ILAB_Aws\Result deleteReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeReportDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportDefinitionsAsync(array $args = [])
 * @method \ILAB_Aws\Result putReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 */
class CostandUsageReportServiceClient extends AwsClient {}
