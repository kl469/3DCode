<div class="container-fluid" style="margin-bottom: 96px;">
  <div class="row mb-2">
    <div class="col-xs-12 col-sm-12">
      <div id="main_3d_image">
        <div id="main_text" class="col-xs-12 col-sm-4">
          <h2>Coca Cola Great Britain</h2>
          <h3>Founded by Dr John S Pemberton</h3>
          <p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic
            beverage concentrates and syrups, and produces nearly 400 brands.</p>
          <div id="mark"></div>
        </div>
      </div>
    </div>
  </div>
  <ul class="nav nav-tabs" id="tabs"></ul>
  <div id="coca" class="model">
    <x3d class="col-xs-6 col-sm-6" id="x3d1" width="500" height="500">
      <Scene DEF='scene'>
        <Viewpoint id="side" position="-303.66234 -79.63770 -238.42690" orientation="-0.07036 0.99183 -0.10645 4.01791" 
	        zNear="159.62457" zFar="614.48929" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" 
        description="camera"></Viewpoint>
        <Viewpoint id="top" position="-196.69231 417.11179 -77.11200" orientation="0.37917 0.81112 0.44533 4.12927" 
	        zNear="159.62457" zFar="614.48929" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" 
        description="camera"></Viewpoint>
        <Transform id="trans">
          <Inline url="static/assets/model/cola/coca.x3d"></Inline>
        </Transform>
      </Scene>
    </x3d>
    <button type="button" class="btn btn-secondary"
      onclick="$('#side')[0].setAttribute('set_bind','true');">Side</button>
    <button type="button" class="btn btn-secondary" onclick="$('#top')[0].setAttribute('set_bind','true');">Top
    </button>
    <div class="card mb-2 p-2"
      style="position:absolute;top:2rem;right:0;background-color:rgba(255,255,255,0.4);margin-right:2rem;">
      <video style="width:20rem;margin-bottom: 1rem;" autoplay="autoplay" loop="loop" muted
        src="static/assets/video/cola.mp4"></video>
      <img class="img-fluid" style="width:20rem;" src="static/assets/image/diet-coke.png" alt="" />
    </div>
  </div>
  <div id="fanta" class="model" style="display: none;">
    <x3d class="col-xs-6 col-sm-6" id="x3d2" width="500" height="500">
      <Scene DEF='scene'>
        <Viewpoint id="far" position="-32.23456 2.74069 -11.52817" orientation="0.02121 0.99974 0.00858 1.34790"
          zNear="10.19236" zFar="29.08923" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540"
          description="camera">
        </Viewpoint>
        <Viewpoint id="near" position="-46.21660 2.94148 -14.69857" orientation="0.02121 0.99974 0.00858 1.34790"
          zNear="10.19236" zFar="29.08923" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540"
          description="camera">
        </Viewpoint>
        <Transform id="trans">
          <Inline url="static/assets/model/fanta/fanta.x3d"></Inline>
        </Transform>
      </Scene>
    </x3d>
    <button type="button" class="btn btn-secondary" onclick="$('#far')[0].setAttribute('set_bind','true');">Far</button>
    <button type="button" class="btn btn-secondary" onclick="$('#near')[0].setAttribute('set_bind','true');">Near
    </button>
    <div class="card mb-2 p-2"
      style="position:absolute;top:2rem;right:0;background-color:rgba(255,255,255,0.4);margin-right:2rem;">
      <video style="width:20rem;margin-bottom: 1rem;" autoplay="autoplay" loop="loop" muted
        src="static/assets/video/fanta.mp4"></video>
      <img class="img-fluid" style="width:20rem;" src="static/assets/image/fanta-orange.jpg" alt="" />
    </div>
  </div>
  <div id="sprite" class="model" style="display: none;">
    <x3d class="col-xs-6 col-sm-6" id="x3d3" width="500" height="500">
      <Scene DEF='scene'>
        <Viewpoint id="h" position="0.00000 0.00000 189.60675" orientation="0.00000 0.00000 0.00000 0.00000"
          zNear="86.24762" zFar="325.68408" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540"
          description="defaultX3DViewpointNode"></Viewpoint>
        <Viewpoint id="v" position="6.99782 189.47579 0.82177" orientation="-0.99894 0.04518 0.00832 1.56653"
          zNear="81.03536" zFar="333.51105" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540"
          description="defaultX3DViewpointNode"></Viewpoint>
        <Transform id="trans">
          <Inline url="static/assets/model/zero/zero.x3d"></Inline>
        </Transform>
      </Scene>
    </x3d>
    <button type="button" class="btn btn-secondary" onclick="$('#h')[0].setAttribute('set_bind','true');">Front</button>
    <button type="button" class="btn btn-secondary" onclick="$('#v')[0].setAttribute('set_bind','true');">Top
    </button>
    <div class="card mb-2 p-2"
      style="position:absolute;top:2rem;right:0;background-color:rgba(255,255,255,0.4);margin-right:2rem;">
      <video style="width:20rem; margin-bottom: 1rem;" autoplay="autoplay" loop="loop" muted
        src="static/assets/video/sprite.mp4"></video>
      <img class="img-fluid" style="width:20rem;" src="static/assets/image/zero.png" alt="" />
    </div>
  </div>
  <div class="row" id="introduce"></div>
</div>
<script>
  window.onload = function () {
    $.getJSON('./index.php/drink/all', function (res) {
      $.each(res, function (i, field) {
        $('#tabs').append(`
        <li class="nav-item">
          <a class="nav-link ${i == 0 ? 'active' : ''} nav-model" aria-current="page" href="#mark" onclick="seletcModel(${i})">${field.name}</a>
        </li>`);
        $('#introduce').append(`
        <div class="col-xs-12 col-sm-4">
          <div class="card mb-2">
            <a href="${field.website}">
              <div class="img-thumbnail thumbnail-container">
                <img class="card-img-top img-fluid " src="static/assets/image/${field.picture}" alt="" />
              </div>
            </a>
            <div class="card-body">
              <h3 class="card-title">${field.name}</h3>
              <p class="card-text">${field.description}</p>
              <a href="${field.website}" class="btn btn-primary">Find out more ...</a>
            </div>
          </div>
        </div>`)
      });
    });
  }
  function seletcModel(index) {
    $.getJSON('./index.php/drink/detail/' + (index + 1), function (res) {
      $.each($('.nav-model'), function (i, nav) {
        if (i != index) {
          $(nav).removeClass('active');
        } else {
          $(nav).addClass('active');
        }
        switch (index) {
          case 0:
            $('#coca').show();
            $('#sprite').hide();
            $('#fanta').hide();
            break;
          case 1:
            $('#coca').hide();
            $('#sprite').hide();
            $('#fanta').show();
            break;
          case 2:
            $('#coca').hide();
            $('#sprite').show();
            $('#fanta').hide();
            break;
          default:
            break;
        }
        $('x3dom-x3d1-canvas')
      });
    })
  }
</script>