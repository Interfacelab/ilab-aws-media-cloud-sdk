<?php
namespace ILAB_Aws\Macie;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Macie** service.
 * @method \ILAB_Aws\Result associateMemberAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMemberAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result associateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateS3ResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateMemberAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateS3ResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result listMemberAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMemberAccountsAsync(array $args = [])
 * @method \ILAB_Aws\Result listS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listS3ResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result updateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateS3ResourcesAsync(array $args = [])
 */
class MacieClient extends AwsClient {}
