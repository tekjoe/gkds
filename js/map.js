$(document).ready(() => {
  const accessToken =
    "pk.eyJ1IjoidGVram9lIiwiYSI6ImNrNTRmam1oMzBpd2YzZXBuNjBndDc2ZnUifQ.wjFDugqNW99oTEt_s8S7sA";

  const map = L.map("map", {
    zoomControl: false,
    center: [43.021394, -87.912152],
    zoom: 15,
  });

  const gkdsMarker = L.marker([43.021394, -87.912152])
    .bindPopup(
      "<p >Gustavo Krystal Dance Studio</p><a href='https://goo.gl/maps/aCqvoCF5Jej5Dyrz8' style='text-align: center; display:block;' target='_blank'>Get Directions</a>"
    )
    .addTo(map);

  gkdsMarker.on("click", () => {
    gkdsMarker.openPopup();
  });

  L.tileLayer(
    `https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=${accessToken}`,
    {
      maxZoom: 18,
      id: "mapbox/streets-v11",
      tileSize: 512,
      zoomOffset: -1,

      accessToken,
    }
  ).addTo(map);
});
