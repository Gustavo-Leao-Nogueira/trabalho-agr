



DELIMITER //
CREATE TRIGGER gerarRecibo AFTER INSERT ON placa
FOR EACH ROW
BEGIN

    declare area float;
    declare custo_material float;
    declare aux float;
    declare custo_desenho float;
    declare valor_placa float;
    declare sinal float;

    set @area = new.altura * new.largura;
    set @custo_material = @area * 147.30;
    set @aux =  length(new.frase);
    set @custo_desenho = @aux * 0.32;
    set @valor_placa = @custo_material + @custo_desenho;
    set @sinal = ROUND(RAND(), 2);

    INSERT INTO recibo(id, data_entrega, valor_placa, valor_sinal, id_placa)
        VALUES(null, new.data_entrega, (SELECT @valor_placa), (SELECT @sinal), new.id);
END //
DELIMITER ;