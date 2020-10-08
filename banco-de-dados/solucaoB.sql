SELECT estado.nome_estado, pais.nome_pais FROM estado
	INNER JOIN pais ON pais.id = estado.id_pais;