<?= $this->extend('layouts/template-page'); ?>
<?= $this->section('content'); ?>
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img4">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                <?= $title; ?>
			                <span class="watermark">FH UNUSIA</span>
			            </h1>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->
		
			<!-- Faq Start -->
			<div class="rs-faq faq-style1 faq-modify1 pt-120 pb-120 md-pt-80 md-pb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 pr-60 md-pr-15 md-mb-50">
							<div class="faq-content">
                               	<div id="accordion" class="accordion">
                                  	<div class="card">
                                      	<div class="card-header">
                                        	<a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">Ikatan Alumni Fakultas Hukum (IKA-FH)</a>
                                      	</div>
                                      	<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                          	<div class="card-body">
                                              IKA-FH sebagai kepanjangan tangan dari FH, dibentuk sebagai langka koordinasi lintas alumni fakultas hukum dengan ditandai SK Pembentukan <a href="#">(click here)</a> 
                                          	</div>
                                     	</div>
                                  	</div>
                                   	<div class="card">
                                       	<div class="card-header">
                                           <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">Ketua IKA-FH</a>
                                       	</div>
                                       	<div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                           	<div class="card-body">
                                                Fakultas Hukum mengangkat sudara X dan saudari Y sebagai Ketum dan Sekjen untuk bermanuver dengan ditandai bukti SK Pengangkatan <a href="#">(click here)</a>
                                           	</div>
                                       	</div>
                                   	</div>
                                       <div class="card">
                                       	<div class="card-header">
                                           <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false">Sosial Media Resmi IKA-FH</a>
                                       	</div>
                                       	<div id="collapse3" class="collapse" data-bs-parent="#accordion" style="">
                                           	<div class="card-body">
                                                Instagram <a href="https://instagram.com/">(click here)</a>
                                           	</div>
                                       	</div>
                                   	</div>
                                  	
                               	</div>
                           </div>
						</div>
						<?= $this->include('layouts/sidebar'); ?>
					</div>
				</div>
			</div>
			<!-- Faq End -->
<?= $this->endSection(); ?>