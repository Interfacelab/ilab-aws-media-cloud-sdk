<?php
namespace ILAB_Aws\Polly;

use ILAB_Aws\Api\Serializer\JsonBody;
use ILAB_Aws\AwsClient;
use ILAB_Aws\Signature\SignatureV4;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7;

/**
 * This client is used to interact with the **Amazon Polly** service.
 * @method \ILAB_Aws\Result deleteLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLexiconAsync(array $args = [])
 * @method \ILAB_Aws\Result describeVoices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVoicesAsync(array $args = [])
 * @method \ILAB_Aws\Result getLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLexiconAsync(array $args = [])
 * @method \ILAB_Aws\Result getSpeechSynthesisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSpeechSynthesisTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result listLexicons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLexiconsAsync(array $args = [])
 * @method \ILAB_Aws\Result listSpeechSynthesisTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSpeechSynthesisTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result putLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLexiconAsync(array $args = [])
 * @method \ILAB_Aws\Result startSpeechSynthesisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSpeechSynthesisTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result synthesizeSpeech(array $args = [])
 * @method \GuzzleHttp\Promise\Promise synthesizeSpeechAsync(array $args = [])
 */
class PollyClient extends AwsClient
{
    /** @var JsonBody */
    private $formatter;

    /**
     * Create a pre-signed URL for Polly operation `SynthesizeSpeech`
     *
     * @param array $args parameters array for `SynthesizeSpeech`
     *                    More information @see Aws\Polly\PollyClient::SynthesizeSpeech
     *
     * @return string
     */
    public function createSynthesizeSpeechPreSignedUrl(array $args)
    {
        $uri = new Uri($this->getEndpoint());
        $uri = $uri->withPath('/v1/speech');

        // Formatting parameters follows rest-json protocol
        $this->formatter = $this->formatter ?: new JsonBody($this->getApi());
        $queryArray = json_decode(
            $this->formatter->build(
                $this->getApi()->getOperation('SynthesizeSpeech')->getInput(),
                $args
            ),
            true
        );

        // Mocking a 'GET' request in pre-signing the Url
        $query = Psr7\build_query($queryArray);
        $uri = $uri->withQuery($query);

        $request = new Request('GET', $uri);
        $request = $request->withBody(Psr7\stream_for(''));
        $signer = new SignatureV4('polly', $this->getRegion());
        return (string) $signer->presign(
            $request,
            $this->getCredentials()->wait(),
            '+15 minutes'
        )->getUri();
    }
}
