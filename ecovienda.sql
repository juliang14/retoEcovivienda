/* ********** CREACION DEL SCHEMA ********** */
drop database ecovienda;
create database ecovienda;
use ecovienda;

create table Tipo_documento(
Id_documento 						int 		 auto_increment not null,
Siglas 								varchar (10) not null,
Nombre_tipo_documento 				varchar (50) not null,
primary key (ID_documento)
);

create table Usuario(
Id_usuario 							int 		 auto_increment not null,
Primer_nombre 						varchar (40) not null,
Segundo_nombre 						varchar (40) 	 null,
Primer_apellido 					varchar (40) not null,
Segundo_apellido 					varchar (40) 	 null,
Tipo_documentoId_documento			int 		 not null,
Numero_documento					varchar (20) not null,
Edad								int 		 not null,
Telefono							bigint 		 not null,
Direccion							varchar (50) not null,
Email 								varchar (50) not null unique,
password							varchar (50) not null ,
estado								varchar (20) not null ,
RolId_rol 							int 		 not null,
primary key (Id_usuario)
);

create table Rol(
Id_rol 								int 		 auto_increment not null,
Nombre_rol 							varchar (25) not null,
primary key (Id_rol)
);

create table send_mail(
Id_mail 		int 		 auto_increment not null,
Enviado_a		varchar (100) not null,
Link			varchar (1000) not null,
Estado 			varchar (50) not null,
fecha_envio		datetime not null,
fecha_vencido	datetime,
primary key (Id_mail)
);

create table project_video(
Id_project_video 	int 		 auto_increment not null,
nombre_video		varchar (100) not null,
imagen_video		varchar (1000) not null,
link_video 			varchar (50) not null,
fecha_registro		datetime not null,
primary key (Id_project_video)
);

ALTER TABLE usuario
ADD FOREIGN KEY (Rolid_Rol)
REFERENCES Rol(Id_rol);

ALTER TABLE usuario
ADD FOREIGN KEY (Tipo_documentoId_documento)
REFERENCES Tipo_documento(Id_documento);

