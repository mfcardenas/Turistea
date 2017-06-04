<?php
	$mi_pdf = 'memoriaTuristea.pdf';
	header('Content-type: application/pdf');
	header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
	readfile($mi_pdf);
?>