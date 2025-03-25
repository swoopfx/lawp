<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="consolidated_orders", indexes={@ORM\Index(name="identifiers", columns={"customer_id", "customer_email", "order_id", "sku", "product_id"})})
 */

class ConsolidatedOrder
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="bigint")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * ID of the order
     * @ORM\Column(name="order_id", type="bigint", nullable=true)
     * @var integer
     */
    private $orderId;



    /**
     * The Customer Identifier
     * @ORM\Column(name="customer_id", type="bigint", nullable=true)
     * @var integer
     */
    private $customerId;

    /**
     * The name of the customer
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=true)
     * @var string
     */
    private $customerName;

    /**
     * The email of the customer
     * @ORM\Column(name="customer_email", length=255, nullable=true, type="string")
     *
     * @var string
     */
    private $customerEmail;

    /**
     * The Product Identifier
     * @ORM\Column(name="product_id", type="bigint", nullable=true)
     * @var integer
     */
    private $productId;

    /**
     * The name of the product
     * @ORM\Column(name="product_name", type="string", length=255, nullable=true)
     * @var string
     */
    private $productName;

    /**
     * The product SKU
     * @ORM\Column(name="sku", type="string", length=100, nullable=false)
     * @var string
     */
    private $sku;

    /**
     * The quantity of the product ordered
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"default":0})
     * @var integer
     */
    private $quantity;

    /**
     * The price of the Item
     * @ORM\Column(name="item_price", type="decimal", precision=10, scale=2, nullable=false)
     * @var float
     */
    private $itemPrice;


    /**
     * The total of the product line
     * @ORM\Column(name="line_total", type="decimal", precision=10, scale=2, nullable=false)
     * @var float
     */
    private $lineTotal;

    /**
     * Undocumented variable
     * @ORM\Column(name="order_date", type="datetime", nullable=true)
     * @var \Datetime
     */
    private $orderDate;

    /**
     * @ORM\Column(name="order_status", type="string", nullable=false, options={"default":"Initiated"})
     * @var string
     */
    private $orderStatus;

    /**
     * The total of the product line
     * @ORM\Column(name="order_total", type="decimal", precision=10, scale=2, nullable=false)
     * @var float
     */
    private $orderTotal;

    /**
     * Undocumented variable
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     * @var \Datetime
     */
    private $createdAt;

    /**
     * Undocumented variable
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     * @var \Datetime
     */
    private $updatedAt;

    /**
     * Get @ORM\Column(name="id", type="bigint")
     *
     * @return  integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get iD of the order
     *
     * @return  integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set iD of the order
     *
     * @param  integer  $orderId  ID of the order
     *
     * @return  self
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get the Customer Identifier
     *
     * @return  integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the Customer Identifier
     *
     * @param  integer  $customerId  The Customer Identifier
     *
     * @return  self
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the name of the customer
     *
     * @return  string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set the name of the customer
     *
     * @param  string  $customerName  The name of the customer
     *
     * @return  self
     */
    public function setCustomerName(string $customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get the email of the customer
     *
     * @return  string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set the email of the customer
     *
     * @param  string  $customerEmail  The email of the customer
     *
     * @return  self
     */
    public function setCustomerEmail(string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get the Product Identifier
     *
     * @return  integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the Product Identifier
     *
     * @param  integer  $productId  The Product Identifier
     *
     * @return  self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the name of the product
     *
     * @return  string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the name of the product
     *
     * @param  string  $productName  The name of the product
     *
     * @return  self
     */
    public function setProductName(string $productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the product SKU
     *
     * @return  string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the product SKU
     *
     * @param  string  $sku  The product SKU
     *
     * @return  self
     */
    public function setSku(string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get the quantity of the product ordered
     *
     * @return  integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the quantity of the product ordered
     *
     * @param  integer  $quantity  The quantity of the product ordered
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the price of the Item
     *
     * @return  float
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Set the price of the Item
     *
     * @param  float  $itemPrice  The price of the Item
     *
     * @return  self
     */
    public function setItemPrice(float $itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Get the total of the product line
     *
     * @return  float
     */
    public function getLineTotal()
    {
        return $this->lineTotal;
    }

    /**
     * Set the total of the product line
     *
     * @param  float  $lineTotal  The total of the product line
     *
     * @return  self
     */
    public function setLineTotal(float $lineTotal)
    {
        $this->lineTotal = $lineTotal;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  \Datetime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set undocumented variable
     *
     * @param  \Datetime  $orderDate  Undocumented variable
     *
     * @return  self
     */
    public function setOrderDate(\Datetime $orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }


    /**
     * Get the value of orderStatus
     *
     * @return  string
     */ 
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set the value of orderStatus
     *
     * @param  string  $orderStatus
     *
     * @return  self
     */ 
    public function setOrderStatus(string $orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get the total of the product line
     *
     * @return  float
     */ 
    public function getOrderTotal()
    {
        return $this->orderTotal;
    }

    /**
     * Set the total of the product line
     *
     * @param  float  $orderTotal  The total of the product line
     *
     * @return  self
     */ 
    public function setOrderTotal(float $orderTotal)
    {
        $this->orderTotal = $orderTotal;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  \Datetime
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set undocumented variable
     *
     * @param  \Datetime  $createdAt  Undocumented variable
     *
     * @return  self
     */ 
    public function setCreatedAt(\Datetime $createdAt)
    {
        $this->createdAt = $createdAt;
        $this->updatedAt = $createdAt;
        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  \Datetime
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set undocumented variable
     *
     * @param  \Datetime  $updatedAt  Undocumented variable
     *
     * @return  self
     */ 
    public function setUpdatedAt(\Datetime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
