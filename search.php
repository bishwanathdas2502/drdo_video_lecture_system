<?php


	 function search_item($search)
	{
		$lower_search = strtolower($search);
		$cse = array('daa','design & analysis of algorithms','design and analysis of algorithms','theory of computation','flat','c programming','c','artificial intelligence','ai','coa','computer organisation and architecture','computer networks','computer network','natural language processing','nlp','real time systems','real time system','rts' );

		$me = array('fluid mechanics','fluid mechanic','strength of materials','strength of material','design of machine elements','design of machine element','heat and mass transfer','ic engines and gas turbines','ic engine and gas turbine','ic','gas turbine','mechanics Of solid','mos','kinematics of machine','engineering mechanics','engineering mechanic','engineering drawing');

		$ee = array('microwave integrated circuits','microwave integrated circuit','digital system design','non linear dynamical system','power system dynamics and control','power system','non linear','discrete time signal processing','discrete time','discrete time signal','estimation of signals and systems','estimation of signal','estimation of signals');

		$ece = array('advance logic systhesis','advance logic','digital switching','digital system design','advance optical communication','advance optical','digital system','digital vlsi system design','vlsi','rf integrated circuits','rf','broadband networks','broadband','wireless communication','wireless');


		$ce = array('geotechnical earthquake engineering','geotechical earthquake','geotechical','earthquake','ground water hydrology','ground water','watershed management','watershed','siesmic analysis of structures','siesmic analysis','numerical method in ce','numerical method','concrete technology','concrete','soil dynamics','soil','modern construction materials','modern construction','construction','surveying');

		if(in_array($lower_search, $cse))
		{
			header('Location:cse.php');
		}

		else if (in_array($lower_search, $me))
		{
			header('Location:me.php');
		}

		else if (in_array($lower_search, $ee))
		{
			header('Location:ee.php');
		}

		else if (in_array($lower_search, $ece))
		{
			header('Location:ec.php');
		}

		else if (in_array($lower_search, $ce))
		{
			header('Location:ce.php');
		}
		else
		{
			header('Location:notfound.php');
		}
	}

	$submit = $_POST['submit'];

	if(isset($submit))
	{
		$search = $_POST['search'];

		search_item($search);
	}



?>