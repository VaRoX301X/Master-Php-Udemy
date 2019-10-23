SELECT titulo FROM entradas GROUP BY categoria_id;

SELECT COUNT(titulo) AS "NUMERO ENTRADAS" ,categoria_id
    FROM entradas GROUP BY categoria_id