#modificar la comision de los vendedores y ponerla al 2% cuando ganan mas de 50k#

UPDATE vendedor SET comision = 2 where sueldo > 50000;

#incrementar el precio de los coches en un 2%#
UPDATE coches SET precio = (precio*1.02);

#sacar todos los vendedores cuya fecha de alta sea posterior al 1 de julio de 2018#