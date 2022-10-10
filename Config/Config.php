<?php 
	const BASE_URL = "http://localhost/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "MX";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AQlCcZlAKDIMfG4Uw8oMbUW0_PRldVV2ZN4txd2-iYnk08Kq6nj1HOzwH-gTDCN6V7GFOFoacA-AKKFK";
	const SECRET = "EIIOYvF_GPUuxML_RQzfBx0glwcpNf8F0PsbxkJwf-XB4B-6lh0C6OqdIF2LE_Z9CLH3tZgem9SnthAo";
	//LIVE PAYPAL
	//const IDCLIENTE = "AQlCcZlAKDIMfG4Uw8oMbUW0_PRldVV2ZN4txd2-iYnk08Kq6nj1HOzwH-gTDCN6V7GFOFoacA-AKKFK";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "EIIOYvF_GPUuxML_RQzfBx0glwcpNf8F0PsbxkJwf-XB4B-6lh0C6OqdIF2LE_Z9CLH3tZgem9SnthAo";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "bm00184@gmail.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Tecamachalco, Puebla";
	const TELEMPRESA = "2491638202";
	const WHATSAPP = "2491638202";
	const EMAIL_EMPRESA = "bm001844@gmail.com";


	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'Brenda';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 50;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/jackeline.martinez.14855377";
	const INSTAGRAM = "https://www.instagram.com/jackeline_mtz14/";
	

 ?>