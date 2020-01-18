@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endpush

<section class="slid-sec">
    <div class="container-fluid no-padding">
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- Main Slider  -->
          <div class="col-md-12 no-padding"> 
            
            <!-- Main Slider Start -->
            <div class="tp-banner-container">
              <div class="tp-banner">
                <ul id="home-slider">
                  
                  <!-- SLIDE  -->
                  <!--<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
                    
                    <img src="{{ asset('media/images/home/home01.jpg') }}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-110" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">High Quality VR Glasses </div>
                    
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-60" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;">3D Daydream View </div>
                    
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1200" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">Starting at </div>
                    
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="210" 
                                     data-y="center" data-voffset="5" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">$49.99 </div>
                    
                    <div class="tp-caption lfb tp-resizeme scroll" 
                                      data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="80"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 8;"><a href="#." class="btn-round big">Comprar ahora</a> </div>
                  </li>-->
                  <li>
                        <img src="{{ asset('media/images/home/home-ch-01.jpg') }}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" style="background-position: center bottom; background-fit: cover; "> 
                  </li>
                  <li>
                        <img src="{{ asset('media/images/home/home-fossil-01.jpg') }}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                  </li>
                  <li>
                        <img src="{{ asset('media/images/home/home-versace-01.jpg') }}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  @push('scripts')
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
      $('#home-slider').slick({
        'dots': true,
        'arrows': false,
        'autoplay': true
    });
  </script>
  @endpush