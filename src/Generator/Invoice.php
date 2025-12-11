<?php

namespace Structurize\Structurize\Generator;

class Invoice
{
    // Properties (zonder typed properties voor PHP 7.0)
    private $documentType = 'INVOICE';
    private $reference = '';
    private $projectReference = null;
    private $fileStream = null;
    private $fileName = null;
    private $dueDate = null;
    private $totalVatExcl = 0;
    private $dueDays = null;
    private $totalVatIncl = 0;
    private $issueDate = '';
    private $vatAmount = 0;
    private $vatPercentage = '';
    private $structuredReference = null;
    private $invoiceNumber = '';
    private $supplierIBAN = null;
    private $customerName = '';
    private $customerAddress = null;
    private $customerVAT = '';
    private $customerCode = '';
    private $customerVATRegime = 'Z';
    private $customerVATCountry = '';
    private $customerContactName = null;
    private $customerContactTelephone = null;
    private $customerContactElectronicMail = null;
    private $customerPeppolIdentifier = null;
    private $customerFullPeppolId = null;
    private $supplierVAT = '';
    private $supplierName = null;
    private $supplierAddress = null;
    private $supplierVATCountry = '';
    private $supplierBIC = null;

    private $supplierPeppolIdentifier = null;
    private $supplierFullPeppolId = null;
    private $lines = null;
    private $taxes = null;
    private $paymentTerms = null;

    private $attachments = null;

    public function __construct()
    {
    }

