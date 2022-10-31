<?php

get_header(); ?>

                 

                <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
                                <div class="page-content">
					<div class="tm-content page-content-inner" style="min-height: 400px;">
                                                    <div style="padding-top: 20px; ">
                                                            
                                                           
                                                            
                                                            
                                                            
                                                            <!-- -->
                                                            <div class="tm-rcow" style="padding:0;">
							<div class="tm-wrap">
								<div class="tm-column tm5"> 
                                                                    <h2>Main Office</h2>
                                                                    <p>Gasser Ahmed St. near Thawrat Alhejara Square <br />Misurata, Libya</p>
                                                                    <p>Phone: 0515201111 - 0911212126 </p>
                                                                    <p>Email: rahafcompany@gmail.com</p>
                                                                    <p>Web: http://wwww.rahaf.com</p>
								</div>
								<div class="tm-column tm7">
                                                                                <div id="map-canvas" style="height: 330px; "></div>
								</div>
							</div>
						</div>
                                                            
                                                    </div>
					</div>
				</div>
				<!--page-content-->
                                
                            

			</div>
			<!--tm-container-->
		</div>
		<!--tm-page-body-->
                
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
		<script>
			var map;
			function initialize() {
				var map_canvas = document.getElementById('map-canvas');

				if (map_canvas) {
					var mapOptions = {
						zoom: 16,
						center: new google.maps.LatLng(32.327657, 15.133484)
					};

					map = new google.maps.Map(map_canvas, mapOptions);
				}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>


                 

                
        
<?php
get_footer();	
		
?>

                
               