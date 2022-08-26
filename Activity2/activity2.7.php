<?php
//Create a class called Invoice that a hardware store might use to represent an invoice for an item sold at the store.
//An Invoice should include four pieces of information as instance variables—a part number,
//a part description, a quantity of the item being purchased, and a price per item.
//Your class should have a constructor that initializes the four instance variables.
//Provide a set and a get method for each instance variable.
//In addition, provide a method named getInvoiceAmount that calculates
//the invoice amount (i.e., multiplies the quantity by the price per item),
//then returns the amount. If the quantity is not positive, it should be set to 0.
//If the price per item is not positive, it should be set to 0.0.
//Writea test application named InvoiceTest that demonstrates class Invoice’s capabilities.

class Invoice
{
    private $part_number, $part_description, $part_quantity, $part_price;

    function __construct()
    {
        $this->part_number = 0;
        $this->part_description = '';
        $this->part_quantity = 0;
        $this->part_price = 0;
    }

    public function setPartNumber($part_number)
    {
        $this->part_number = $part_number;
    }

    public function getPartNumber()
    {
        return $this->part_number;
    }

    public function setPartDescription($part_description)
    {
        $this->part_description = $part_description;
    }

    public function getPartDescription()
    {
        return $this->part_description;
    }

    public function setPartQuantity($part_quantity)
    {   
        if($part_quantity < 0) {
            $this->part_quantity = 0;    
        } else {
            $this->part_quantity = $part_quantity;
        }
    }

    public function getPartQuantity()
    {
        return $this->part_quantity;
    }

    public function setPartPrice($part_price)
    {   
        if($part_price < 0) {
            $this->part_price = 0;    
        } else {
            $this->part_price = $part_price;
        }
    }

    public function getPartPrice()
    {
        return $this->part_price;
    }

    public function getInvoiceAmount()
    {
        return $this->part_quantity * $this->part_price;
    }
}

$invoice = new Invoice();
$invoice->setPartNumber(1);
$invoice->setPartDescription('Test Description');
$invoice->setPartQuantity(7);
$invoice->setPartPrice(100);

echo "Total Amount:".$invoice->getInvoiceAmount();

?>