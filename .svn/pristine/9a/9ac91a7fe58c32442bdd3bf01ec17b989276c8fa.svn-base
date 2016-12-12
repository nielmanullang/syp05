--Nama	:	Daniel Manullang
--NIM	:	11314061
--Kelas	:	32TI2

CREATE TABLE product
( 
prod_nr int NOT NULL CONSTRAINT pk_product PRIMARY KEY (prod_nr),
name varchar(30) NOT NULL,
price money NOT NULL,
type varchar(30) NOT NULL
)

INSERT product (prod_nr, name, price, type) VALUES (1, 'tv', 500, 'electronics')
INSERT product (prod_nr, name, price, type) VALUES (2, 'radio', 100, 'electronics')
INSERT product (prod_nr, name, price, type) VALUES (3, 'ball', 100, 'sport')

--Exercise 1
--Create a function with an input parameter the name of the product. Based on this input, the function should return or print a message like this: ‘There are (the name of the product) in stock’ or ‘There are no (the name of the product) in stock’.
CREATE FUNCTION exercise1 (@nama_barang varchar(20))
RETURNS varchar(100)
AS
BEGIN
Declare @message varchar(100)
IF EXISTS (SELECT prod_nr FROM product WHERE name=@nama_barang)
SET @message = 'There are ' + @nama_barang + ' in stock'
ELSE
	SET @message = 'There is no ' + @nama_barang + ' in stock'
	RETURN @message
END

select dbo.exercise1('tv')
drop function exercise1

--Exercise 2
--Create a function with a numeric input parameter. Based on this input, the function should return or print a message like this: ‘the average price of sport products is greater than/less than (the value of the input)’ when that is the case in the database.
CREATE FUNCTION exercise2(@value int)
	RETURNS VARCHAR(500)
AS
BEGIN
	DECLARE @count int
	DECLARE  @total int
	DECLARE  @jlhbaris int
	DECLARE  @average int
	SET @count = 1
	SET @total = 0
	SELECT @jlhbaris = COUNT(*) 
	FROM product
	WHILE(@count <= @jlhbaris)
		BEGIN
			SELECT @total = @total + Price 
			FROM product
			SET @count = @count +1
		END
	SET @average = @total / @count
	IF(@average < @value)
		BEGIN
			RETURN 'the average price of electronic products is less than'+cast(@value as char(100));
		END
			RETURN 'the average price of electronic products is greater than'+cast(@value as char(100));
END

SELECT dbo.exercise2(500);

--Exercise 3
--Create a function to update the price of all records in table product by 10% until the average price is greater than 500 (500 is defined by user through an input parameter).


--Exercise 4
--Create a function CheckModulo11, that checks if a given accountNr is a valid number
--ex. 972428577 is valid, because:
--(9*9 + 8*7 + 7*2 + 6*4 + 5*2 + 4*8 + 3*5 + 2*7 + 1*7) % 11 = 0
--Use this function in a check clause in a table with a column that represents an accountNr.
--(You need to create a table to store the accountNr by adding constraint and try to insert data into this table).
CREATE FUNCTION CheckModulo11(@accountNr INT)
	RETURNS varchar(100)
	AS
	BEGIN
		DECLARE @result varchar(100)
		DECLARE @length INT
		DECLARE @lengthNew INT
		DECLARE @i INT
		DECLARE @jumlah INT
	
		SET @length = LEN(CONVERT(varchar(50),LEN(@accountNr),101))
		SET @lengthNew = LEN(CONVERT(varchar(50),LEN(@accountNr),101))
		SET @jumlah = 0
		SET @i = 0

		WHILE(@i < @length)
		BEGIN
			SET @jumlah = @jumlah + (@lengthNew * CONVERT(INT,SUBSTRING(CONVERT(varchar(50),@accountNr,101),@i,1),101))
			SET @i = @i + 1
			SET @lengthNew = @lengthNew - 1
		

			if((@jumlah % 11) = 0)
				SET @result = 'TRUE'
			ELSE
				SET @result = 'FALSE'
		END
	
		return @result
	END

	PRINT dbo.CheckModulo11(972428577)

--Exercise 5
CREATE FUNCTION fnTableSundays (@dateFrom DATETIME, @dateTo DATETIME)
RETURNS @tblSunday TABLE (nummer SMALLINT, date DATETIME)
AS
BEGIN
	DECLARE @i int
	SET @i = 1
	while(@dateFrom < @dateTo)
	begin
		INSERT @tblSunday
		(nummer, date)
		SELECT @i, @dateFrom
		WHERE DATENAME(dw,@dateFrom) IN ('Sunday')
		SET @dateFrom = DATEADD(day, 1, @dateFrom)
		
		if EXISTS(SELECT * FROM @tblSunday WHERE nummer = @i)
			SET @i = @i + 1
	end
	RETURN
END

SELECT * FROM dbo.fnTableSundays('2008-03-08', '2008-05-09')

DROP FUNCTION fnUpdatePrice
CREATE FUNCTION fnUpdatePrice(@input INT)
RETURNS @productTable TABLE (prod_nr int, name varchar(30), price money, type varchar(30))
AS
BEGIN
	DECLARE @avgPrice int
	DECLARE @rownum int
	DECLARE @inc int
	DECLARE @price money
	
	INSERT @productTable
	(prod_nr, name, price, type)
	SELECT prod_nr, name, price, type FROM product
		
	SET @avgPrice = (SELECT avg(price) from @productTable)
	
	while(@avgPrice < @input)
	BEGIN
		set @rownum= (select COUNT(*) from @productTable)
		SET @inc = 0
		SET @price = (select top 1 price from @productTable)
	
		while (@inc < @rownum)
		begin
			set @inc=@inc+1
			-- UPDATE product SET price = @price + ((5*@price)/100) WHERE price = @price
			UPDATE @productTable SET price = @price + ((5*@price)/100) WHERE price = @price
			
			SET @price = (select top 1 price from @productTable)
		end
		
		SET @avgPrice = (SELECT avg(price) from @productTable)
	END

	RETURN
END