<?php
namespace ILAB_Aws\Lambda;

use ILAB_Aws\AwsClient;
use ILAB_Aws\CommandInterface;
use ILAB_Aws\Middleware;

/**
 * This client is used to interact with AWS Lambda
 *
 * @method \ILAB_Aws\Result addPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result createEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSourceMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSourceMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionConcurrencyAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result getAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result getEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSourceMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result getFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \ILAB_Aws\Result getFunctionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionConfigurationAsync(array $args = [])
 * @method \ILAB_Aws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result invoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsync(array $args = [])
 * @method \ILAB_Aws\Result invokeAsync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsyncAsync(array $args = [])
 * @method \ILAB_Aws\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \ILAB_Aws\Result listEventSourceMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventSourceMappingsAsync(array $args = [])
 * @method \ILAB_Aws\Result listFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result listVersionsByFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVersionsByFunctionAsync(array $args = [])
 * @method \ILAB_Aws\Result publishVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result putFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFunctionConcurrencyAsync(array $args = [])
 * @method \ILAB_Aws\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \ILAB_Aws\Result updateEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventSourceMappingAsync(array $args = [])
 * @method \ILAB_Aws\Result updateFunctionCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionCodeAsync(array $args = [])
 * @method \ILAB_Aws\Result updateFunctionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionConfigurationAsync(array $args = [])
 */
class LambdaClient extends AwsClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $list = $this->getHandlerList();
        if (extension_loaded('curl')) {
            $list->appendInit($this->getDefaultCurlOptionsMiddleware());
        }
    }

    /**
     * Provides a middleware that sets default Curl options for the command
     *
     * @return callable
     */
    public function getDefaultCurlOptionsMiddleware()
    {
        return Middleware::mapCommand(function (CommandInterface $cmd) {
            $defaultCurlOptions = [
                CURLOPT_TCP_KEEPALIVE => 1,
            ];
            if (!isset($cmd['@http']['curl'])) {
                $cmd['@http']['curl'] = $defaultCurlOptions;
            } else {
                $cmd['@http']['curl'] += $defaultCurlOptions;
            }
            return $cmd;
        });
    }
}
