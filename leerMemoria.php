<?php
	$mi_pdf = 'memoriaTuristea.pdf';
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
	readfile($mi_pdf);
?>