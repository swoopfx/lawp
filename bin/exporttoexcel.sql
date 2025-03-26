

SET @filee = CONCAT((LEFT(UUID(), 8)), '.csv');


SELECT * FROM consolidated_orders 
INTO OUTFILE  '/tmp/consolidated_orders.csv'
CHARACTER SET utf8mb4 
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' 
ESCAPED BY '' LINES TERMINATED BY '\r\n';

-- SELECT u.fullname, u.email INTO OUTFILE '~\user_all.csv' FIELDS TERMINATED BY ',' 
-- OPTIONALLY ENCLOSED BY '"' ESCAPED BY '\\' LINES TERMINATED
-- BY '\n' FROM user AS u ;