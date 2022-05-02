$(document).ready(function(){

	 toto = $('#present_no').value;


	$( "#present_no").click(function() {
  		$("#horaire").hide( "slow" );
  		$("#nb_people").hide( "slow" );
	});

	$( "#present_yes").click(function() {
  		$("#horaire").show( "slow" );
  		$("#nb_people").show( "slow" );
	});
})