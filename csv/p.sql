UPDATE `purchase` SET 'Date' = '2020-01-01' WHERE `purchase`.`SNo` = 1;
UPDATE `purchase` SET 'Date' = '2020-01-02' WHERE `purchase`.`SNo` = 2;
UPDATE `purchase` SET 'Date' = '2020-01-03' WHERE `purchase`.`SNo` = 3;
UPDATE `purchase` SET 'Date' = '2020-01-04' WHERE `purchase`.`SNo` = 4;
UPDATE `purchase` SET 'Date' = '2020-01-05' WHERE `purchase`.`SNo` = 5;
UPDATE `purchase` SET 'Date' = '2020-01-06' WHERE `purchase`.`SNo` = 6;
UPDATE `purchase` SET 'Date' = '2020-01-07' WHERE `purchase`.`SNo` = 7;
UPDATE `purchase` SET 'Date' = '2020-01-08' WHERE `purchase`.`SNo` = 8;
UPDATE `purchase` SET 'Date' = '2020-01-09' WHERE `purchase`.`SNo` = 9;
UPDATE `purchase` SET 'Date' = '2020-01-10' WHERE `purchase`.`SNo` = 10;
UPDATE `purchase` SET 'Date' = '2020-01-11' WHERE `purchase`.`SNo` = 11;
UPDATE `purchase` SET 'Date' = '2020-01-12' WHERE `purchase`.`SNo` = 12;
UPDATE `purchase` SET 'Date' = '2020-01-13' WHERE `purchase`.`SNo` = 13;
UPDATE `purchase` SET 'Date' = '2020-01-14' WHERE `purchase`.`SNo` = 14;
UPDATE `purchase` SET 'Date' = '2020-01-15' WHERE `purchase`.`SNo` = 15;
UPDATE `purchase` SET 'Date' = '2020-01-16' WHERE `purchase`.`SNo` = 16;
UPDATE `purchase` SET 'Date' = '2020-01-17' WHERE `purchase`.`SNo` = 17;
UPDATE `purchase` SET 'Date' = '2020-01-18' WHERE `purchase`.`SNo` = 18;
UPDATE `purchase` SET 'Date' = '2020-01-19' WHERE `purchase`.`SNo` = 19;
UPDATE `purchase` SET 'Date' = '2020-01-20' WHERE `purchase`.`SNo` = 20;
UPDATE `purchase` SET 'Date' = '2020-01-21' WHERE `purchase`.`SNo` = 21;
UPDATE `purchase` SET 'Date' = '2020-01-22' WHERE `purchase`.`SNo` = 22;
UPDATE `purchase` SET 'Date' = '2020-01-23' WHERE `purchase`.`SNo` = 23;
UPDATE `purchase` SET 'Date' = '2020-01-24' WHERE `purchase`.`SNo` = 24;
UPDATE `purchase` SET 'Date' = '2020-01-25' WHERE `purchase`.`SNo` = 25;
UPDATE `purchase` SET 'Date' = '2020-01-26' WHERE `purchase`.`SNo` = 26;
UPDATE `purchase` SET 'Date' = '2020-01-27' WHERE `purchase`.`SNo` = 27;
UPDATE `purchase` SET 'Date' = '2020-01-28' WHERE `purchase`.`SNo` = 28;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 8;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 9;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 10;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 11;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 12;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 13;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 14;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 15;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 16;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 17;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 18;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 19;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 20;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 21;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 22;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 23;
DELETE FROM `purchase` WHERE `purchase`.`SNO` = 24;
UPDATE `sales` SET `Date` = '2020-10-20' WHERE `sales`.`SNo` = 9;
UPDATE `sales` SET `Date` = '2020-10-20' WHERE `sales`.`SNo` = 10;


update table1 
   set table1.Price = table2.price 
 where table1.id = table2.id
   and table1.item = table2.item.