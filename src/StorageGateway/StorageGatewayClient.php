<?php
namespace ILAB_Aws\StorageGateway;

use ILAB_Aws\AwsClient;

/**
 * AWS Storage Gateway client.
 *
 * @method \ILAB_Aws\Result activateGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result addCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result addUploadBuffer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addUploadBufferAsync(array $args = [])
 * @method \ILAB_Aws\Result addWorkingStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addWorkingStorageAsync(array $args = [])
 * @method \ILAB_Aws\Result cancelArchival(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelArchivalAsync(array $args = [])
 * @method \ILAB_Aws\Result cancelRetrieval(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRetrievalAsync(array $args = [])
 * @method \ILAB_Aws\Result createCachediSCSIVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCachediSCSIVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result createNFSFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNFSFileShareAsync(array $args = [])
 * @method \ILAB_Aws\Result createSMBFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSMBFileShareAsync(array $args = [])
 * @method \ILAB_Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \ILAB_Aws\Result createSnapshotFromVolumeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotFromVolumeRecoveryPointAsync(array $args = [])
 * @method \ILAB_Aws\Result createStorediSCSIVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStorediSCSIVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result createTapeWithBarcode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTapeWithBarcodeAsync(array $args = [])
 * @method \ILAB_Aws\Result createTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTapesAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBandwidthRateLimitAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChapCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileShareAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteTape(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTapeAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteTapeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTapeArchiveAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \ILAB_Aws\Result describeBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBandwidthRateLimitAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCachediSCSIVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCachediSCSIVolumesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChapCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeGatewayInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayInformationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceStartTimeAsync(array $args = [])
 * @method \ILAB_Aws\Result describeNFSFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNFSFileSharesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSMBFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSMBFileSharesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSMBSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSMBSettingsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotScheduleAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStorediSCSIVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorediSCSIVolumesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTapeArchives(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapeArchivesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTapeRecoveryPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapeRecoveryPointsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTapesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeUploadBuffer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUploadBufferAsync(array $args = [])
 * @method \ILAB_Aws\Result describeVTLDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVTLDevicesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeWorkingStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkingStorageAsync(array $args = [])
 * @method \ILAB_Aws\Result disableGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result joinDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise joinDomainAsync(array $args = [])
 * @method \ILAB_Aws\Result listFileShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFileSharesAsync(array $args = [])
 * @method \ILAB_Aws\Result listGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \ILAB_Aws\Result listLocalDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLocalDisksAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result listTapes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTapesAsync(array $args = [])
 * @method \ILAB_Aws\Result listVolumeInitiators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumeInitiatorsAsync(array $args = [])
 * @method \ILAB_Aws\Result listVolumeRecoveryPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumeRecoveryPointsAsync(array $args = [])
 * @method \ILAB_Aws\Result listVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVolumesAsync(array $args = [])
 * @method \ILAB_Aws\Result notifyWhenUploaded(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyWhenUploadedAsync(array $args = [])
 * @method \ILAB_Aws\Result refreshCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result resetCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetCacheAsync(array $args = [])
 * @method \ILAB_Aws\Result retrieveTapeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveTapeArchiveAsync(array $args = [])
 * @method \ILAB_Aws\Result retrieveTapeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveTapeRecoveryPointAsync(array $args = [])
 * @method \ILAB_Aws\Result setLocalConsolePassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLocalConsolePasswordAsync(array $args = [])
 * @method \ILAB_Aws\Result setSMBGuestPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSMBGuestPasswordAsync(array $args = [])
 * @method \ILAB_Aws\Result shutdownGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise shutdownGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result startGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGatewayAsync(array $args = [])
 * @method \ILAB_Aws\Result updateBandwidthRateLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBandwidthRateLimitAsync(array $args = [])
 * @method \ILAB_Aws\Result updateChapCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChapCredentialsAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGatewayInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayInformationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateGatewaySoftwareNow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewaySoftwareNowAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMaintenanceStartTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceStartTimeAsync(array $args = [])
 * @method \ILAB_Aws\Result updateNFSFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNFSFileShareAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSMBFileShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSMBFileShareAsync(array $args = [])
 * @method \ILAB_Aws\Result updateSnapshotSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSnapshotScheduleAsync(array $args = [])
 * @method \ILAB_Aws\Result updateVTLDeviceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVTLDeviceTypeAsync(array $args = [])
 */
class StorageGatewayClient extends AwsClient {}
