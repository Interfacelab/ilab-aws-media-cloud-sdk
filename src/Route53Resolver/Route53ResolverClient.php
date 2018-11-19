<?php
namespace ILAB_Aws\Route53Resolver;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Route 53 Resolver** service.
 * @method \ILAB_Aws\Result associateResolverEndpointIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverEndpointIpAddressAsync(array $args = [])
 * @method \ILAB_Aws\Result associateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result createResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result createResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateResolverEndpointIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverEndpointIpAddressAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result getResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result getResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRuleAsync(array $args = [])
 * @method \ILAB_Aws\Result getResolverRuleAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRuleAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result getResolverRulePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRulePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result listResolverEndpointIpAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverEndpointIpAddressesAsync(array $args = [])
 * @method \ILAB_Aws\Result listResolverEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverEndpointsAsync(array $args = [])
 * @method \ILAB_Aws\Result listResolverRuleAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverRuleAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listResolverRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverRulesAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result putResolverRulePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResolverRulePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result updateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverRuleAsync(array $args = [])
 */
class Route53ResolverClient extends AwsClient {}
