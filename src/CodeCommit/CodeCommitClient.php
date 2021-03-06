<?php
namespace ILABAmazon\CodeCommit;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS CodeCommit** service.
 *
 * @method \ILABAmazon\Result batchDescribeMergeConflicts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDescribeMergeConflictsAsync(array $args = [])
 * @method \ILABAmazon\Result batchGetRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRepositoriesAsync(array $args = [])
 * @method \ILABAmazon\Result createBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBranchAsync(array $args = [])
 * @method \ILABAmazon\Result createCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCommitAsync(array $args = [])
 * @method \ILABAmazon\Result createPullRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPullRequestAsync(array $args = [])
 * @method \ILABAmazon\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \ILABAmazon\Result createUnreferencedMergeCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUnreferencedMergeCommitAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBranchAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCommentContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCommentContentAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileAsync(array $args = [])
 * @method \ILABAmazon\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \ILABAmazon\Result describeMergeConflicts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMergeConflictsAsync(array $args = [])
 * @method \ILABAmazon\Result describePullRequestEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePullRequestEventsAsync(array $args = [])
 * @method \ILABAmazon\Result getBlob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlobAsync(array $args = [])
 * @method \ILABAmazon\Result getBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBranchAsync(array $args = [])
 * @method \ILABAmazon\Result getComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommentAsync(array $args = [])
 * @method \ILABAmazon\Result getCommentsForComparedCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommentsForComparedCommitAsync(array $args = [])
 * @method \ILABAmazon\Result getCommentsForPullRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommentsForPullRequestAsync(array $args = [])
 * @method \ILABAmazon\Result getCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommitAsync(array $args = [])
 * @method \ILABAmazon\Result getDifferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDifferencesAsync(array $args = [])
 * @method \ILABAmazon\Result getFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFileAsync(array $args = [])
 * @method \ILABAmazon\Result getFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFolderAsync(array $args = [])
 * @method \ILABAmazon\Result getMergeCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMergeCommitAsync(array $args = [])
 * @method \ILABAmazon\Result getMergeConflicts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMergeConflictsAsync(array $args = [])
 * @method \ILABAmazon\Result getMergeOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMergeOptionsAsync(array $args = [])
 * @method \ILABAmazon\Result getPullRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPullRequestAsync(array $args = [])
 * @method \ILABAmazon\Result getRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryAsync(array $args = [])
 * @method \ILABAmazon\Result getRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryTriggersAsync(array $args = [])
 * @method \ILABAmazon\Result listBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBranchesAsync(array $args = [])
 * @method \ILABAmazon\Result listPullRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPullRequestsAsync(array $args = [])
 * @method \ILABAmazon\Result listRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result mergeBranchesByFastForward(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeBranchesByFastForwardAsync(array $args = [])
 * @method \ILABAmazon\Result mergeBranchesBySquash(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeBranchesBySquashAsync(array $args = [])
 * @method \ILABAmazon\Result mergeBranchesByThreeWay(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeBranchesByThreeWayAsync(array $args = [])
 * @method \ILABAmazon\Result mergePullRequestByFastForward(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergePullRequestByFastForwardAsync(array $args = [])
 * @method \ILABAmazon\Result mergePullRequestBySquash(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergePullRequestBySquashAsync(array $args = [])
 * @method \ILABAmazon\Result mergePullRequestByThreeWay(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergePullRequestByThreeWayAsync(array $args = [])
 * @method \ILABAmazon\Result postCommentForComparedCommit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postCommentForComparedCommitAsync(array $args = [])
 * @method \ILABAmazon\Result postCommentForPullRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postCommentForPullRequestAsync(array $args = [])
 * @method \ILABAmazon\Result postCommentReply(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postCommentReplyAsync(array $args = [])
 * @method \ILABAmazon\Result putFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFileAsync(array $args = [])
 * @method \ILABAmazon\Result putRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRepositoryTriggersAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result testRepositoryTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRepositoryTriggersAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCommentAsync(array $args = [])
 * @method \ILABAmazon\Result updateDefaultBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDefaultBranchAsync(array $args = [])
 * @method \ILABAmazon\Result updatePullRequestDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePullRequestDescriptionAsync(array $args = [])
 * @method \ILABAmazon\Result updatePullRequestStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePullRequestStatusAsync(array $args = [])
 * @method \ILABAmazon\Result updatePullRequestTitle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePullRequestTitleAsync(array $args = [])
 * @method \ILABAmazon\Result updateRepositoryDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryDescriptionAsync(array $args = [])
 * @method \ILABAmazon\Result updateRepositoryName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryNameAsync(array $args = [])
 */
class CodeCommitClient extends AwsClient {}
