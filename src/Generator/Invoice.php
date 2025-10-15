<?php

namespace Structurize\Structurize\Generator;

class Invoice
{
    // Properties with type declarations
    private string $documentType = 'INVOICE';
    private string $reference = '';
    private ?string $projectReference = null;
    private ?string $fileStream = null;
    private ?string $fileName = null;
    private ?string $dueDate = null;
    private float $totalVatExcl = 0;
    private ?string $dueDays = null;
    private float $totalVatIncl = 0;
    private string $issueDate = '';
    private float $vatAmount = 0;
    private ?string $vatPercentage = '';
    private ?string $structuredReference = null;
    private string $invoiceNumber = '';
    private ?string $supplierIBAN = null;
    private string $customerName = '';
    private object $customerAddress;
    private string $customerVAT = '';
    private ?string $customerCode = '';
    private ?string $customerVATRegime = 'Z';
    private ?string $customerVATCountry = '';
    private ?string $customerContactName = null;
    private ?string $customerContactTelephone = null;
    private ?string $customerContactElectronicMail = null;
    private ?string $customerPeppolIdentifier = null;
    private ?string $customerFullPeppolId = null;
    private string $supplierVAT = '';
    private ?string $supplierName = null;
    private ?object $supplierAddress = null;
    private ?string $supplierVATCountry = '';
    private ?string $supplierBIC = null;

    private ?string $supplierPeppolIdentifier = null;
    private ?string $supplierFullPeppolId = null;
    private ?array $lines = null;
    private ?array $taxes = null;
    private ?array $paymentTerms = null;

    // Constructor with property promotion and default null for nullable fields
    public function __construct()
    {
    }

    // Getters and Setters for each field

    // Document Type
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    public function setDocumentType(string $documentType): void
    {
        $this->documentType = $documentType;
    }

    // Reference
    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    // Project Reference
    public function getProjectReference(): ?string
    {
        return $this->projectReference;
    }

    public function setProjectReference(?string $projectReference): void
    {
        $this->projectReference = $projectReference;
    }

    // File Stream
    public function getFileStream(): ?string
    {
        return $this->fileStream;
    }

    public function setFileStream(?string $fileStream): void
    {
        $this->fileStream = $fileStream;
    }

    // File Name
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    // Due Date
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    // Total VAT Excl
    public function getTotalVatExcl(): float
    {
        return $this->totalVatExcl;
    }

    public function setTotalVatExcl(string $totalVatExcl): void
    {
        $this->totalVatExcl = $totalVatExcl;
    }

    // Due Days
    public function getDueDays(): string
    {
        return $this->dueDays ?? 0;
    }

    public function setDueDays(?string $dueDays): void
    {
        $this->dueDays = $dueDays;
    }

    // Total VAT Incl
    public function getTotalVatIncl(): float
    {
        return $this->totalVatIncl;
    }

    public function setTotalVatIncl(float $totalVatIncl): void
    {
        $this->totalVatIncl = $totalVatIncl;
    }

