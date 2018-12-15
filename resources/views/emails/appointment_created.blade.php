<!DOCTYPE html>
<html>

	<head>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <title>Medical</title>
	    <style type="text/css">
	    	.btn,.error-message,.nav,h1,h2,h3,h4,h5,h6,label,ol.breadcrumb li,thead{text-transform:capitalize}.agile-list li,.ibox-content{overflow:auto}.btn-edit-announcement,.employess-kras .contact-box .jb-content span{float:right}.mail .mail_content .mail-end a,.mail .mail_footer a{text-decoration:none}.wrapper-content,.wrapper-title{display:table;width:100%;border:1px solid #ddd;border-radius:2px;table-layout:fixed}.wrapper-content{margin-bottom:80px}.wrapper-title{border-bottom:none;font-weight:900;background-color: #3490dc;color: #fff;}.wrapper-title h3{margin:0}@media (max-width:989px){.col-md-3.ibox-content{margin-bottom:30px}}.mail{width:80%;margin:0 auto}.mail .agile-list li,.mail .ibox-content{overflow:inherit}.mail .col-md-4{width:33.33333333%;display:inline-block}.mail .col-md-8{width:66.66666667%;display:inline-block}.mail .text-center{text-align:center}.mail .mail-header img{max-width:80px;display:inline-block}.mail .mail-header img.logo{margin-bottom:-40px;max-width:150px}.mail .mail-header h1{font-weight:400;display:inline-block}.mail .mail-header a{color:#333}.mail .mail-header a img{float:right;margin-left:5px}.mail .mail_content{margin:0 auto;background-color:#eee;display:block}.mail .mail_content .mail-details{min-height:500px}.mail .mail_content .mail-details img{width:100%;margin:0 auto 10px}.mail .mail_content .mail-details h2{color:#333;text-transform:capitalize;font-weight:400}.mail .mail_content .mail-details h2 i{color:#013c22}.mail .mail_content .mail-details p{font-size:16px;line-height:25px}.mail .mail_content .mail-details ul.list-unstyled.text-left{float:left;list-style:none}.mail .mail_content .mail-details ul.list-unstyled.text-left li{line-height:25px;font-size:16px;color:#999}.mail .mail_content .mail-details ul.list-unstyled.text-left li span{color:#333;font-weight:400px}.mail .mail_content .mail-end{background-color:#ecba52;padding:10px 0}.mail .mail_content .mail-end h3{text-align:center;margin-bottom:0;color:#333;letter-spacing:3px}.mail .mail_footer{background-color:#3490dc;padding:20px}.mail .mail_footer h3{display:inline-block;margin:0}.mail .mail_footer a{color:#fff;letter-spacing:3px}.mail .mail_footer a img{float:right;margin-left:5px;cursor: pointer}.mail-details{padding: 0px 10px;}.mail-details h4{display: inline-block;margin-bottom: 5px;}@media (max-width:400px) {.mail .mail_footer a span{display: none }}.mail-details span{color: #007bff;line-height: 2;font-weight: 600;}
	    </style>
	</head>

	<body class="mail">
		<div class="container">
			<div class="wrapper-title mail-header">
	        	<div class="col-md-12" align="center">
	        		<h1>Appointment request</h1>
	        	</div>
		    </div>
			<div class="wrapper wrapper-content mail_content">
				<div class="ibox">
					<div class="ibox-content">
						<div class="mail-details">
                             <br> <br>
                            Dear Mr/Mrs {{$data['appointment']['name']}},
                            <br>
                            <br>
                            <div>
                            Your request for an appointment with Dr <strong>{{$data['doctor']['name']}} </strong> has been submitted successfully,
                            Please wait for our confirmation.
                            </div>
                            <br>
                            <div>
                            Best Regards;
                                <div> Medical Team </div>
                            </div>


				        </div>
						<div class="mail_footer">
							<h3><a target="_blank" href="#">Medical<span></span></a></h3>

					 	</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
