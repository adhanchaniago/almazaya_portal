<style>
  h1,h2,p,a{
    font-family: sans-serif;
    font-weight: normal;
  }

  .jam-digital{
    overflow: hidden;
    width: 330px;
    margin: 20px auto;
    border: 5px solid #efefef;
  }

  .kotak{
    float: left;
    width: 110px;
    height: 100px;
    background-color: #189fff;
  }

</style>
<style type="text/css">
  .jam_analog_malasngoding {
    background: #e7f2f7;
    position: relative;
    width: 120px;
    height: 120px;
    border: 8px solid #52b6f0;
    border-radius: 50%;
    padding: 10px;
    margin:10px auto;
  }

  .xxx {
    height: 100%;
    width: 100%;
    position: relative;
  }

  .jarum {
    position: absolute;
    width: 50%;
    background: #232323;
    top: 50%;
    transform: rotate(90deg);
    transform-origin: 100%;
    transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
  }

  .lingkaran_tengah {
    width: 12px;
    height: 12px;
    background: #232323;
    border: 2px solid #52b6f0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -7px;
    margin-top: -7px;
    border-radius: 50%;
  }

  .jarum_detik {
    height: 2px;
    border-radius: 1px;
    background: #F0C952;
  }

  .jarum_menit {
    height: 2px;
    border-radius: 2px;
  }

  .jarum_jam {
    height: 4px;
    border-radius: 2px;
    width: 35%;
    left: 15%;
  }
</style>

<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo collapse icon -->
        <!-- <div class="sidebar-collapse" style="margin-top: 0px;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand()">
                <i class="entypo-menu"></i>
            </a>
        </div> -->
        <!-- <script type="text/javascript">
            function hide_brand() {
                $('#branding_element').toggle();
            }
        </script> -->

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>
    <ul id="main-menu" class="">
        <div style="text-align: -webkit-center;" id="branding_element">
            <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:21px;"/>
            <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
                <?php echo $system_name;?>
            </h4>
        </div>

        <li class="active" style="border-top:1px solid #232540;">
          <a href="#">
            <i class="entypo-gauge"></i>
            <span><?php echo get_phrase('PUKUL'); ?></span><br>
            <div class="jam_analog_malasngoding">
            	<div class="xxx">
            		<div class="jarum jarum_detik"></div>
            		<div class="jarum jarum_menit"></div>
            		<div class="jarum jarum_jam"></div>
            		<div class="lingkaran_tengah"></div>
            	</div>
            </div>
            <h1 style="color: #a2a3b7;border:1px;text-align: -webkit-center;margin-bottom: 5px;font-weight: 300;margin-top: 10px;">
            <span id="jam"></span>
            </h1>
            <h4 style="color: #a2a3b7;text-align: -webkit-center;">
              <?=date('l, d M Y');?>
            </h4>
            </a>
        </li>

        <li class="active" style="border-top:1px solid #232540;">
          <a href="#">
            <i class="entypo-gauge"></i>
            <span><?php echo get_phrase('JAM KE - '); ?></span>
            <h1 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
              <span id="ke"> </span>
            </h1>

            </a>
        </li>

        <li class="active" style="border-top:1px solid #232540;">
          <a href="#">
            <i class="entypo-gauge"></i>
            <span><?php echo get_phrase('AGENDA'); ?></span>
            <h3 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
             <span id="agenda"></span>
            </h3>

            </a>
        </li>

    </ul>

</div>

<script>
  window.setTimeout("waktu()", 1000);
  window.setTimeout("agenda()", 1000);
  window.setTimeout("www()", 1000);

  function www(){
    var time = Date.now();
    var gmt = -(new Date()).getTimezoneOffset()/60;
    var detik = Math.floor(time/1000);
    seconds = ('0' + detik % 60).slice(-2);
    var menit = Math.floor(detik/60);
    minutes = ('0' + menit % 60).slice(-2);
    var jam = Math.floor(menit/60);
    hours = ('0' + (jam+gmt) % 24).slice(-2);
    var view = hours + " : " + minutes + " : " + seconds;

    document.getElementById("jam").innerHTML = view;
    window.setTimeout("www()", 1000);
  }

  function waktu(){
    var time = Date.now();
    var gmt = -(new Date()).getTimezoneOffset()/60;
    var detik = Math.floor(time/1000);
    seconds = ('0' + detik % 60).slice(-2);
    var menit = Math.floor(detik/60);
    minutes = ('0' + menit % 60).slice(-2);
    var jam = Math.floor(menit/60);
    hours = ('0' + (jam+gmt) % 24).slice(-2);
    var hh = hours + "" + minutes;

    var isi = '';
    setTimeout("waktu()", 1000);

    if (hh >= 0715 && hh <= 0839) {
      isi = 'Dhuha & Tahfidzh';
    } else if(hh >= 0840 && hh <= 0919) {
      isi = '1';
    } else if(hh >= 0920 && hh <= 0959){
      isi = '2';
    } else if(hh >= 1000 && hh <= 1029){
      isi = 'Break 1';
    } else if(hh >= 1030 && hh <= 1109){
      isi = '3';
    } else if(hh >= 1110 && hh <= 1149){
      isi = '4';
    } else if(hh >= 1150 && hh <= 1239){
      isi = 'Break 2 & Dzuhur';
    } else if(hh >= 1240 && hh <= 1319){
      isi = '5';
    } else if(hh >= 1320 && hh <= 1359){
      isi = '6';
    } else if(hh >= 1400 && hh <= 1419){
      isi = 'Break 3';
    } else if(hh >= 1420 && hh <= 1459){
      isi = '7';
    } else if(hh >= 1500 && hh <= 1539){
      isi = '8';
    } else if(hh >= 1540 && hh <= 1559){
      isi = 'Ashar';
    } else {
      isi = 'Get Home';
    }
    
    document.getElementById("ke").innerHTML = isi;
  }

  function agenda(){
		$.ajax({
			type: 'POST',
			url:'<?php echo base_url("home/data_agenda") ?>',
			dataType:'json',
			success: function(data){
				var baris='';
				for(var i=0;i<data.length;i++){
					baris += data[i].notice+"<br>";
				}
				$('#agenda').html(baris);
			}
		});
	}

</script>
<script type="text/javascript">
	const secondHand = document.querySelector('.jarum_detik');
	const minuteHand = document.querySelector('.jarum_menit');
	const jarum_jam = document.querySelector('.jarum_jam');

	function setDate(){
		const now = new Date();

		const seconds = now.getSeconds();
		const secondsDegrees = ((seconds / 60) * 360) + 90;
		secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
		if (secondsDegrees === 90) {
			secondHand.style.transition = 'none';
		} else if (secondsDegrees >= 91) {
			secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
		}

		const minutes = now.getMinutes();
		const minutesDegrees = ((minutes / 60) * 360) + 90;
		minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

		const hours = now.getHours();
		const hoursDegrees = ((hours / 12) * 360) + 90;
		jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
	}

	setInterval(setDate, 1000)
</script>
