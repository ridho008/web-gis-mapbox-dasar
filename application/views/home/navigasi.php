<div class="content">
        <div id="map"  style="height: 500px;"></div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoicmlkaG8wMDgiLCJhIjoiY2toOTEzMWVhMGlrcjJ4a2g1Z3BoeHRheSJ9.GhfzsPNOI6czJ-KcXilejA';
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/mapbox/streets-v11',
center: [-74.5, 40], // starting position
zoom: 9 // starting zoom
});
 
// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
</script>

        
        
      </div>