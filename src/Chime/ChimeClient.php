<?php
namespace ILAB_Aws\Chime;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime** service.
 * @method \ILAB_Aws\Result batchSuspendUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSuspendUserAsync(array $args = [])
 * @method \ILAB_Aws\Result batchUnsuspendUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUnsuspendUserAsync(array $args = [])
 * @method \ILAB_Aws\Result batchUpdateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateUserAsync(array $args = [])
 * @method \ILAB_Aws\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \ILAB_Aws\Result inviteUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteUsersAsync(array $args = [])
 * @method \ILAB_Aws\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \ILAB_Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILAB_Aws\Result logoutUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutUserAsync(array $args = [])
 * @method \ILAB_Aws\Result resetPersonalPIN(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPersonalPINAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class ChimeClient extends AwsClient {}
