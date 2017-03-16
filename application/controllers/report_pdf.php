<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_pdf extends CI_Controller {

   function __construct()
   {
		parent::__construct();
		ini_set('memory_limit', '256M'); //แก้ Error Allowed memory size of  (memory limit error)
		$this->load->library('m_pdf');	
		
   }
   
	public function index()
	{
		redirect('mpdf/pdf1');
	}
	
	public function pdf1()
	{		
		// นำ View มาแสดง PDF
		$data = array();		
		$header=$this->load->view('report_pdf/pdf1/header', $data, true);
        $body=$this->load->view('report_pdf/pdf1/body', $data, true);
		$footer=$this->load->view('report_pdf/pdf1/footer', $data, true);
		
		//---Output ---------------------
		$this->m_pdf->SetHTMLHeader($header);
		$this->m_pdf->SetHTMLFooter($footer);		
		$this->m_pdf->WriteHTML($body);			
		$this->m_pdf->Output('Report_PDF.pdf', 'I'); //I=Display, D=Download
				
	}
	
	public function pdf2()
	{
		
		// นำ View มาแสดง PDF
		$data = array();		
		$header=$this->load->view('report_pdf/pdf2/header', $data, true);
        $body=$this->load->view('report_pdf/pdf2/body', $data, true);
		$footer=$this->load->view('report_pdf/pdf2/footer', $data, true);
		
		//---Output ---------------------
		$this->m_pdf->SetHTMLHeader($header);
		$this->m_pdf->SetHTMLFooter($footer);	
		$this->m_pdf->WriteHTML($body);				
		$this->m_pdf->Output('Report_PDF.pdf', 'I'); //I=Display, D=Download
				
	}
	
	public function pdf3()
	{
		$this->m_pdf->setting('A4-L'); //PDF A4 แนวนอน
		// นำ View มาแสดง PDF
		$data = array();		
		$header=$this->load->view('report_pdf/pdf3/header', $data, true);
        $body=$this->load->view('report_pdf/pdf3/body', $data, true);
		$footer=$this->load->view('report_pdf/pdf3/footer', $data, true);
		
		//---Output ---------------------
		$this->m_pdf->SetHTMLHeader($header);
		$this->m_pdf->SetHTMLFooter($footer);	
		$this->m_pdf->WriteHTML($body);
		$this->m_pdf->Output('Report_PDF.pdf', 'I'); //I=Display, D=Download
				
	}
	
	public function pdf4()
	{
		echo '<embed type="application/pdf" width="100%" height="650" src="'.site_url('report_pdf/pdf2').'">';				
	}
		
	
}//End frontend class