    // Document Type
    public function getDocumentType()
    {
        return $this->documentType;
    }

    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }

    // Reference
    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference = null)
    {
        $this->reference = $reference;
    }

    // Project Reference
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    public function setProjectReference($projectReference = null)
    {
        $this->projectReference = $projectReference;
    }

    // File Stream
    public function getFileStream()
    {
        return $this->fileStream;
    }

    public function setFileStream($fileStream = null)
    {
        $this->fileStream = $fileStream;
    }

    // File Name
    public function getFileName()
    {
        return $this->fileName;
    }

    public function setFileName($fileName = null)
    {
        $this->fileName = $fileName;
    }

    // Due Date
    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate($dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

    // Total VAT Excl
    public function getTotalVatExcl(): float
    {
        return $this->totalVatExcl;
    }

    public function setTotalVatExcl($totalVatExcl)
    {
        $this->totalVatExcl = $totalVatExcl;
    }

    // Due Days
    public function getDueDays()
    {
        return $this->dueDays ?? 0;
    }

    public function setDueDays($dueDays = null)
    {
        $this->dueDays = $dueDays;
    }

    // Total VAT Incl
    public function getTotalVatIncl(): float
    {
        return $this->totalVatIncl;
    }

    public function setTotalVatIncl(float $totalVatIncl)
    {
        $this->totalVatIncl = $totalVatIncl;
    }

    // Issue Date
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    public function setIssueDate(string $issueDate)
    {
        $this->issueDate = $issueDate;
    }

    // VAT Amount
    public function getVatAmount(): float
    {
        return $this->vatAmount;
    }

    public function setVatAmount(float $vatAmount)
    {
        $this->vatAmount = $vatAmount;
    }

    // VAT Percentage
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage($vatPercentage = null)
    {
        $this->vatPercentage = $vatPercentage;
    }

    // Structured Reference
    public function getStructuredReference()
    {
        return $this->structuredReference;
    }

    public function setStructuredReference($structuredReference = null)
    {
        $this->structuredReference = $structuredReference;
    }

    // Customer Name
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function setCustomerName(string $customerName)
    {
        $this->customerName = $customerName;
    }

    // Invoice Number
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(string $invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    // IBAN
    public function getSupplierIBAN()
    {
        return $this->supplierIBAN;
    }

    public function setSupplierIBAN($supplierIBAN = null)
    {
        $this->supplierIBAN = $supplierIBAN;
    }

    // Supplier BIC
    public function getSupplierBIC()
    {
        return $this->supplierBIC;
    }

    public function setSupplierBIC($supplierBIC = null)
    {
        $this->supplierBIC = $supplierBIC;
    }

    // Supplier Peppol Identifier
    public function getSupplierPeppolIdentifier()
    {
        return $this->supplierPeppolIdentifier;
    }

    public function setSupplierPeppolIdentifier($peppolIdentifier = null)
    {
        $this->supplierPeppolIdentifier = $peppolIdentifier;
    }

    // Supplier Full PeppolId
    public function getSupplierFullPeppolId()
    {
        return $this->supplierFullPeppolId;
    }

    public function setSupplierFullPeppolId($fullPeppolId = null)
    {
        $this->supplierFullPeppolId = $fullPeppolId;
    }

    // Customer Peppol Identifier
    public function getCustomerPeppolIdentifier()
    {
        return $this->customerPeppolIdentifier;
    }

    public function setCustomerPeppolIdentifier($peppolIdentifier = null)
    {
        $this->customerPeppolIdentifier = $peppolIdentifier;
    }

    // Customer Full PeppolId
    public function getCustomerFullPeppolId()
    {
        return $this->customerFullPeppolId;
    }

    public function setCustomerFullPeppolId($fullPeppolId = null)
    {
        $this->customerFullPeppolId = $fullPeppolId;
    }

    // Customer Address
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress($street = null, $number = null, $city = null, $zipcode = null, $country = null)
    {
        $customerAddress          = new \stdClass();
        $customerAddress->street  = $street;
        $customerAddress->number  = $number;
        $customerAddress->city    = $city;
        $customerAddress->zipcode = $zipcode;
        $customerAddress->country = $country;
        $this->customerAddress    = $customerAddress;
    }

    // Customer Code
    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode = null)
    {
        $this->customerCode = $customerCode;
    }

    // Customer Contact Name
    public function getCustomerContactName()
    {
        return $this->customerContactName;
    }

    public function setCustomerContactName($customerContactName = null)
    {
        $this->customerContactName = $customerContactName;
    }

    // Customer Contact Telephone
    public function getCustomerContactTelephone()
    {
        return $this->customerContactTelephone;
    }

    public function setCustomerContactTelephone($customerContactTelephone = null)
    {
        $this->customerContactTelephone = $customerContactTelephone;
    }

    // Customer Contact Electronic Mail
    public function getCustomerContactElectronicMail()
    {
        return $this->customerContactElectronicMail;
    }

    public function setCustomerContactElectronicMail($customerContactElectronicMail = null)
    {
        $this->customerContactElectronicMail = $customerContactElectronicMail;
    }

    // Supplier VAT
    public function getSupplierVAT(): string
    {
        return $this->supplierVAT;
    }

    public function setSupplierVAT(string $supplierVAT)
    {
        $this->supplierVAT = $supplierVAT;
    }

    // Customer VAT
    public function getCustomerVAT(): string
    {
        return $this->customerVAT;
    }

    public function setCustomerVAT(string $customerVAT)
    {
        $this->customerVAT = $customerVAT;
    }

    // Customer VAT Regime
    public function getCustomerVATRegime(): string
    {
        return $this->customerVATRegime;
    }

    public function setCustomerVATRegime($customerVATRegime = null)
    {
        $this->customerVATRegime = $customerVATRegime;
    }

    // Supplier VAT Country
    public function getSupplierVATCountry()
    {
        return $this->supplierVATCountry;
    }

    public function setSupplierVATCountry($supplierVATCountry = null)
    {
        $this->supplierVATCountry = $supplierVATCountry;
    }

    // Customer VAT Country
    public function getCustomerVATCountry()
    {
        return $this->customerVATCountry;
    }

    public function setCustomerVATCountry($customerVATCountry = null)
    {
        $this->customerVATCountry = $customerVATCountry;
    }

    // Supplier Address
    public function getSupplierAddress()
    {
        return $this->supplierAddress;
    }

    public function setSupplierAddress($street = null, $number = null, $city = null, $zipcode = null, $country = null)
    {
        $supplierAddress          = new \stdClass();
        $supplierAddress->street  = $street;
        $supplierAddress->number  = $number;
        $supplierAddress->city    = $city;
        $supplierAddress->zipcode = $zipcode;
        $supplierAddress->country = $country;
        $this->supplierAddress    = $supplierAddress;
    }

    // Supplier Name
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    public function setSupplierName($supplierName = null)
    {
        $this->supplierName = $supplierName;
    }

    /**
     * @return GenericInvoiceLine[]
     */
    public function getLines(): array
    {
        return (array)$this->lines;
    }

    public function setLines($lines = null)
    {
        $this->lines = $lines;
    }

    public function getTaxes(): array
    {
        return (array)$this->taxes;
    }

    public function setTaxes($taxes = null)
    {
        $this->taxes = $taxes;
    }

    public function getPaymentTerms(): array
    {
        return (array)$this->paymentTerms;
    }

    public function setPaymentTerms($paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
    }

    public function getAttachments(): array
    {
        return (array)$this->attachments;
    }

    public function setAttachments($attachments = null)
    {
        $this->attachments = $attachments;
    }

    public function toJson()
    {
        return $this->__toString();
    }

    // Method to convert object to JSON
    public function __toString(): string
    {
        $vars = get_object_vars($this);

        // Convert addresses to objects
        if (isset($vars['customerAddress']) && is_object($vars['customerAddress'])) {
            $vars['customerAddress'] = [
                'street' => $vars['customerAddress']->street ?? null,
                'number' => $vars['customerAddress']->number ?? null,
                'city' => $vars['customerAddress']->city ?? null,
                'zipcode' => $vars['customerAddress']->zipcode ?? null,
                'country' => $vars['customerAddress']->country ?? null,
            ];
        }

        if (isset($vars['supplierAddress']) && is_object($vars['supplierAddress'])) {
            $vars['supplierAddress'] = [
                'street' => $vars['supplierAddress']->street ?? null,
                'number' => $vars['supplierAddress']->number ?? null,
                'city' => $vars['supplierAddress']->city ?? null,
                'zipcode' => $vars['supplierAddress']->zipcode ?? null,
                'country' => $vars['supplierAddress']->country ?? null,
            ];
        }

        // Handle lines and taxes
        $lines = $taxes = $paymentTerms = [];
        if (isset($vars['lines']) && is_array($vars['lines'])) {
            foreach ($vars['lines'] as $line) {
                if (is_object($line)) {
                    $l = [
                        'lineId' => $line->getLineId() ?? null,
                        'name' => $line->getName() ?? '',
                        'description' => $line->getDescription() ?? '',
                        'quantity' => $line->getQuantity() ?? 0,
                        'amount' => $line->getAmount() ?? 0,
                        'vatPercentage' => $line->getVatPercentage() ?? 0,
                        'info' => $line->getInfo() ?? '',
                    ];

                    $additionalProperties = array_keys(json_decode($line->__toString(), true));
                    foreach ($additionalProperties as $value) {
                        if (!in_array($value, ['lineId', 'name', 'description', 'quantity', 'amount', 'vatPercentage', 'info']) && !isset($lines[$value])) {
                            $l[$value] = method_exists($line, 'get' . ucfirst($value)) ? $line->{'get' . ucfirst($value)}() : null;
                        }
                    }

                    $lines[] = $l;
                }
            }
        }

        if (isset($vars['taxes']) && is_array($vars['taxes'])) {
            foreach ($vars['taxes'] as $tax) {
                if (is_object($tax)) {
                    $t = [
                        'vat' => $tax->getVat() ?? 0,
                        'amount' => $tax->getAmount() ?? 0,
                        'percentage' => $tax->getPercentage() ?? 0,
                    ];

                    $additionalProperties = array_keys(json_decode($tax->__toString(), true));
                    foreach ($additionalProperties as $value) {
                        if (!in_array($value, ['vat', 'amount', 'percentage']) && !isset($taxes[$value])) {
                            $l[$value] = method_exists($tax, 'get' . ucfirst($value)) ? $tax->{'get' . ucfirst($value)}() : null;
                        }
                    }

                    $taxes[] = $t;
                }
            }
        }

        if (isset($vars['paymentTerms']) && is_array($vars['paymentTerms'])) {
            foreach ($vars['paymentTerms'] as $term) {
                if (is_object($term)) {
                    $t = [
                        'note' => $term->getNote() ?? 0,
                        'amount' => $term->getAmount() ?? 0,
                        'percentage' => $term->getPercentage() ?? 0,
                        'duedate' => $term->getDueDate() ?? 0,
                    ];

                    $additionalProperties = array_keys(json_decode($term->__toString(), true));
                    foreach ($additionalProperties as $value) {
                        if (!in_array($value, ['note', 'amount', 'percentage', 'duedate']) && !isset($paymentTerms[$value])) {
                            $l[$value] = method_exists($term, 'get' . ucfirst($value)) ? $term->{'get' . ucfirst($value)}() : null;
                        }
                    }

                    $paymentTerms[] = $t;
                }
            }
        }     

        $vars['lines']        = $lines;
        $vars['taxes']        = $taxes;
        $vars['paymentTerms'] = $paymentTerms;

        // Ensure all required fields are present with default values
        $defaults = [
            'documentType' => 'Invoice',
            'reference' => '',
            'fileStream' => '',
            'fileName' => '',
            'dueDate' => null,
            'totalVatExcl' => 0,
            'dueDays' => null,
            'totalVatIncl' => 0,
            'issueDate' => null,
            'vatAmount' => 0,
            'vatPercentage' => '',
            'structuredReference' => '',
            'invoiceNumber' => '',
            'supplierIBAN' => '',
            'customerName' => '',
            'customerVAT' => '',
            'customerVATRegime' => 'Z',
            'customerVATCountry' => '',
            'customerContactTelephone' => null,
            'customerContactElectronicMail' => null,
            'supplierVAT' => '',
            'supplierName' => '',
            'supplierVATCountry' => '',
            'supplierBIC' => '',
            'peppolIdentifier' => '',
        ];

        $vars = array_merge($defaults, $vars);

        return json_encode($vars);
    }

    public function fromJson($json)
    {
        $json = json_decode($json);
        // loop json and set value via setter
        foreach ($json as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                if ($method == 'setLines') {
                    $lines = [];
                    foreach ($value as $line) {
                        $invoiceLine = new InvoiceLine();
                        foreach ($line as $k => $v) {
                            $setter = 'set' . ucfirst($k);
                            $invoiceLine->$setter($v);
                        }
                        $lines[] = $invoiceLine;
                    }
                    $this->$method($lines);
                } elseif ($method == 'setTaxes') {
                    $taxes = [];
                    foreach ($value as $tax) {
                        $taxLine = new Tax();
                        foreach ($tax as $k => $v) {
                            $setter = 'set' . ucfirst($k);
                            $taxLine->$setter($v);
                        }
                        $taxes[] = $taxLine;
                    }
                    $this->$method($taxes);
                } elseif ($method == 'setPaymentTerms') {
                    $paymentTerms = [];
                    foreach ($value as $term) {
                        $termLine = new PaymentTerm();
                        foreach ($term as $k => $v) {
                            $setter = 'set' . ucfirst($k);
                            $termLine->$setter($v);
                        }
                        $paymentTerms[] = $termLine;
                    }
                    $this->$method($paymentTerms);
                } elseif (is_object($value)) {
                    $params = get_object_vars($value);
                    $this->$method(...$params);
                } else {
                    $this->$method($value);
                }
            }
        }
    }
}
