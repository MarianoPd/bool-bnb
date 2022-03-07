@extends('layouts.guest_app')

@section('guest_content')


<div id="app">



</div>

<script src="js/guest.js"></script>
{{-- tomtom --}}
<script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js'></script>
<script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/services/services-web.min.js"></script>
<script>
  // const GOLDEN_GATE_BRIDGE = {lng: -122.47483, lat: 37.80776};
  // const API_KEY = 'XiRMXj5sejVWEGY8Ze4M4Fq1PhYyKW4I';
  
  // const map = tt.map({
  //   key: API_KEY,
  //   container: 'map-div',
  //   center: GOLDEN_GATE_BRIDGE,
  //   zoom: 12
  // });

  // function search(){
  //   tt.services.fuzzySearch({
  //     key: API_KEY,
  //     query: document.getElementById("query").value,

  //   })
  //   .go()
  //   .then(handleResults)     
  // }

  // function handleResults(result){
  //   if(result.results){
  //     console.log(result);
  //     moveMap(result.results[0].position)

  //     const marker = new tt.Marker()
  //       .setLngLat(result.results[0].position)
  //       .addTo(map);
  //   }
  // }

  // function moveMap(lnglat){
  //   map.flyTo({
  //     center: lnglat,
  //     zoom:12
  //   })
  // }

</script>



@endsection

@section('title_page')
Home
@endsection