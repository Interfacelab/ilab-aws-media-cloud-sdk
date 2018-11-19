<?php
namespace ILAB_Aws\ACMPCA;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager Private Certificate Authority** service.
 * @method \ILAB_Aws\Result createCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAuthorityAsync(array $args = [])
 * @method \ILAB_Aws\Result createCertificateAuthorityAuditReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAuthorityAuditReportAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAuthorityAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAuthorityAsync(array $args = [])
 * @method \ILAB_Aws\Result describeCertificateAuthorityAuditReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAuthorityAuditReportAsync(array $args = [])
 * @method \ILAB_Aws\Result getCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result getCertificateAuthorityCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAuthorityCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result getCertificateAuthorityCsr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAuthorityCsrAsync(array $args = [])
 * @method \ILAB_Aws\Result importCertificateAuthorityCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAuthorityCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result issueCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise issueCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result listCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificateAuthoritiesAsync(array $args = [])
 * @method \ILAB_Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \ILAB_Aws\Result restoreCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreCertificateAuthorityAsync(array $args = [])
 * @method \ILAB_Aws\Result revokeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeCertificateAsync(array $args = [])
 * @method \ILAB_Aws\Result tagCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagCertificateAuthorityAsync(array $args = [])
 * @method \ILAB_Aws\Result untagCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagCertificateAuthorityAsync(array $args = [])
 * @method \ILAB_Aws\Result updateCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAuthorityAsync(array $args = [])
 */
class ACMPCAClient extends AwsClient {}
