<?php
require('../resources/lib/fpdf/fpdf.php');
session_start();

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('C:\xampp\htdocs\ccpomarrosos\img\logopomarrosos.png', 0, -13, 80);
        $this->Image('C:\xampp\htdocs\ccpomarrosos\img\logocomuna.png', 150, 0, 60);
        // Arial bold 15
        $this->SetFont('Times','B', 10);
        $this->Cell(80);
        $this->Cell(20, 10, utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'), 0, 0 , 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, 'MINISTERIO DEL PODER POPULAR DE LAS COMUNAS Y DE LOS MOVIMIENTOS SOCIALES', 0, 0 , 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, 'CONSEJO COMUNAL "LOS POMARROSOS"', 0 , 0, 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, 'SECTOR BARRIO EL LOBO', 0 , 0, 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, 'PARROQUIA SAN JUAN BAUTISTA', 0 , 0, 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, utf8_decode('MUNICIPIO SAN CRISTÓBAL'), 0 , 0, 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, utf8_decode('ESTADO TÁCHIRA'), 0 , 0, 'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(20, 10, 'C-307714336', 0 , 0, 'C');
        $this->Ln(5);
        $this->Cell(20,10, "# de carta: ");
        $this->Cell(130);
        $fecha = date('d/m/Y');
        $this->Cell(20,10, 'FECHA: '.$fecha);
        // Line break
        $this->Ln(15);
        $this->SetFontSize('15');
        $this->Cell(80);
        $this->Cell(20, 10, 'Carta de residencia', 0, 0, 'C');

        $this->Ln(20);
    }

    function body(){
        require('../php/conn.php');
        $id = $_GET['id'];
        $motivo = $_GET['solicitud'];
        $sql = "SELECT * FROM tmaper where perCod = $id";
        $persona = mysqli_fetch_array(mysqli_query($conn, $sql));
        
        $nombre = $persona['perNom']. " ". $persona['perNo2']. " ". $persona['perApe'];
        $tipo_cedula = $persona['perTid'];
        $cedula = $persona['perCod'];
        $id_dir = $persona['dirCod'];
        $telefono = $persona['perTel'];
        $telefono_casa = "0276-3562222";
        $years = 5;

        $sql = "SELECT * FROM taedir WHERE dirCod = $id_dir";
        $direccion = mysqli_fetch_array(mysqli_query($conn, $sql));
        $casa = $direccion['dirNca'];
        $calle = $direccion['calCod'];
        $text = "Nosotros los abajo firmantes, voceros y voceras del Colectivo de Gobierno Comunal \"LOS POMARROSOS\" ubicado en el sector del Barrio El Lobo, parroquia San Juan Bautista, municipio San Cristobal, estado Táchira y de acuerdo a las atribuciones que nos confiere la Ley Orgánica de los Consejos Comunales, hacemos constar que el ciudadano(a):".$nombre." de nacionalidad: ".$tipo_cedula.", titular de la Cédula de Identidad Nº: ".$cedula." con ".$years." años de residencia fija en esta comunidad, ubicada en la siguiente dirección: calle ".$calle." nº de casa: ".$casa." Números de teléfono móvil: ".$telefono." y residencial: ".$telefono_casa.". Motivo de solicitud: ".$motivo." Constancia que se expide a solicitud de parte interesada en San Cristóbal a los 21 días del mes diciembre del año 2023, caduca a los 90 días de su emisión.";

        $this->SetFont('Times', '', 12);
        $this->MultiCell(190, 8, utf8_decode($text));
        $this->Ln(15);
        $y = $this->GetY();
        $this->Line(10, $y, 60, $y);
        $this->Line(150, $y, 197, $y);
        $this->Cell(20, 10, "Firma");
        $this->Cell(120);
        $this->Cell(20, 10, "Firma");
        $this->Ln(5);
        $this->Cell(20, 10, "Nombre:");
        $this->Cell(120);
        $this->Cell(20, 10, "Nombre:");
        $this->Ln(5);
        $this->Cell(20, 10, "CI: ");
        $this->Cell(120);
        $this->Cell(20, 10, "CI:");
        $this->Ln(5);
        $this->Cell(20,10, utf8_decode("Teléfono"));
        $this->Cell(120);
        $this->Cell(20, 10, utf8_decode("Teléfono"));
        $this->Ln(5);
        $this->Cell(20,10, "unidad");
        $this->Cell(120);
        $this->Cell(20, 10, "unidad");
        $this->Ln(20);
        $y = $this->GetY();
        $this->Line(10, $y, 60, $y);
        $this->Line(150, $y, 197, $y);
        $this->Cell(20, 10, "Firma");
        $this->Cell(120);
        $this->Cell(20, 10, "Firma");
        $this->Ln(5);
        $this->Cell(20, 10, "Nombre:");
        $this->Cell(120);
        $this->Cell(20, 10, "Nombre:");
        $this->Ln(5);
        $this->Cell(20, 10, "CI: ");
        $this->Cell(120);
        $this->Cell(20, 10, "CI:");
        $this->Ln(5);
        $this->Cell(20,10, utf8_decode("Teléfono"));
        $this->Cell(120);
        $this->Cell(20, 10, utf8_decode("Teléfono"));
        $this->Ln(5);
        $this->Cell(20,10, "unidad");
        $this->Cell(120);
        $this->Cell(20, 10, "unidad");
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->body();
$pdf->Output();
?>