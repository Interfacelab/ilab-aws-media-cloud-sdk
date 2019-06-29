<?php
// This file was auto-generated from sdk-root/src/data/application-insights/2018-11-25/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Amazon CloudWatch Application Insights for .NET and SQL Server</fullname> <p> Amazon CloudWatch Application Insights for .NET and SQL Server is a service that helps you detect common problems with your .NET and SQL Server-based applications. It enables you to pinpoint the source of issues in your applications (built with technologies such as Microsoft IIS, .NET, and Microsoft SQL Server), by providing key insights into detected problems.</p> <p>After you onboard your application, CloudWatch Application Insights for .NET and SQL Server identifies, recommends, and sets up metrics and logs. It continuously analyzes and correlates your metrics and logs for unusual behavior to surface actionable problems with your application. For example, if your application is slow and unresponsive and leading to HTTP 500 errors in your Application Load Balancer (ALB), Application Insights informs you that a memory pressure problem with your SQL Server database is occurring. It bases this analysis on impactful metrics and log errors. </p>', 'operations' => [ 'CreateApplication' => '<p>Adds an application that is created from a resource group.</p>', 'CreateComponent' => '<p>Creates a custom component by grouping similar standalone instances to monitor.</p>', 'DeleteApplication' => '<p>Removes the specified application from monitoring. Does not delete the application.</p>', 'DeleteComponent' => '<p>Ungroups a custom component. When you ungroup custom components, all applicable monitors that are set up for the component are removed and the instances revert to their standalone status.</p>', 'DescribeApplication' => '<p>Describes the application.</p>', 'DescribeComponent' => '<p>Describes a component and lists the resources that are grouped together in a component.</p>', 'DescribeComponentConfiguration' => '<p>Describes the monitoring configuration of the component.</p>', 'DescribeComponentConfigurationRecommendation' => '<p>Describes the recommended monitoring configuration of the component.</p>', 'DescribeObservation' => '<p>Describes an anomaly or error with the application.</p>', 'DescribeProblem' => '<p>Describes an application problem.</p>', 'DescribeProblemObservations' => '<p>Describes the anomalies or errors associated with the problem.</p>', 'ListApplications' => '<p>Lists the IDs of the applications that you are monitoring. </p>', 'ListComponents' => '<p>Lists the auto-grouped, standalone, and custom components of the application.</p>', 'ListProblems' => '<p>Lists the problems with your application.</p>', 'UpdateComponent' => '<p>Updates the custom component name and/or the list of resources that make up the component.</p>', 'UpdateComponentConfiguration' => '<p>Updates the monitoring configurations for the component. The configuration input parameter is an escaped JSON of the configuration and should match the schema of what is returned by <code>DescribeComponentConfigurationRecommendation</code>.</p>', ], 'shapes' => [ 'AffectedResource' => [ 'base' => NULL, 'refs' => [ 'Problem$AffectedResource' => '<p>The resource affected by the problem.</p>', ], ], 'ApplicationComponent' => [ 'base' => '<p>Describes a standalone resource or similarly grouped resources that the application is made up of.</p>', 'refs' => [ 'ApplicationComponentList$member' => NULL, 'DescribeComponentResponse$ApplicationComponent' => NULL, ], ], 'ApplicationComponentList' => [ 'base' => NULL, 'refs' => [ 'ListComponentsResponse$ApplicationComponentList' => '<p>The list of application components.</p>', ], ], 'ApplicationInfo' => [ 'base' => '<p>Describes the status of the application.</p>', 'refs' => [ 'ApplicationInfoList$member' => NULL, 'CreateApplicationResponse$ApplicationInfo' => '<p>Information about the application.</p>', 'DescribeApplicationResponse$ApplicationInfo' => '<p>Information about the application.</p>', ], ], 'ApplicationInfoList' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsResponse$ApplicationInfoList' => '<p>The list of applications.</p>', ], ], 'BadRequestException' => [ 'base' => '<p>The request is not understood by the server.</p>', 'refs' => [], ], 'ComponentConfiguration' => [ 'base' => NULL, 'refs' => [ 'DescribeComponentConfigurationRecommendationResponse$ComponentConfiguration' => '<p>The recommended configuration settings of the component. The value is the escaped JSON of the configuration.</p>', 'DescribeComponentConfigurationResponse$ComponentConfiguration' => '<p>The configuration settings of the component. The value is the escaped JSON of the configuration.</p>', 'UpdateComponentConfigurationRequest$ComponentConfiguration' => '<p>The configuration settings of the component. The value is the escaped JSON of the configuration. For more information about the JSON format, see <a href="https://docs.aws.amazon.com/sdk-for-javascript/v2/developer-guide/working-with-json.html">Working with JSON</a>. You can send a request to <code>DescribeComponentConfigurationRecommendation</code> to see the recommended configuration for a component.</p>', ], ], 'ComponentName' => [ 'base' => NULL, 'refs' => [ 'ApplicationComponent$ComponentName' => '<p>The name of the component.</p>', 'CreateComponentRequest$ComponentName' => '<p>The name of the component.</p>', 'DeleteComponentRequest$ComponentName' => '<p>The name of the component.</p>', 'DescribeComponentConfigurationRecommendationRequest$ComponentName' => '<p>The name of the component.</p>', 'DescribeComponentConfigurationRequest$ComponentName' => '<p>The name of the component.</p>', 'DescribeComponentRequest$ComponentName' => '<p>The name of the component.</p>', 'UpdateComponentConfigurationRequest$ComponentName' => '<p>The name of the component.</p>', 'UpdateComponentRequest$ComponentName' => '<p>The name of the component.</p>', ], ], 'CreateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateComponentRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateComponentResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteComponentRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteComponentResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeComponentConfigurationRecommendationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeComponentConfigurationRecommendationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeComponentConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeComponentConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeComponentRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeComponentResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeObservationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeObservationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeProblemObservationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeProblemObservationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeProblemRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeProblemResponse' => [ 'base' => NULL, 'refs' => [], ], 'EndTime' => [ 'base' => NULL, 'refs' => [ 'ListProblemsRequest$EndTime' => '<p>The time when the problem ended, in epoch seconds. If not specified, problems within the past seven days are returned.</p>', 'Observation$EndTime' => '<p>The time when the observation ended, in epoch seconds.</p>', 'Problem$EndTime' => '<p>The time when the problem ended, in epoch seconds.</p>', ], ], 'ErrorMsg' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$Message' => NULL, 'InternalServerException$Message' => NULL, 'ResourceInUseException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'Feedback' => [ 'base' => NULL, 'refs' => [ 'Problem$Feedback' => '<p>Feedback provided by the user about the problem.</p>', ], ], 'FeedbackKey' => [ 'base' => NULL, 'refs' => [ 'Feedback$key' => NULL, ], ], 'FeedbackValue' => [ 'base' => NULL, 'refs' => [ 'Feedback$value' => NULL, ], ], 'Insights' => [ 'base' => NULL, 'refs' => [ 'Problem$Insights' => '<p>A detailed analysis of the problem using machine learning.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>The server encountered an internal error and is unable to complete the request.</p>', 'refs' => [], ], 'LifeCycle' => [ 'base' => NULL, 'refs' => [ 'ApplicationInfo$LifeCycle' => '<p>The lifecycle of the application. </p>', ], ], 'LineTime' => [ 'base' => NULL, 'refs' => [ 'Observation$LineTime' => '<p>The timestamp in the CloudWatch Logs that specifies when the matched line occurred.</p>', ], ], 'ListApplicationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListApplicationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListComponentsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListComponentsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListProblemsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListProblemsResponse' => [ 'base' => NULL, 'refs' => [], ], 'LogFilter' => [ 'base' => NULL, 'refs' => [ 'Observation$LogFilter' => '<p>The log filter of the observation.</p>', ], ], 'LogGroup' => [ 'base' => NULL, 'refs' => [ 'Observation$LogGroup' => '<p>The log group name.</p>', ], ], 'LogText' => [ 'base' => NULL, 'refs' => [ 'Observation$LogText' => '<p>The log text of the observation.</p>', ], ], 'MaxEntities' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$MaxResults' => '<p>The maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', 'ListComponentsRequest$MaxResults' => '<p>The maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', 'ListProblemsRequest$MaxResults' => '<p>The maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', ], ], 'MetricName' => [ 'base' => NULL, 'refs' => [ 'Observation$MetricName' => '<p>The name of the observation metric.</p>', ], ], 'MetricNamespace' => [ 'base' => NULL, 'refs' => [ 'Observation$MetricNamespace' => '<p>The namespace of the observation metric.</p>', ], ], 'Monitor' => [ 'base' => NULL, 'refs' => [ 'ApplicationComponent$Monitor' => '<p>Indicates whether the application component is monitored. </p>', 'DescribeComponentConfigurationResponse$Monitor' => '<p>Indicates whether the application component is monitored.</p>', 'UpdateComponentConfigurationRequest$Monitor' => '<p>Indicates whether the application component is monitored.</p>', ], ], 'NewComponentName' => [ 'base' => NULL, 'refs' => [ 'UpdateComponentRequest$NewComponentName' => '<p>The new name of the component.</p>', ], ], 'Observation' => [ 'base' => '<p>Describes an anomaly or error with the application.</p>', 'refs' => [ 'DescribeObservationResponse$Observation' => '<p>Information about the observation.</p>', 'ObservationList$member' => NULL, ], ], 'ObservationId' => [ 'base' => NULL, 'refs' => [ 'DescribeObservationRequest$ObservationId' => '<p>The ID of the observation.</p>', 'Observation$Id' => '<p>The ID of the observation type.</p>', ], ], 'ObservationList' => [ 'base' => NULL, 'refs' => [ 'RelatedObservations$ObservationList' => '<p>The list of observations related to the problem.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$NextToken' => '<p>The token to request the next page of results.</p>', 'ListApplicationsResponse$NextToken' => '<p>The token used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return. </p>', 'ListComponentsRequest$NextToken' => '<p>The token to request the next page of results.</p>', 'ListComponentsResponse$NextToken' => '<p>The token to request the next page of results.</p>', 'ListProblemsRequest$NextToken' => '<p>The token to request the next page of results.</p>', 'ListProblemsResponse$NextToken' => '<p>The token used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return. </p>', ], ], 'Problem' => [ 'base' => '<p>Describes a problem that is detected by correlating observations.</p>', 'refs' => [ 'DescribeProblemResponse$Problem' => '<p>Information about the problem. </p>', 'ProblemList$member' => NULL, ], ], 'ProblemId' => [ 'base' => NULL, 'refs' => [ 'DescribeProblemObservationsRequest$ProblemId' => '<p>The ID of the problem.</p>', 'DescribeProblemRequest$ProblemId' => '<p>The ID of the problem.</p>', 'Problem$Id' => '<p>The ID of the problem.</p>', ], ], 'ProblemList' => [ 'base' => NULL, 'refs' => [ 'ListProblemsResponse$ProblemList' => '<p>The list of problems. </p>', ], ], 'RelatedObservations' => [ 'base' => '<p>Describes observations related to the problem.</p>', 'refs' => [ 'DescribeProblemObservationsResponse$RelatedObservations' => '<p>Observations related to the problem.</p>', ], ], 'Remarks' => [ 'base' => NULL, 'refs' => [ 'ApplicationInfo$Remarks' => '<p>The issues on the user side that are blocking Application Insights from fully monitoring the application.</p>', ], ], 'ResourceARN' => [ 'base' => NULL, 'refs' => [ 'ResourceList$member' => NULL, ], ], 'ResourceGroupName' => [ 'base' => NULL, 'refs' => [ 'ApplicationInfo$ResourceGroupName' => '<p>The name of the resource group used for the application.</p>', 'CreateApplicationRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'CreateComponentRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'DeleteApplicationRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'DeleteComponentRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'DescribeApplicationRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'DescribeComponentConfigurationRecommendationRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'DescribeComponentConfigurationRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'DescribeComponentRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'ListComponentsRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'ListProblemsRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'Problem$ResourceGroupName' => '<p>The name of the resource group affected by the problem.</p>', 'UpdateComponentConfigurationRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', 'UpdateComponentRequest$ResourceGroupName' => '<p>The name of the resource group.</p>', ], ], 'ResourceInUseException' => [ 'base' => '<p>The resource is already created or in use.</p>', 'refs' => [], ], 'ResourceList' => [ 'base' => NULL, 'refs' => [ 'CreateComponentRequest$ResourceList' => '<p>The list of resource ARNs that belong to the component.</p>', 'DescribeComponentResponse$ResourceList' => '<p>The list of resource ARNs that belong to the component.</p>', 'UpdateComponentRequest$ResourceList' => '<p>The list of resource ARNs that belong to the component.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The resource does not exist in the customer account.</p>', 'refs' => [], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'ApplicationComponent$ResourceType' => '<p>The resource type. Supported resource types include EC2 instances, Auto Scaling group, Classic ELB, Application ELB, and SQS Queue.</p>', ], ], 'SeverityLevel' => [ 'base' => NULL, 'refs' => [ 'Problem$SeverityLevel' => '<p>A measure of the level of impact of the problem.</p>', ], ], 'SourceARN' => [ 'base' => NULL, 'refs' => [ 'Observation$SourceARN' => '<p>The source resource ARN of the observation.</p>', ], ], 'SourceType' => [ 'base' => NULL, 'refs' => [ 'Observation$SourceType' => '<p>The source type of the observation.</p>', ], ], 'StartTime' => [ 'base' => NULL, 'refs' => [ 'ListProblemsRequest$StartTime' => '<p>The time when the problem was detected, in epoch seconds. If you don\'t specify a time frame for the request, problems within the past seven days are returned.</p>', 'Observation$StartTime' => '<p>The time when the observation was first detected, in epoch seconds.</p>', 'Problem$StartTime' => '<p>The time when the problem started, in epoch seconds.</p>', ], ], 'Status' => [ 'base' => NULL, 'refs' => [ 'Problem$Status' => '<p>The status of the problem.</p>', ], ], 'Tier' => [ 'base' => NULL, 'refs' => [ 'ApplicationComponent$Tier' => '<p>The stack tier of the application component.</p>', 'DescribeComponentConfigurationRecommendationRequest$Tier' => '<p>The tier of the application component. Supported tiers include <code>DOT_NET_WORKER</code>, <code>DOT_NET_WEB_TIER</code>, <code>SQL_SERVER</code>, and <code>DEFAULT</code>.</p>', 'DescribeComponentConfigurationResponse$Tier' => '<p>The tier of the application component. Supported tiers include <code>DOT_NET_WORKER</code>, <code>DOT_NET_WEB_TIER</code>, <code>SQL_SERVER</code>, and <code>DEFAULT</code> </p>', 'UpdateComponentConfigurationRequest$Tier' => '<p>The tier of the application component. Supported tiers include <code>DOT_NET_WORKER</code>, <code>DOT_NET_WEB_TIER</code>, <code>SQL_SERVER</code>, and <code>DEFAULT</code>.</p>', ], ], 'Title' => [ 'base' => NULL, 'refs' => [ 'Problem$Title' => '<p>The name of the problem.</p>', ], ], 'Unit' => [ 'base' => NULL, 'refs' => [ 'Observation$Unit' => '<p>The unit of the source observation metric.</p>', ], ], 'UpdateComponentConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateComponentConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateComponentRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateComponentResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>The parameter is not valid.</p>', 'refs' => [], ], 'Value' => [ 'base' => NULL, 'refs' => [ 'Observation$Value' => '<p>The value of the source observation metric.</p>', ], ], ],];
