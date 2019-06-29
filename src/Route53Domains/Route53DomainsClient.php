<?php
namespace ILABAmazon\Route53Domains;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Route 53 Domains** service.
 *
 * @method \ILABAmazon\Result checkDomainAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkDomainAvailabilityAsync(array $args = [])
 * @method \ILABAmazon\Result checkDomainTransferability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkDomainTransferabilityAsync(array $args = [])
 * @method \ILABAmazon\Result deleteTagsForDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsForDomainAsync(array $args = [])
 * @method \ILABAmazon\Result disableDomainAutoRenew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableDomainAutoRenewAsync(array $args = [])
 * @method \ILABAmazon\Result disableDomainTransferLock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableDomainTransferLockAsync(array $args = [])
 * @method \ILABAmazon\Result enableDomainAutoRenew(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableDomainAutoRenewAsync(array $args = [])
 * @method \ILABAmazon\Result enableDomainTransferLock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableDomainTransferLockAsync(array $args = [])
 * @method \ILABAmazon\Result getContactReachabilityStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactReachabilityStatusAsync(array $args = [])
 * @method \ILABAmazon\Result getDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainDetailAsync(array $args = [])
 * @method \ILABAmazon\Result getDomainSuggestions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainSuggestionsAsync(array $args = [])
 * @method \ILABAmazon\Result getOperationDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationDetailAsync(array $args = [])
 * @method \ILABAmazon\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \ILABAmazon\Result listOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOperationsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForDomainAsync(array $args = [])
 * @method \ILABAmazon\Result registerDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDomainAsync(array $args = [])
 * @method \ILABAmazon\Result renewDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewDomainAsync(array $args = [])
 * @method \ILABAmazon\Result resendContactReachabilityEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resendContactReachabilityEmailAsync(array $args = [])
 * @method \ILABAmazon\Result retrieveDomainAuthCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveDomainAuthCodeAsync(array $args = [])
 * @method \ILABAmazon\Result transferDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise transferDomainAsync(array $args = [])
 * @method \ILABAmazon\Result updateDomainContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainContactAsync(array $args = [])
 * @method \ILABAmazon\Result updateDomainContactPrivacy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainContactPrivacyAsync(array $args = [])
 * @method \ILABAmazon\Result updateDomainNameservers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainNameserversAsync(array $args = [])
 * @method \ILABAmazon\Result updateTagsForDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTagsForDomainAsync(array $args = [])
 * @method \ILABAmazon\Result viewBilling(array $args = [])
 * @method \GuzzleHttp\Promise\Promise viewBillingAsync(array $args = [])
 */
class Route53DomainsClient extends AwsClient {}
