<?php $document_root = ''; ?>
<?php 
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (
		!empty($usertype) && (
			!isset($_SESSION['USERTYPEID']) || strpos($usertype, $_SESSION['USERTYPEID']) === false
			)
		) {
		header('Location: ' . $document_root . '/index.php'. '?p=failed');
	}
?>
<!--

This is the master page that expects the following variables
$page_title = name of the page
$page_css = any page specific css files 
$page_js = any page specific js files

$header_main = the name of the current header, refer the header.php for specific
$header_sub = the name of the current sub header, refer the header.php for specific

$banner_title = banner title (optional)
$banner_content = the content of the banner (optional)
$banner_image = banner image link

$content = main content

$usertype = usertypelevel required

-->
<html>
<head>
	<title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href=" <?php echo $document_root; ?> /scripts/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?php echo $document_root; ?> /scripts/css/site.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php echo $page_css; ?>
   
    <script src=" <?php echo $document_root; ?> /scripts/js/jquery-3.2.1.min.js"></script>
    <script src=" <?php echo $document_root; ?> /scripts/js/site.js"></script>
	<script src=" <?php echo $document_root; ?> /scripts/js/popper.js"></script>
    <script src=" <?php echo $document_root; ?> /scripts/js/bootstrap.min.js"></script>	
	<?php echo $page_js; ?>
</head>
<body>

<?php 
	include 'header.php';
	setupHeader($document_root, $header_main, $header_sub);
?>

<?php if (!empty($banner_title)) { ?>
<div class="introbanner">
	<h1><?php echo $banner_title; ?></h1>
	
	<?php if (!empty($banner_content)) { ?>
	<div class="introduction">
		<h3><?php echo $banner_content; ?></h3>
	</div>
	<?php } ?>
</div>
<?php } ?>

<?php if (!empty($banner_image)) { ?>
<div class="imagebanner">
	<img src="<?php echo $document_root . $banner_image; ?>" alt="Stumped!">
</div>
<?php } ?>

<?php echo str_replace("document_root", $document_root, $content); ?>

<!-- Modal -->
<div class="modal fade" id="modalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<footer id="footer">
	<div class="social_media">
	<h2 class="sr-only">social media</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<a href="https://www.facebook.com/StumpedUK" class="icon-facebook" title="facebook"><i class="fa fa-facebook-square"></i></a>
					<a href="https://twitter.com/stumpeduk" class="icon-twitter" title="twitter"><i class="fa fa-twitter-square"></i></a>
					<br>
				</div>
			</div>
		</div>	
	</div>
	<div><h5>Oxford OX3 0BP &#9830; (+44) 7592 490400 &#9830; 
		<a href="mailto:info@stumped.org.uk" target="_top">
	info@stumped.org.uk
	</a><h5></div>
	<div><h5>&copy; 2017 STUMPED! All Rights Reserved</h5></div>
</footer>
</body>
</html>