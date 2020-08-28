<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentController extends CI_Controller {
	
	public function __construct() { 
		parent::__construct();
		$this->load->library("pdf");
		$this->load->model("IncidentModel");	
		$this->load->model("PersonalModel");	
    } 
    
	public function index() {
		$data = array( 
			"incidentes" => $this->IncidentModel->fetch(),
			"personas" => $this->PersonalModel->queryAllPersonal()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarAdminComponent");
		$this->load->view("IncidentView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function pdfdetails() {
		$this->pdf->loadHtml($this->renderHTML());
		$this->pdf->render();
		$this->pdf->stream("incidente.pdf", array("Attachment" => 0));
	}
	
	private function renderHTML() {
		return 
		"
		
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<HTML>
<HEAD>
	<META HTTP-EQUIV='CONTENT-TYPE' CONTENT='text/html; charset=utf-8'>
	<TITLE></TITLE>
	<META NAME='GENERATOR' CONTENT='LibreOffice 4.1.6.2 (Linux)'>
	<META NAME='AUTHOR' CONTENT='Edith'>
	<META NAME='CREATED' CONTENT='20191020;220100000000000'>
	<META NAME='CHANGEDBY' CONTENT='Edith'>
	<META NAME='CHANGED' CONTENT='20191020;220200000000000'>
	<META NAME='AppVersion' CONTENT='14.0000'>
	<META NAME='DocSecurity' CONTENT='0'>
	<META NAME='HyperlinksChanged' CONTENT='false'>
	<META NAME='LinksUpToDate' CONTENT='false'>
	<META NAME='ScaleCrop' CONTENT='false'>
	<META NAME='ShareDoc' CONTENT='false'>
	<STYLE TYPE='text/css'>
	<!--
		@page { size: 11in 8.5in; margin-left: 0.98in; margin-right: 0.98in; margin-top: 1.18in; margin-bottom: 1.18in }
		P { margin-bottom: 0.08in; direction: ltr; line-height: 107%; widows: 2; orphans: 2 }
		P.western { font-size: 11pt; so-language: es-MX }
		P.cjk { font-size: 11pt; so-language: en-US }
		P.ctl { font-family: 'Cambria'; font-size: 11pt }
	-->
	</STYLE>
</HEAD>
<BODY LANG='en-US' DIR='LTR'>
<TABLE WIDTH=1015 CELLPADDING=5 CELLSPACING=0 STYLE='page-break-before: always'>
	<COL WIDTH=26>
	<COL WIDTH=812>
	<COL WIDTH=145>
	<TR VALIGN=TOP>
		<TD ROWSPAN=3 WIDTH=26 BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western'><BR>
			</P>
		</TD>
		<TD WIDTH=812 BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' ALIGN=CENTER><FONT COLOR='#000000'><FONT FACE='Calibri, serif'><FONT SIZE=4><B>MARIO
			LUIS DEL RAZO PACHECO</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=145 BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western'>Clave:<FONT COLOR='#000000'><FONT FACE='Calibri, serif'>
			  RDI-008</FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD ROWSPAN=2 WIDTH=812 VALIGN=TOP BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><FONT FACE='Calibri, serif'><FONT SIZE=5>Reporte
			de incidentes ocurridos de  la empresa </FONT></FONT>
			</P>
		</TD>
		<TD WIDTH=145 VALIGN=TOP BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western'>Versión: 01</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=145 VALIGN=TOP BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western'>Fecha:30/07/19</P>
		</TD>
	</TR>
</TABLE>
<P LANG='es-MX' CLASS='western' STYLE='margin-bottom: 0.11in'><BR><BR>
</P>
<TABLE WIDTH=983 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=131>
	<COL WIDTH=256>
	<COL WIDTH=243>
	<COL WIDTH=295>
	<TR VALIGN=TOP>
		<TD WIDTH=131 HEIGHT=29 BGCOLOR='#92d050' STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western'><FONT FACE='Arial, serif'><B>Fecha</B></FONT></P>
		</TD>
		<TD WIDTH=256 BGCOLOR='#92d050' STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><FONT FACE='Arial, serif'><B>Incidencia
			</B></FONT>
			</P>
		</TD>
		<TD WIDTH=243 BGCOLOR='#92d050' STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><FONT FACE='Arial, serif'><B>Medida
			correctora aplicada </B></FONT>
			</P>
		</TD>
		<TD WIDTH=295 BGCOLOR='#92d050' STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><FONT FACE='Arial, serif'><B>Responsable
			(Firma)</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=131 HEIGHT=15 STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><BR>
			</P>
		</TD>
		<TD WIDTH=256 STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><BR>
			</P>
		</TD>
		<TD WIDTH=243 STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><BR>
			</P>
		</TD>
		<TD WIDTH=295 STYLE='border: 1px solid #00000a; padding: 0in 0.08in'>
			<P LANG='es-MX' CLASS='western' ALIGN=CENTER><BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P LANG='es-MX' CLASS='western' STYLE='margin-bottom: 0.11in'><TABLE DIR='LTR' ALIGN=LEFT WIDTH=783 HSPACE=4 CELLPADDING=5 CELLSPACING=0>
	<COL WIDTH=380>
	<COL WIDTH=380>
	<TR VALIGN=TOP>
		<TD WIDTH=380 BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western'>Realizó:</P>
		</TD>
		<TD WIDTH=380 BGCOLOR='#ffffff' STYLE='border: 1.00pt solid #000001; padding: 0.05in 0.1in'>
			<P LANG='es-MX' CLASS='western'>Autorizó:</P>
		</TD>
	</TR>
</TABLE><BR><BR>
</P>
</BODY>
</HTML>
		
		";
	}
}