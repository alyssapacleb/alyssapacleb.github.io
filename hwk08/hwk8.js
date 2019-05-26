function randomPicCap () {
    var images = ["GalaxyCluster.jpg", "InteractingGalaxies.jpg", "M51.jpg", "M104.jpg", "NGC1300.jpg", "NGC6217.jpg"];
    var min=0;
    var max=images.length;
    var randIdx = Math.floor(Math.random() * (max - min)) + min;
    document.getElementById("pic").src=images[randIdx];
    var captions = ["Galaxy Cluster", "Interacting Galaxies", "M51", "M104", "NGC1300", "NGC6217"];
    document.getElementById("cap").innerHTML=captions[randIdx];
}

window.randomPicCap();
