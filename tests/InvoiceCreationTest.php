<?php

require 'src/Invoice.php';

class InvoiceCreationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_creates_an_invoice_for_a_collection_of_chosen_products()
    {
        $details = [['qty' => 2, 'unit_price' => 20000],['qty' => 1, 'unit_price' => 10000]];
        $invoice = Invoice::createFromDetails($details);
        $this->assertEquals(10000 + (2*20000), $invoice->total_price);
        $this->assertEquals(3, $invoice->total_qty);
    }
}
