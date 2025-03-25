drop procedure if exists InsertSampleData;
DELIMITER $$

CREATE PROCEDURE InsertSampleData()

BEGIN

DECLARE counters INT DEFAULT FLOOR(RAND()*(30-2+1)+2);
DECLARE customerid INT DEFAULT 1;
-- DECLARE customername STRING DEFAULT CONCAT('customer', counters);
-- DECLARE customeremail STRING DEFAULT CONCAT('customer', counters);
DECLARE productid INT DEFAULT 1;
-- DECLARE 

WHILE counters <= 10000 DO

  SET customerid = FLOOR(RAND()*(40-2+1)+2);
  SET productid =  FLOOR(RAND()*(20-2+1)+2);
  
  INSERT INTO consolidated_orders (
    order_id, 
    customer_id, 
    customer_name,
    customer_email,
    product_id,
    product_name,
    sku,
    quantity,
    item_price,
    line_total,
    order_date,
    order_status,
    order_total,
    created_at,
    updated_at) VALUES(
        ROUND(counters + 3000),
        customerid,
        CONCAT('customer_', customerid),
        CONCAT('email', customerid, '@abc.com'),
        productid,
        CONCAT('product_', productid),
        UUID(),
        FLOOR(RAND()*(10-2+1)+2),
        300.00,
        400.00,
        DATE_ADD('2025-03-05', INTERVAL(counters % 365) DAY),
        'INITIATED',
        FLOOR(RAND()*(10-2+1)+2),
        DATE_ADD('2024-08-09', INTERVAL(counters % 365) DAY),
        DATE_ADD('2024-08-09', INTERVAL(counters % 365) DAY)
    );

    SET counters = counters + 2;

END WHILE;

END $$

DELIMITER ;

CALL InsertSampleData();

DROP PROCEDURE InsertSampleData;