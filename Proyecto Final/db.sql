
CREATE TABLE usuarios(
    usuario text not null,
    contrasena varchar(25) not null,
    id int(11) not null auto_increment,
    PRIMARY KEY (id)
) ENGINE = InnoDB;
