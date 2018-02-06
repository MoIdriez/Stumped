<?php
	include 'utility.php';
	$page_title = 'CLINICIAN LED';
	$page_css = '';
	$page_js = '';

	$header_main = 'forYou';
	$header_sub = 'forYouServices';

	$banner_title = 'CLINICIAN LED';
	$banner_content = 'Stumped! offers you information about the services that are run by healthcare professionals which you may encounter before and after amputation. This may include: hospital wards, diabetes foot clinic, rehabilitation centres and many others.';
	$banner_image = '/content/image/Photo4.jpg';

	$usertype = '';

	$content = 
	
		standard(
			'JOHN RADCLIFFE HOSPITAL',
			'<p>The John Radcliffe Hospital offers a specialised Vascular ward on Level 6A that  provides emergency and elective treatment for patients with conditions of the vascular system, excluding the cardiac system. If you are due to have an amputation, you are very likely to be admitted to the ward both before and after the amputation. The specialist nurses and the various professionals are experts in working with amputees and will be able to support you and your family through this life-changing event.</p>',
			'<p><b>Contact details:</b></p><p>Ward Sister: Fiona Turner, Tel: 01865 221802/ 4</p>',
			'fa-hospital-o'
		) . '<hr>' .
		alternative(
			'NUFFIELD ORTHOPAEDIC CENTRE',
			'<p>The NOC offers a rehabilitation service called Oxford Centre for Enablement. This service specialises in all aspects of rehabilitation by utilising a multidisciplinary team consisting of: physiotherapists, Occupational Therapists, Consultants, Prosthetist and Specialist Nurses. OCE may be involved at the rehabilitation stage of the amputee care pathway.</p>',
			'<p><b>Contact Details:</b></p>
			<p>NOC telephone: 0300 304 7777</p>
			<p>OCE Tel: 01865 737200</p>
			<p>Email: oce@ouh.nhs.uk</p>',
			'fa-hospital-o'
		) . '<hr>' . 
		standard(
			'Horton General Hospital',
			'<p>The hospital offers Trauma and Orthopaedic services to patients in Banbury and surrounding areas. Treating conditions such as full joint replacement, ligament repair and stabilisation of fractures.</p>',
			'<p><b>Contact Details:</b></p>
			<p><b>Inpatients:</b> F Ward 01295 229196</p>',
			'fa-hospital-o'
		) . '<hr>' .
		alternative(
			'Churchill Hospital',
			'<p>The hospital offers a wide range of surgical experience in the Oxford Cancer and Haematology Centre. Specialist surgery is conducted by teams responsible for the management of several cancer types. When in hospital a multidisciplinary team might be involved in your care. Including:</p>
			<ul style="list-style-type: circle; text-align: left;">
				<li>specialist nurses</li>
				<li>pharmacists</li>
				<li>speech and language therapists</li>
				<li>dietitians</li>
				<li>occupational therapists</li>
				<li>physiotherapists</li>
			</ul>',
			'<p><b>Contact Details:</b></p>
			<p>Tel: 01865 235566</p>',
			'fa-hospital-o'
		) . '<hr>' .
		standard(
			'Royal Berkshire Hospital',
			'<p>The hospital offers a Vascular Surgery Unit that delivers all aspects of arterial and venous care. The team includes Two consultant Vascular Surgeons and  a Vascular Specialist Nurse. Working very closely with Interventional Radiologists to provide a multidisciplinary approach.</p>',
			'<p><b>Contact Details:</b></p>
			<p>Vascular unit: Telephone - 0118 322 6890/ 0118 322 7881</p>
			<p>Royal Berkshire Hospital: Telephone: 0118 322 5111</p>',
			'fa-hospital-o'
		);
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>