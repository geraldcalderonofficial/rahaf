<?php

get_header(); ?>

<style>
    ul li {
        
    }
    .select-style {
    border: 1px solid #ccc;
    width: 100%;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
</style>             

                <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
                                <div class="page-content">
					<div class="tm-content page-content-inner">
                                                    <div style="padding-left: 10px; ">
                                                           
                                                            <!-- -->
                                                            <div class="tm-row" style="padding:0;">
                                                                
                                                                <div class="tm-wrap">
                                                                        <div class="one-third"> 

                                                                            <h2>Rahaf Distribution Network</h2>
                                                                            
                                                                            <div class="select-style">
                                                                                <select>
                                                                                  <option value="volvo">Misratah</option>
                                                                                  <option value="saab">Tripoli</option>
                                                                                  <option value="mercedes">Benghazi</option>
                                                                                  <option value="audi">Jalu</option>
                                                                                </select>
                                                                              </div>
                                                                            
                                                                            <ul class="">
                                                                                <li>Alazzahe</li>
                                                                                <li>Al Madaen</li>
                                                                                <li>Abyad Alwan</li>
                                                                                <li>Talwen Akdoura</li>
                                                                                <li>Elyakout</li>
                                                                                <li>Al jazeera 1</li>
                                                                                <li>Algamal</li>
                                                                                <li>Talwen Elashy</li>
                                                                                <li>Al jazeera 2</li>
                                                                                <li>Alebdae</li>
                                                                                <li>Alazzahe</li>  
                                                                            </ul>

                                                                        </div>
                                                                        <div class="column-4">


                                                                               

                                                                                        <div id="map-canvas" style="height: 330px; margin-bottom: 20px"></div>
                                                                             




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

                
               