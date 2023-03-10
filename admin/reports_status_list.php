<?php
//index.php
 //include autoloader
 use Dompdf\Dompdf;
 use Dompdf\Options;

 require_once '../dompdf/vendor/autoload.php';
 // reference the Dompdf namespace

$options = new Options();
$options->set('chroot', realpath(''));
$document = new Dompdf($options);

//initialize dompdf class
require_once '../connect.php';
// $connect = mysqli_connect("localhost", "root", "", "autohub-ticketing");

if(isset($_GET['from_date']) && isset($_GET['to_date']))
{
    $from_date = $_GET['from_date'];
    $to_date = $_GET['to_date'];

$query = "
SELECT
ticket_incident.`id`,
ticket_incident.`ticket_number`,
ticket_incident.`u_id`,
ticket_incident.`ticket_caller`,
ticket_incident.`ticket_category`,
ticket_incident.`ticket_subcategory`,
ticket_incident.`ticket_service`,
ticket_incident.`ticket_config_item`,
ticket_incident.`ticket_short_discrip`,
ticket_incident.`ticket_discription`,
ticket_incident.`ticket_filedownload`,
ticket_incident.`ticket_contact_type`,
ticket_incident.`ticket_status`,
ticket_incident.`ticket_imapact`,
ticket_incident.`ticket_urgent`,
ticket_incident.`ticket_priority`,
ticket_incident.`ticket_assign_group`,
ticket_incident.`ticket_assign_to`,
ticket_incident.`ticket_department_id`,
ticket_incident.`ticket_timeofdate`,
ticket_incident.`ticket_timeofdate_end`,
    ticket_status.`ticket_status_name`
FROM
    ticket_incident
INNER JOIN ticket_status ON ticket_incident.ticket_status = ticket_status.ticket_status_id
WHERE
    ticket_incident.ticket_number = ticket_status.ticket_status_id 
    AND ticket_timeofdate  BETWEEN '$from_date' AND '$to_date'
";
$result = mysqli_query($conn, $query);

$output = '
<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8" />
			<title>Masterfile Summary Report</title>
	
			<style>
            .invoice-box {
                max-width: 800px;
                margin: auto; 
                padding-top: 30px;
                padding-left: 30px;
                padding-right: 30px;
                padding-bottom: 0px;
                border-top: 1px solid #eee;
                border-right: 1px solid #eee;
                border-left: 1px solid #eee;
                // box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                font-size: 16px;
                line-height: 24px;
                font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
                color: #555;
            }
            .item-box {
                max-width: 800px;
                margin: auto;
                padding-top: 0px;
                padding-left: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                border-bottom: 1px solid #eee;
                border-right: 1px solid #eee;
                border-left: 1px solid #eee;
                // box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                font-size: 16px;
                line-height: 24px;
                font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
                color: #555;
            }
	
				.invoice-box table,.item-box table {
					width: 100%;
					line-height: inherit;
					text-align: left;
				}
	
				.invoice-box table td,.item-box table td {
					padding: 10px;
					vertical-align: top;
				}
	
				.invoice-box table tr td:nth-child(2), .item-box table tr td:nth-child(4)  {
					text-align: right;
				}
 
				.invoice-box table tr.top table td,.item-box table tr.top table td {
					padding-bottom: 20px;
				}
	
				.invoice-box table tr.top table td.title,.item-box table tr.top table td.title {
					font-size: 45px;
					line-height: 45px;
					color: #333;
				}
	
				.invoice-box table tr.information table td,.item-box table tr.information table td {
					padding-bottom: 40px;
				}
	
				.invoice-box table tr.heading td ,.item-box table tr.heading td {
					background: #eee;
					border-bottom: 1px solid #ddd;
					font-weight: bold;
				}
	
				.invoice-box table tr.details td,.item-box table tr.details td {
					padding-bottom: 20px;
				}
	
				.invoice-box table tr.item td,.item-box table tr.item td {
					border-bottom: 1px solid #eee;
				}
	
				.invoice-box table tr.item.last td,.item-box table tr.item.last td {
					border-bottom: none;
				}
	
				.invoice-box table tr.total td:nth-child(2),.item-box table tr.total td:nth-child(4) {
					border-top: 2px solid #eee;
					font-weight: bold;
				}

				.invoice-box table tr.sub-total td:nth-child(2) ,.item-box table tr.sub-total td:nth-child(4) {
					border-top: 2px solid #eee;
					font-weight: normal;
				}
	
				@media only screen and (max-width: 600px) {
					.invoice-box table tr.top table td,.item-box table tr.top table td {
						width: 100%%;
						display: block;
						text-align: center;
					}
	
					.invoice-box table tr.information table td ,.item-box table tr.information table td {
						width: 100%%;
						display: block;
						text-align: center;
					}
				}
	
				/** RTL **/
				.invoice-box.rtl,.item-box.rtl {
					direction: rtl;
					font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				}
	
				.invoice-box.rtl table,.item-box.rtl table {
					text-align: right;
				}
	
				.invoice-box.rtl table tr td:nth-child(2) ,.item-box.rtl table tr td:nth-child(4) {
					text-align: left;
				}

				
			</style>
		</head>
	
		<body>
			<div class="invoice-box">
				<table cellpadding="0" cellspacing="0">
					<tr class="top"> 
						<td colspan="2">
							<table>
								<tr>
									<td class="title">
                                         <img src="../admin/autohub-logo.png" class="rounded-circle" style="border-radius: 50%; width: 130px;" alt="Cinque Terre">

									</td>
	
									<td>
                              
                                    Ticket Incident per status<br>
                                    Blk. 15, Ford Global Building., 32nd St., Cor. Rizal Drive<br>
                                    Crescent Park West, BGC, Taguig City<br>
                                    Tel. No.: 8860-8888
									</td>
								</tr>
                            </table>
                        </td>
                    </tr>
                              
                   
					<tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                               
                                   
                                </td>

                                <td>
                                    
                                     
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="details"> 
                    <td></td>
                    <td></td>
                </tr>
                </table>
                </div>
                <div class="item-box">
                    <table cellpadding="0" cellspacing="0"> 
                    <tr class="heading ">
                    <td>Ticket Number</td>
                    <td>Name</td>
                    <td>Sobject Name</td>
                    <td>Discription</td>
                    <td>Status</td>
                    <td>Created Date </td>
                    <td>Date To</td>
                       
                    </tr>
                    %s
                
  
';

// while($row = mysqli_fetch_array($result))

    if(mysqli_num_rows($result) > 0)
    {

            foreach($result as $row)
            {
                
                $output .= '
                <tr>
                    <td>'.$row["ticket_incident.ticket_number"].'</td>
                    <td>'.$row["ticket_incident.ticket_caller"].'</td>
                    <td>'.$row["ticket_incident.ticket_short_discrip"].'</td>
                    <td>'.$row["ticket_incident.ticket_discription"].'</td>
                    <td>'.$row['ticket_status.ticket_status_name'].'</td>
                    <td>'.$row["ticket_incident.ticket_timeofdate"].'</td>
                    <td>'.$row["ticket_incident.ticket_timeofdate_end"].'</td>
                    </tr>
                ';
            }

        }

        else
        {
            echo "No Record Found";
        }
    }

$output .= '

</table>
</div>
</body>
</html>';


// $output .= '</table>';
// Specify watermark image 
// $imageURL = './img/autohub-logo.png'; 
// $imgWidth = 200; 
// $imgHeight = 20; 
 
// // Set image opacity 
// $canvas->set_opacity(.5); 
 
// // Specify horizontal and vertical position 
// $x = (($w-$imgWidth)/2); 
// $y = (($h-$imgHeight)/2); 
 
// // Add an image to the pdf 
// $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight); 
 
// Output the generated PDF (1 = download and 0 = preview) 

//echo $output;

$document->loadHtml($output);

//set page size and orientation

$document->setPaper('Letter', 'landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Webslesson", array("Attachment"=>0));
//1  = Download
//0 = Preview


?>