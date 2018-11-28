CREATE TABLE pagamento (
  id_pagamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_pagamento VARCHAR(255) NULL,
  PRIMARY KEY(id_pagamento)
);

CREATE TABLE sabor (
  id_sabor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tipo_id_tipo INTEGER UNSIGNED NOT NULL,
  nome_sabor VARCHAR(255) NULL,
  preco_sabor FLOAT NULL,
  PRIMARY KEY(id_sabor, tipo_id_tipo),
  INDEX sabor_FKIndex1(tipo_id_tipo)
);

CREATE TABLE tipo (
  id_tipo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_tipo VARCHAR(255) NULL,
  PRIMARY KEY(id_tipo)
);

CREATE TABLE venda (
  id_venda INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  pagamento_id_pagamento INTEGER UNSIGNED NOT NULL,
  sabor_tipo_id_tipo INTEGER UNSIGNED NOT NULL,
  sabor_id_sabor INTEGER UNSIGNED NOT NULL,
  hora_venda DATETIME NULL,
  PRIMARY KEY(id_venda),
  INDEX venda_FKIndex1(sabor_id_sabor, sabor_tipo_id_tipo),
  INDEX venda_FKIndex2(pagamento_id_pagamento)
);


