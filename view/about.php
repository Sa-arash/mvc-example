<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .parallax {
  height: 500px; /* fallback for older browsers */
  height: 100vh;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-perspective: 300px;
  perspective: 300px;
  -webkit-perspective-origin-x: 100%;
  perspective-origin-x: 100%;
  font-size: 400%;
  font-family: arial;
  font-weight: 900;
  color: #fff
}
.parallax__group {
  position: relative;
  height: 500px; /* fallback for older browsers */
  height: 100vh;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.parallax__layer {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-transform-origin-x: 100%;
  transform-origin-x: 100%;
}
#group1 .parallax__layer--base {
  background: url(https://static.pexels.com/photos/4700/nature-forest-moss-leaves.jpg);
  background-size: cover;
} 
.parallax__layer--base {
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  z-index: 4;
}

.parallax__layer--back {
  -webkit-transform: translateZ(-300px) scale(2);
  transform: translateZ(-300px) scale(2);
  z-index: 3;
  background: url(http://integrative-therapie-potsdam.de/wp-content/gallery/natur/ladybug-796481_1920.jpg) no-repeat;
  background-size: cover;
}

* {
  margin:0;
  padding:0;
}

.title {
  text-shadow: 0px 0px 5px rgba(0, 0, 0, .5);
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

#group1 {
  z-index: 5; /* slide over group 2 */
}

#group2 {
  z-index: 3; /* slide under groups 1 and 3 */
}



    </style>
</head>
<body>
<div class="parallax">
  <div id="group1" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">
      <div class="title">PURE HTML & CSS PARALAX</div>
    </div>
  </div>
  <div id="group2" class="parallax__group">
    <div class="parallax__layer parallax__layer--base">
      <div class="title">Base Layer</div>
    </div>
    <div class="parallax__layer parallax__layer--back"></div>
  </div>
</div>
</body>
</html>