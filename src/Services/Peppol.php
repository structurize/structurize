<?php

namespace Structurize\Structurize\Services;

use GuzzleHttp\Exception\ClientException;
use Structurize\Structurize\Log;

class Peppol
{

    protected string $apiurl;
    protected string $bearer;

    public function __construct(string $apiurl, string $bearer)
    {
        $this->apiurl = $apiurl;
        $this->bearer = $bearer;
    }

    public function sendUblDocument($filename, $stream)
    {

        $url = $this->apiurl . "/peppol/outbound-ubl-documents";

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
            'multipart' => [
                [
                    'name' => 'document',
                    'filename' => $filename,
                    'contents' => $stream,
                    'headers' => [
                        'Content-Type' => 'text/xml'
                    ]
                ]
            ],
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Basic ' . $this->bearer,
            ],
        ]);

        $response = $response->getBody();
        $answer = json_decode($response->getContents());
        if ($answer->status == 'OK') {
            $log = new Log();
            $log->send('peppol.send','Peppol document sent to customer.');

            return ['success' => true, 'answer' => $answer];
        } else {
            return ['success' => false, 'answer' => $answer];
        }
    }

    public function getSupportedDocuments($identifier)
    {
        $client = new \GuzzleHttp\Client();
        $url = $this->apiurl . "/peppol/remote-participants/" . urlencode($identifier) . "/supported-document-types";
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'accept' => 'application/json',
                    'authorization' => 'Basic ' . $this->bearer,
                ],
            ]);
            $response = $response->getBody();
            $answer = json_decode($response->getContents(), true);
        } catch (ClientException $e) {
            $answer = null;
        }
        return $answer;
    }

    public function getParticipant(string $identifier)
    {
        $client = new \GuzzleHttp\Client();
        $url = $this->apiurl . "/peppol/registered-participants/" . urlencode($identifier);
        $response = $client->request('GET', $url, [
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Basic ' . $this->bearer,
            ],
        ]);
        $response = $response->getBody();
        $answer = json_decode($response->getContents(), true);
        return $answer;
    }

    public function registerParticipant(string $email, string $firstname, string $lastname, string $identifier): array
    {
        $client = new \GuzzleHttp\Client();
        $url = $this->apiurl . "/peppol/registered-participants";
        $body = [
            'contactPerson' => [
                'language' => 'nl-BE',
                'email' => $email,
                'firstName' => $firstname,
                'lastName' => $lastname,
            ],
            'limitedToOutboundTraffic' => false,
            'supportedDocumentTypes' => ["INVOICE", "CREDIT_NOTE"],
            'peppolIdentifier' => $identifier,
        ];

        $response = $client->request('POST', $url, [
            'body' => json_encode($body),
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Basic ' . $this->bearer,
                'content-type' => 'application/json',
            ],
        ]);


        $response = $response->getBody();
        $answer = json_decode($response->getContents());
        if ($answer->status == 'OK') {
            return ['success' => true, 'answer' => $answer];
        } else {
            return ['success' => false, 'answer' => $answer];
        }
    }

    public function unregisterParticipant(string $identifier): array
    {
        $client = new \GuzzleHttp\Client();
        $url = $this->apiurl . "/peppol/registered-participants/" . urlencode($identifier);
        $response = $client->request('DELETE', $url, [
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Basic ' . $this->bearer,
            ],
        ]);

        $response = $response->getBody();
        $answer = json_decode($response->getContents());
        if ($answer->status == 'OK') {
            return ['success' => true, 'answer' => $answer];
        } else {
            return ['success' => false, 'answer' => $answer];
        }
    }

    public function getPEPPOLIdentifiers(string $vatNumber): array
    {
        $vatNumber = strtoupper($vatNumber);
        $identifiers = [];
        $vatIdentifier = $this->getVATPEPPOLIdentifier($vatNumber);
        if ($vatIdentifier != null) {
            $identifiers[] = $vatIdentifier;
        }
        $otherIdentifier = $this->getOtherPEPPOLIdentifier($vatNumber);
        if ($otherIdentifier != null) {
            $identifiers[] = $otherIdentifier;
        }
        return $identifiers;
    }

    private function getOtherPEPPOLIdentifier($vatNumber)
    {
        if (preg_match("/^BE\d{10}$/", $vatNumber)) {
            return "0208:" . substr($vatNumber, 2, 10);
        } else {
            return null;
        }
    }

    private function getVATPEPPOLIdentifier($vatNumber)
    {
        $schemeId = $this->getPEPPOLSchemeId($vatNumber);
        if ($schemeId != null) {
            return $schemeId . ":" . strtolower($vatNumber);
        } else {
            return null;
        }
    }

    private function getPEPPOLSchemeId($vatNumber)
    {
        $countryCode = substr($vatNumber, 0, 2);
        switch ($countryCode) {
            case "AD":
                return "9922";
            case "AL":
                return "9923";
            case "BA":
                return "9924";
            case "BE":
                return "9925";
            case "BG":
                return "9926";
            case "CH":
                return "9927";
            case "CY":
                return "9928";
            case "CZ":
                return "9929";
            case "DE":
                return "9930";
            case "EE":
                return "9931";
            case "GB":
                return "9932";
            case "GR":
                return "9933";
            case "HR":
                return "9934";
            case "IE":
                return "9935";
            case "LI":
                return "9936";
            case "LT":
                return "9937";
            case "LU":
                return "9938";
            case "LV":
                return "9939";
            case "MC":
                return "9940";
            case "ME":
                return "9941";
            case "MK":
                return "9942";
            case "MT":
                return "9943";
            case "NL":
                return "9944";
            case "PO":
                return "9945";
            case "PT":
                return "9946";
            case "RO":
                return "9947";
            case "RS":
                return "9948";
            case "SI":
                return "9949";
            case "SK":
                return "9950";
            case "SM":
                return "9951";
            case "TR":
                return "9952";
            case "VA":
                return "9953";
            case "SE":
                return "9955";
            case "FR":
                return "9957";
            default:
                return null;
        }
    }


}
