<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="consolidated_orders")
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
     * @ORM\Column(name="customer_name, type="string", length=255, nullable=true)
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
     * @ORM\Column(name="product_name, type="string", length=255, nullable=true)
     * @var string
     */
    private $productName;

    /**
     * The product SKU
     * @ORM\Column(name="sku, type="string", length=100, nullable=false)
     * @var string
     */
    private $sku;

    /**
     * The quantity of the product ordered
     * @ORM\Column(name="quantity", type="integer", nullable=false)
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

    //     customer_id bigint
    // customer_name varchar(255)
    // customer_email varchar(255)
    // product_id bigint
    // product_name varchar(255)
    // sku varchar(100)
    // quantity int
    // item_price decimal(10,2)
    // line_total decimal(10,2)
    // order_date datetime
    // order_status varchar(50)
    // order_total decimal(10,2)
    // created_at datetime
    // updated_at datetime
}