    // Issue Date
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    public function setIssueDate(string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    // VAT Amount
    public function getVatAmount(): float
    {
        return $this->vatAmount;
    }

    public function setVatAmount(float $vatAmount): void
    {
        $this->vatAmount = $vatAmount;
    }

    // VAT Percentage
    public function getVatPercentage(): ?string
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage(?string $vatPercentage): void
    {
        $this->vatPercentage = $vatPercentage;
    }

    // Structured Reference
    public function getStructuredReference(): ?string
    {
        return $this->structuredReference;
    }

    public function setStructuredReference(?string $structuredReference): void
    {
        $this->structuredReference = $structuredReference;
    }

    // Customer Name
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function setCustomerName(string $customerName): void
    {
        $this->customerName = $customerName;
    }


    // Invoice Number
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    // IBAN
    public function getSupplierIBAN(): string
    {
        return $this->supplierIBAN;
    }

    public function setSupplierIBAN(?string $supplierIBAN): void
    {
        $this->supplierIBAN = $supplierIBAN;
    }

    // Supplier BIC
    public function getSupplierBIC(): string
    {
        return $this->supplierBIC;
    }

    public function setSupplierBIC(?string $supplierBIC): void
    {
        $this->supplierBIC = $supplierBIC;
    }

    //Supplier Peppol Identifier
    public function getSupplierPeppolIdentifier(): ?string
    {
        return $this->supplierPeppolIdentifier;
    }

    public function setSupplierPeppolIdentifier(?string $peppolIdentifier): void
    {
        $this->supplierPeppolIdentifier = $peppolIdentifier;
    }

    //Supplier Full PeppolId

    public function getSupplierFullPeppolId(): ?string
    {
        return $this->supplierFullPeppolId;
    }

    public function setSupplierFullPeppolId(?string $fullPeppolId): void
    {
        $this->supplierFullPeppolId = $fullPeppolId;
    }

    //Customer Peppol Identifier
    public function getCustomerPeppolIdentifier(): ?string
    {
        return $this->customerPeppolIdentifier;
    }

    public function setCustomerPeppolIdentifier(?string $peppolIdentifier): void
    {
        $this->customerPeppolIdentifier = $peppolIdentifier;
    }

    //Customer Full PeppolId

    public function getCustomerFullPeppolId(): ?string
    {
        return $this->customerFullPeppolId;
    }

    public function setCustomerFullPeppolId(?string $fullPeppolId): void
    {
        $this->customerFullPeppolId = $fullPeppolId;
    }


    // Customer Address
    public function getCustomerAddress(): object
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress($street = null, $number = null, $city = null, $zipcode = null, $country = null): void
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
    public function getCustomerCode(): ?string
    {
        return $this->customerCode;
    }

    public function setCustomerCode(?string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    // Customer Contact Name
    public function getCustomerContactName(): ?string
    {
        return $this->customerContactName;
    }

    public function setCustomerContactName(?string $customerContactName): void
    {
        $this->customerContactName = $customerContactName;
    }

    // Customer Contact Telephone
    public function getCustomerContactTelephone(): ?string
    {
        return $this->customerContactTelephone;
    }

    public function setCustomerContactTelephone(?string $customerContactTelephone): void
    {
        $this->customerContactTelephone = $customerContactTelephone;
    }

    // Customer Contact Electronic Mail
    public function getCustomerContactElectronicMail(): ?string
    {
        return $this->customerContactElectronicMail;
    }

    public function setCustomerContactElectronicMail(?string $customerContactElectronicMail): void
    {
        $this->customerContactElectronicMail = $customerContactElectronicMail;
    }

    // Supplier VAT
    public function getSupplierVAT(): string
    {
        return $this->supplierVAT;
    }

    public function setSupplierVAT(string $supplierVAT): void
    {
        $this->supplierVAT = $supplierVAT;
    }

    // Customer VAT
    public function getCustomerVAT(): string
    {
        return $this->customerVAT;
    }

    public function setCustomerVAT(string $customerVAT): void
    {
        $this->customerVAT = $customerVAT;
    }

    // Customer VAT Regime
    public function getCustomerVATRegime(): string
    {
        return $this->customerVATRegime;
    }

    public function setCustomerVATRegime(?string $customerVATRegime): void
    {
        $this->customerVATRegime = $customerVATRegime;
    }

    // Supplier VAT Country
    public function getSupplierVATCountry(): ?string
    {
        return $this->supplierVATCountry;
    }

    public function setSupplierVATCountry(?string $supplierVATCountry): void
    {
        $this->supplierVATCountry = $supplierVATCountry;
    }

    // Customer VAT Country
    public function getCustomerVATCountry(): ?string
    {
        return $this->customerVATCountry;
    }

    public function setCustomerVATCountry(?string $customerVATCountry): void
    {
        $this->customerVATCountry = $customerVATCountry;
    }

    // Supplier Address
    public function getSupplierAddress(): ?object
    {
        return $this->supplierAddress;
    }

    public function setSupplierAddress($street = null, $number = null, $city = null, $zipcode = null, $country = null): void
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
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    public function setSupplierName(?string $supplierName): void
    {
        $this->supplierName = $supplierName;
    }

    // Lines

    /**
     * @return GenericInvoiceLine[]
     */
    public function getLines(): array
    {
        return (array)$this->lines;
    }

    public function setLines(?array $lines): void
    {
        $this->lines = $lines;
    }

    public function getTaxes(): array
    {
        return (array)$this->taxes;
    }

    public function setTaxes(?array $taxes): void
    {
        $this->taxes = $taxes;
    }

    public function getPaymentTerms(): array
    {
        return (array)$this->paymentTerms;
    }

    public function setPaymentTerms(?array $paymentTerms): void
    {
        $this->paymentTerms = $paymentTerms;
    }
    public function toJson(){
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

        $vars['lines']          = $lines;
        $vars['taxes']          = $taxes;
        $vars['paymentTerms']   = $paymentTerms;

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
        //loop json and set value via setter
        foreach ($json as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                //if the method is setLines, loop the lines and create a new InvoiceLine object
                if ($method == 'setLines') {
                    $lines = [];
                    foreach ($value as $line) {
                        $invoiceLine = new InvoiceLine();
                        foreach ($line as $key => $value) {
                            $setter = 'set' . ucfirst($key);
                            $invoiceLine->$setter($value);
                        }
                        $lines[] = $invoiceLine;
                    }
                    $this->$method($lines);
                } elseif ($method == 'setTaxes') {
                    $taxes = [];
                    foreach ($value as $tax) {
                        $taxLine = new Tax();
                        foreach ($tax as $key => $value) {
                            $setter = 'set' . ucfirst($key);
                            $taxLine->$setter($value);
                        }
                        $taxes[] = $taxLine;
                    }
                    $this->$method($taxes);
                } elseif ($method == 'setPaymentTerms') {
                    $paymentTerms = [];
                    foreach ($value as $term) {
                        $termLine = new PaymentTerm();
                        foreach ($term as $key => $value) {
                            $setter = 'set' . ucfirst($key);
                            $termLine->$setter($value);
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
