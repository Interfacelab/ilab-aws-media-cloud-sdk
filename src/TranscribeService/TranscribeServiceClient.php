<?php
namespace ILAB_Aws\TranscribeService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Transcribe Service** service.
 * @method \ILAB_Aws\Result createVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVocabularyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTranscriptionJobAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVocabularyAsync(array $args = [])
 * @method \ILAB_Aws\Result getTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscriptionJobAsync(array $args = [])
 * @method \ILAB_Aws\Result getVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVocabularyAsync(array $args = [])
 * @method \ILAB_Aws\Result listTranscriptionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscriptionJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result listVocabularies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVocabulariesAsync(array $args = [])
 * @method \ILAB_Aws\Result startTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTranscriptionJobAsync(array $args = [])
 * @method \ILAB_Aws\Result updateVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVocabularyAsync(array $args = [])
 */
class TranscribeServiceClient extends AwsClient {}