ALTER TABLE usuario 
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Id_usuario`,`Tipo_documentoId_documento`);
;

insert into Tipo_documento
(Id_documento, Siglas, Nombre_tipo_documento)
values
(1, 'CC',  'Cedula_de_ciudadania'),
(2, 'CE',  'Cedula_de_extranjeria'),
(3, 'NIT', 'Numero_de_Identificación_Tributaria');

insert into Rol
(Id_rol, Nombre_rol)
values 
(1, 'Cliente'),
(2, 'Administrador');

insert into Usuario
(Id_usuario, Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Tipo_documentoId_documento, Numero_documento, Edad, Telefono, Direccion, Email, password, estado, RolId_rol)
values
(1,  'Julian',	'Stiven',		'Gomez',		'Avila',	1,	'1015452884',	27,	3108023148, 'Carrera 94 d # 00 - 00',	'jstivengomez@ucompensar.edu.co', 			'julian',	'activo',	1),
(2,  'Diego', 	'Alejandro',	'Santamaria',	'Ospina', 	1, 	'1000000000', 	20, 1023856989, 'Calle 56 #56-8', 			'dalejandrosantamaria@ucompensar.edu.co', 	'diego',	'activo',	1),
(3,  'Oscar', 	'', 			'Vanegas', 		'', 		1, 	'2000000000', 	29, 3198745289, 'Carrera 15 #56-7', 		'oscar@gmail.com', 							'oscar',	'activo',	1);

insert into project_video
(nombre_video, imagen_video, link_video, fecha_registro)
values
('Video 1', 'imagen1.jpg', 'MVI_9815.mp4', sysdate()),
('Video 2', 'imagen2.jpg', 'MVI_9816.mp4', sysdate()),
('Video 3', 'imagen3.jpg', 'MVI_9817.mp4', sysdate()),
('Video 4', 'imagen4.jpg', 'MVI_9818.mp4', sysdate()),
('Video 5', 'imagen5.jpg', 'MVI_9819.mp4', sysdate()),
('Video 6', 'imagen6.jpg', 'MVI_9820.mp4', sysdate()),
('Video 7', 'imagen7.jpg', 'MVI_9821.mp4', sysdate()),
('Video 8', 'imagen8.jpg', 'MVI_9822.mp4', sysdate()),
('Video 9', 'imagen9.jpg', 'MVI_9823.mp4', sysdate()),
('Video 10', 'imagen10.jpg', 'MVI_9824.mp4', sysdate()),
('Video 11', 'imagen11.jpg', 'MVI_9826.mp4', sysdate()),
('Video 12', 'imagen12.jpg', 'MVI_9827.mp4', sysdate()),
('Video 13', 'imagen13.jpg', 'MVI_9829.mp4', sysdate()),
('Video 14', 'imagen14.jpg', 'MVI_9830.mp4', sysdate()),
('Video 15', 'imagen15.jpg', 'MVI_9835.mp4', sysdate()),
('Video 16', 'imagen16.jpg', 'MVI_9836.mp4', sysdate()),
('Video 17', 'imagen17.jpg', 'MVI_9837.mp4', sysdate()),
('Video 18', 'imagen18.jpg', 'MVI_9839.mp4', sysdate()),
('Video 19', 'imagen19.jpg', 'MVI_9840.mp4', sysdate()),
('Video 20', 'imagen20.jpg', 'MVI_9841.mp4', sysdate()),
('Video 21', 'imagen21.jpg', 'MVI_9842.mp4', sysdate()),
('Video 22', 'imagen22.jpg', 'MVI_9843.mp4', sysdate()),
('Video 23', 'imagen23.jpg', 'MVI_9845.mp4', sysdate()),
('Video 24', 'imagen24.jpg', 'MVI_9846.mp4', sysdate()),
('Video 25', 'imagen25.jpg', 'MVI_9847.mp4', sysdate()),
('Video 26', 'imagen26.jpg', 'MVI_9849.mp4', sysdate()),
('Video 27', 'imagen27.jpg', 'MVI_9850.mp4', sysdate()),
('Video 28', 'imagen28.jpg', 'MVI_9853.mp4', sysdate()),
('Video 29', 'imagen29.jpg', 'MVI_9854.mp4', sysdate()),
('Video 30', 'imagen30.jpg', 'MVI_9855.mp4', sysdate()),
('Video 31', 'imagen31.jpg', 'MVI_9856.mp4', sysdate()),
('Video 32', 'imagen32.jpg', 'MVI_9857.mp4', sysdate()),
('Video 33', 'imagen33.jpg', 'MVI_9860.mp4', sysdate()),
('Video 34', 'imagen34.jpg', 'MVI_9861.mp4', sysdate());

CREATE VIEW VW_GET_VIDEO(
Id_project_video,
nombre_video,
imagen_video,
link_video,
fecha_registro
)AS
SELECT * FROM project_video WHERE Id_project_video > 0 ORDER BY 1;

DELIMITER &
CREATE PROCEDURE PR_OBTENER_USUARIO_SISTEMA( 
	  P_TIPO_LOGIN	VARCHAR (30)
    , P_TIPO_DOCUMENTO 		VARCHAR (2)
    , P_USUARIO 		VARCHAR (100)
    , P_CLAVE 			VARCHAR (40)

)

BEGIN
    -- Declarar variables
    DECLARE V_TIPO_LOGIN 					VARCHAR (50) DEFAULT UPPER(P_TIPO_LOGIN);
    DECLARE V_ISCORREO		 				INT;
	
    select locate('@',P_USUARIO) INTO V_ISCORREO;
    IF V_ISCORREO >0 AND V_TIPO_LOGIN = 'EMAIL' THEN
		SELECT 
			A.ID_USUARIO AS ID
			,concat(A.PRIMER_NOMBRE, ' ', A.SEGUNDO_NOMBRE, ' ', A.PRIMER_APELLIDO, ' ', A.SEGUNDO_APELLIDO) AS NOMBRE
			,A.PRIMER_NOMBRE
            ,A.PRIMER_APELLIDO
            ,B.SIGLAS AS TIPO_DOCUMENTO
			,A.NUMERO_DOCUMENTO
			,A.EDAD
			,A.TELEFONO
			,A.DIRECCION
			,A.EMAIL
            ,C.NOMBRE_ROL AS ROL
			FROM USUARIO A
			INNER JOIN TIPO_DOCUMENTO B ON A.Tipo_documentoId_documento = B.Id_documento
            INNER JOIN ROL C ON C.ID_ROL = A.ROLID_ROL
			WHERE UPPER(A.EMAIL) = UPPER(P_USUARIO) AND A.password = P_CLAVE AND A.ESTADO = 'activo';
    ELSEIF V_TIPO_LOGIN = 'CEDULA' THEN
		SELECT 
			A.ID_USUARIO AS ID
			,concat(A.PRIMER_NOMBRE, ' ', A.SEGUNDO_NOMBRE, ' ', A.PRIMER_APELLIDO, ' ', A.SEGUNDO_APELLIDO) AS NOMBRE
			,A.PRIMER_NOMBRE
            ,A.PRIMER_APELLIDO
            ,B.SIGLAS AS TIPO_DOCUMENTO
			,A.NUMERO_DOCUMENTO
			,A.EDAD
			,A.TELEFONO
			,A.DIRECCION
			,A.EMAIL
            ,C.NOMBRE_ROL AS ROL
			FROM USUARIO A
			INNER JOIN TIPO_DOCUMENTO B ON A.Tipo_documentoId_documento = B.Id_documento
            INNER JOIN ROL C ON C.ID_ROL = A.ROLID_ROL
			WHERE B.SIGLAS = P_TIPO_DOCUMENTO AND A.NUMERO_DOCUMENTO = P_USUARIO AND password = P_CLAVE AND ESTADO = 'activo';
    END IF;
    
END &

DELIMITER &
CREATE PROCEDURE PR_GET_MAIL_USER( 
	  P_EMAIL	VARCHAR (50)
)

BEGIN
    -- Declarar variables
    DECLARE V_ISCORREO		 				INT;
	
    select locate('@',P_EMAIL) INTO V_ISCORREO;
    IF V_ISCORREO >0 THEN
		SELECT 
			A.ID_USUARIO AS ID
			,concat(A.PRIMER_NOMBRE, ' ', A.SEGUNDO_NOMBRE, ' ', A.PRIMER_APELLIDO, ' ', A.SEGUNDO_APELLIDO) AS NOMBRE
			,B.SIGLAS AS TIPO_DOCUMENTO
			,A.NUMERO_DOCUMENTO
			,A.EDAD
			,A.TELEFONO
			,A.DIRECCION
			,A.EMAIL
			FROM USUARIO A
			INNER JOIN TIPO_DOCUMENTO B ON A.Tipo_documentoId_documento = B.Id_documento
			WHERE UPPER(A.EMAIL) = UPPER(P_EMAIL) AND A.ESTADO = 'activo';
    ELSE 
		SELECT 'valida la informacion' from dual;
    END IF;
    
END &

DELIMITER &
CREATE PROCEDURE PR_MANNAGE_SEND_MAIL( 
	  P_ACCION	VARCHAR (30),
      P_EMAIL	VARCHAR (100),
      P_LINK	VARCHAR (1000)
)

BEGIN
    -- Declarar variables
    DECLARE V_ISCORREO		 	INT;
    DECLARE V_CANTIDAD_ENVIOS	INT;
    DECLARE V_ULTIMO_ENVIO		INT;
	
    select locate('@',P_EMAIL) INTO V_ISCORREO;
    IF V_ISCORREO >0 THEN
		IF P_ACCION = 'ENVIAR' THEN
			SELECT COUNT(*) INTO V_CANTIDAD_ENVIOS FROM SEND_MAIL WHERE UPPER(ENVIADO_A) =  UPPER(P_EMAIL);
            IF V_CANTIDAD_ENVIOS > 0 THEN
				SELECT MAX(ID_MAIL) INTO V_ULTIMO_ENVIO FROM SEND_MAIL WHERE UPPER(ENVIADO_A) =  UPPER(P_EMAIL);
				UPDATE SEND_MAIL SET ESTADO ='EXPIRADO', FECHA_VENCIDO = SYSDATE() WHERE ID_MAIL =  V_ULTIMO_ENVIO;
            END IF;
            
			INSERT INTO SEND_MAIL(Enviado_a, Link, Estado, fecha_envio)
			VALUES(UPPER(P_EMAIL), P_LINK, 'ENVIADO', SYSDATE());
			COMMIT;
            
        ELSEIF P_ACCION = 'VALIDAR' THEN
			SELECT * FROM SEND_MAIL WHERE UPPER(ENVIADO_A) = UPPER(P_EMAIL) AND LINK = P_LINK;
        ELSEIF P_ACCION = 'EXPIRAR' THEN
			UPDATE SEND_MAIL SET ESTADO ='EXPIRADO', FECHA_VENCIDO = SYSDATE() WHERE UPPER(ENVIADO_A) = UPPER(P_EMAIL) AND LINK = P_LINK;
            COMMIT;
		ELSE
			SELECT 'Accion no valida' from dual;
        END IF;
    ELSE 
		SELECT 'Valida la informacion' from dual;
    END IF;
    
END &

DELIMITER &
CREATE PROCEDURE PR_CHANGE_PASSWORD( 
      P_EMAIL		VARCHAR (100),
      P_PASSWORD	VARCHAR (50)
)

BEGIN
    -- Declarar variables
    DECLARE V_ISCORREO		 	INT;
	
    select locate('@',P_EMAIL) INTO V_ISCORREO;
    IF V_ISCORREO >0 THEN
		SET SQL_SAFE_UPDATES = 0;
		UPDATE USUARIO SET password = P_PASSWORD 
        WHERE UPPER(Email) = UPPER(P_EMAIL);
        COMMIT;
    ELSE 
		SELECT 'Valida la informacion' from dual;
    END IF;
    
END &