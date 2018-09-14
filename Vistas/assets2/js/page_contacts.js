var ContactPage = (function() {
  return {
    //Basic Map
    initMap: function() {
      var map;
      $(document).ready(function() {
        map = new GMaps({
          div: "#map",
          scrollwheel: false,
          lat: 14.6019426,
          lng: -70.1127149
        });

        var marker = map.addMarker({
          lat: 14.6019426,
          lng: -70.1127149,
          title: "Company, Inc."
        });
      });
    },

    //Panorama Map
    initPanorama: function() {
      var panorama;
      $(document).ready(function() {
        panorama = GMaps.createPanorama({
          el: "#panorama",
          lat: 14.6019426,
          lng: -70.1127149
        });
      });
    }
  };
})();


