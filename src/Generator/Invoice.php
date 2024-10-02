<?php

namespace Structurize\Structurize\Generator;

class Invoice
{
    // Properties with type declarations
    private string $documentType = 'INVOICE';
    private string $reference = '';
    private ?float $extraCost = null;
    private ?string $dueDate = null;
    private float $totalVatExcl = 0;
    private ?string $dueDays = null;
    private ?float $balancePaid = null;
    private float $lineAmount = 0;
    private float $totalVatIncl = 0;
    private string $issueDate = '';
    private float $vatAmount = 0;
    private string $vatPercentage = '';
    private ?string $structuredReference = null;
    private string $customerName = '';
    private ?string $orderNumber = null;
    private string $invoiceNumber = '';
    private ?string $IBAN = null;
    private string $VAT = '';
    private ?string $supplierBIC = null;
    private object $customerAddress;
    private string $supplierVAT = '';

    private ?string $supplierName = null;
    private string $customerVAT = '';
    private string $supplierVATCountry = '';
    private string $customerVATCountry = '';
    private ?object $supplierAddress = null;
    private ?float $vatExcl = null;
    private ?float $balanceDue = null;

    private ?object $lines = null;

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

    // Extra Cost
    public function getExtraCost(): ?float
    {
        return $this->extraCost;
    }

    public function setExtraCost(?float $extraCost): void
    {
        $this->extraCost = $extraCost;
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

    // Balance Paid
    public function getBalancePaid(): ?float
    {
        return $this->balancePaid;
    }

    public function setBalancePaid(?float $balancePaid): void
    {
        $this->balancePaid = $balancePaid;
    }

    // Line Amount
    public function getLineAmount(): float
    {
        return $this->lineAmount;
    }

    public function setLineAmount(?float $lineAmount): void
    {
        $this->lineAmount = $lineAmount;
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
    public function getVatPercentage(): string
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage(string $vatPercentage): void
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

    // Order Number
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
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
    public function getIBAN(): string
    {
        return $this->IBAN;
    }

    public function setIBAN(?string $IBAN): void
    {
        $this->IBAN = $IBAN;
    }

    // VAT
    public function getVAT(): string
    {
        return $this->VAT;
    }

    public function setVAT(string $VAT): void
    {
        $this->VAT = $VAT;
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

    // Customer Address
    public function getCustomerAddress(): object
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress(object $customerAddress): void
    {
        $this->customerAddress = $customerAddress;
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

    // Supplier VAT Country
    public function getSupplierVATCountry(): string
    {
        return $this->supplierVATCountry;
    }

    public function setSupplierVATCountry(string $supplierVATCountry): void
    {
        $this->supplierVATCountry = $supplierVATCountry;
    }

    // Customer VAT Country
    public function getCustomerVATCountry(): string
    {
        return $this->customerVATCountry;
    }

    public function setCustomerVATCountry(string $customerVATCountry): void
    {
        $this->customerVATCountry = $customerVATCountry;
    }

    // Supplier Address
    public function getSupplierAddress(): ?object
    {
        return $this->supplierAddress;
    }

    public function setSupplierAddress(?object $supplierAddress): void
    {
        $this->supplierAddress = $supplierAddress;
    }

    // VAT Excl
    public function getVatExcl(): ?float
    {
        return $this->vatExcl;
    }

    public function setVatExcl(?float $vatExcl): void
    {
        $this->vatExcl = $vatExcl;
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

    // Balance Due
    public function getBalanceDue(): ?float
    {
        return $this->balanceDue;
    }

    public function setBalanceDue(?float $balanceDue): void
    {
        $this->balanceDue = $balanceDue;
    }


    // Lines

    /**
     * @return GenericInvoiceLine[]
     */
    public function getLines(): array
    {
        return (array)$this->lines;
    }

    public function setLines(?object $lines): void
    {
        $this->lines = $lines;
    }

    // Method to convert object to JSON
    public function __toString(): string
    {
        $vars = get_object_vars($this);

        $lines = [];
        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                foreach ($value as $k => $v) {
                    if (is_object($v) && get_class($v) == 'Structurize\Structurize\Generator\InvoiceLine') {
                        $lines[$k] = json_decode($v->__toString());
                    }
                }
            }
        }
        $vars['lines'] = $lines;
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
                        //$invoiceLine->fromJson(json_encode($line));
                        foreach ($line as $key => $value) {
                            $setter = 'set' . ucfirst($key);
                            $invoiceLine->$setter($value);
                        }
                        $lines[] = $invoiceLine;
                    }
                    $this->$method((object)($lines));
                } else {
                    $this->$method($value);
                }


            }
        }


    }


}
