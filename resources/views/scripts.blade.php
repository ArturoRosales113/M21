 <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
 <script type="text/javascript" src="{{url('js/materialize.min.js')}}"></script>

 <script>
 	$(document).ready(function(){
 		$('.slider').slider({
 			height:650,
 			full_width: true,
 			indicators:false,
 			interval: 12000,
 			transition:2000
 							});
 		$('.carousel').carousel({
 			full_width:true,
 			dist:200,
 			shift:40
 		});
 		$('.materialboxed').materialbox();

 		$('.modal-trigger').leanModal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: .5, // Opacity of modal background
			in_duration: 300, // Transition in duration
			out_duration: 200, // Transition out duration
							});
 		$(".button-collapse").sideNav();
 		$('.parallax').parallax();
 		$('select').material_select();
 		$('.parallax').parallax();
 		$('.collapsible').collapsible({
 			accordion : true
 							});
		$('#proyectosTA');
		$('#proyectosTA').trigger('autoresize');
 	});

 	
 </script>