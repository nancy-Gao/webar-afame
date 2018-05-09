<!doctype HTML>
<html>
<!-- include A-Frame obviously -->
<script src="/js/aframe.min.js"></script>
<!-- include ar.js for A-Frame -->
<script src="/js/aframe-ar.js"></script>
<!-- include A-Frame-Extras -->
<script src="/js/aframe-extras.min.js"></script>

<body style='margin : 0px; overflow: hidden;'>
  <a-scene embedded arjs>
    <!-- load gltf model -->
    <a-marker preset='custom' type='pattern' url='/markers/pattern-marker.patt'>
      <!-- <a-entity gltf-model="/static/gltf/scene.gltf" animation-mixer scale="1 1 1" rotation="-120 0 0" position="0 0.5 0"></a-entity> -->
      <a-entity gltf-model="/gltf/scene.gltf" scale="1.5 1.5 1.5" rotation="-160 0 0" position="0 0.5 0">
        <!-- <a-animation attribute="rotation" dur="9000" to="-120 0 0" repeat="indefinite"></a-animation> -->
      </a-entity>
    </a-marker>
    
    <!-- add camera -->
    <a-entity camera></a-entity>
  </a-scene>
</body>
</html>