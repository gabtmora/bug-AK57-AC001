create table PERSONA (
	id_persona int identity (1,1) not null primary key,
	cedula varchar(10) not null,
	nombre varchar(25) not null,
	apellidos varchar(25) not null,
	edad int,
	telefono varchar(25) null,
	genero char (1),
	email varchar(100) not null,
	direccion varchar(100) null,
	fecha_crea datetime,
	estado char(1)
)


create table USUARIO (
	id_usuario int identity (1,1) not null primary key,
	id_persona int not null,
	usuario varchar(11) not null,
	clave varchar(25) not null,
	fecha_registro datetime,
	estado char(1),
	constraint fk_usuario_persona foreign key (id_persona) references PERSONA(id_persona),
)

create table PERFIL (
	id_perfil int identity (1,1) not null primary key,
	descripcion varchar(50) not null,
	estado char(1)
)

create table PERFIL_USUARIO (
	id_perfil int,
	id_usuario int,
	constraint fk_per_perfil foreign key (id_perfil) references PERFIL(id_perfil),
	constraint fk_user_usuario foreign key (id_usuario) references USUARIO(id_usuario)
)

create table MENU (
	orden int not null primary key,
	nombre varchar (30),
	teclado varchar (10),
	estado char(1)
)

create table PERFIL_MENU (
	id_perfil int,
	id_menu int,
	constraint fk_perfil_menu foreign key (id_perfil) references PERFIL(id_perfil),
	constraint fk_menu_perfil foreign key (id_menu) references MENU(orden)
)

create table CLIENTE (
	id_cliente int identity (1,1) primary key not null,
	RUC varchar(13),
	razon_social varchar (50),
	tipo_cliente varchar (11),
	direccion varchar(50),
	telefono varchar (25),
	estado char(1), 
	constraint CK_cliente_razonsocial check (tipo_cliente in ('EJECUTIVO','NORMAL'))
)

create table RESTAURANTE (
	id_restaurante int identity (1,1) primary key not null,
	nombre varchar(50),
	direccion varchar(50),
	observacion varchar (300),
	estado char(1)
)

create table PROMOCION (
	id_promocion int identity (1,1) primary key not null,
	id_restaurante int,
	descripcion varchar (300),
	tipo_cliente_aplica varchar (11),
	fecha_inicio datetime,
	fecha_fin datetime,
	costo varchar(5),
	descuento varchar(5),
	estado char(1)
 )
 
 create table PROMOCION_CLIENTE (
	id_promocion int,
	id_cliente int,
	valor varchar(5)
 )

 create table CONVENIO (
	id_convenio int identity (1,1) primary key not null,
	id_restaurante int,
	numero_contrato int,
	representante varchar (50),
	fecha_inicio datetime,
	fecha_fin datetime,
	estado char(1)
 )

create table PLATO(
	id_plato int identity (1,1) primary key not null,
	descripcion varchar(100),
	precio varchar(5),
	estado char(1)
	)

create table PEDIDO (
	id_pedido int identity (1,1) primary key not null,
	id_usuario int,
	id_cliente int,
	pedido_reserva char (1),
	descripción varchar (100),
	cantidad int,
	fecha datetime,
	estado char(1),
	constraint CK_pedido_reserva check (pedido_reserva in ('S','N')),
	constraint fk_pedido_usuario foreign key (id_usuario) references USUARIO(id_usuario),
	constraint fk_pedido_cliente foreign key (id_cliente) references CLIENTE(id_cliente)
)

create table DETALLE_PEDIDO (
	id_detalle int identity (1,1) primary key not null,
	id_plato int,
	id_pedido int,
	detalle varchar(100),
	constraint fk_pedido_plato foreign key (id_plato) references PLATO(id_plato),
	constraint fk_pedido_cabpedido foreign key (id_pedido) references PEDIDO(id_pedido)
)

create table MESA(
	id_mesa varchar(10) primary key not null,
	descripcion varchar(100),
	ubicación varchar(10),
	estado char(1)
)

create table RESERVA(
	id_reserva int identity (1,1) primary key not null,
	id_restaurante int,
	id_mesa varchar(10),
	id_pedido int,
	fecha datetime,
	tipoReserva varchar(10),
	descripcion varchar(100)
	constraint fk_reserva_restaurante foreign key (id_restaurante) references RESTAURANTE(id_restaurante),
	constraint fk_reserva_mesa foreign key (id_mesa) references MESA(id_mesa),
	constraint fk_reserva_pedido foreign key (id_pedido) references PEDIDO(id_pedido)
)

create table CAB_FACTURA(
	cod_factura int identity (1,1) primary key not null,
	num_factura varchar(17) not null,
	nombre_factura varchar(100),
	dir_factura varchar(100),
	fecha_factura datetime,
	id_pedido int,
	subtotal float,
	iva float,
	total float,
	observacion varchar(100),
	elaborado_por varchar(50),
	estado char(1),
	constraint fk_cab_fact_pedido foreign key (id_pedido) references PEDIDO(id_pedido)
)

create table DET_FACTURA(
	cod_factura int identity (1,1) primary key not null,
	item_factura int unique not null,
	detalle varchar (100),
	cantidad int,
	precio_unitario float,
	descuento float,
	subtotal float,
	aplica_iva char(1),
	iva float,
	estado char(1),
	fecha_crea datetime,
	porc_iva float
	constraint fk_det_cab foreign key (cod_factura) references CAB_FACTURA(cod_factura)
)