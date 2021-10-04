<?php

namespace GoogleCloudVision;

use GoogleCloudVision\Request\Request;
use GoogleCloudVision\Response\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 *
 */
class GoogleCloudVision
{

    /**
     * @var Request
     *
     * The annotate image request
     */
    protected $request;

    /**
     * @var Response
     *
     * The annotate image response
     */
    protected $response;

    /**
     * @var string
     *
     * Google api key for authentication
     */
    protected $apiKey;

    /**
     * @var Client
     *
     * GuzzleHttp Client
     */
    protected $client;

    /**
     * @var string
     *
     * Google api base url
     */
    const API_URL = "https://vision.googleapis.com/v1/images:annotate";

    public function __construct($request, $apikey)
    {
        $this->request = new Request($request);
        $this->apiKey = $apikey;
        $this->client = new \GuzzleHttp\Client;
    }

    public function annotate()
    {
        try {
            $url = "https://vision.googleapis.com/v1/images:annotate?key=" . $this->apiKey;
            $response = $this->client->post($url, ['json' => $this->request]);
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = $this->statusCodeHandling($e);
            return $response;
        }
    }

    protected function statusCodeHandling($e)
    {
        $response = array(
            "statuscode" => $e->getResponse()->getStatusCode(),
            "error" => json_decode($e->getResponse()->getBody(true)->getContents())
        );
        return $response;
    }
}
