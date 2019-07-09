var search = ['daa','design & analysis of algorithms','design and analysis of algorithms','theory of computation','flat','c programming','artificial intelligence','ai','coa','computer organisation and architecture','computer networks','computer network','natural language processing','nlp','real time systems','real time system','rts','fluid mechanics','fluid mechanic','strength of materials','strength of material','design of machine elements','design of machine element','heat and mass transfer','ic engines and gas turbines','ic engine and gas turbine','ic','gas turbine','mechanics Of solid','mos','kinematics of machine','engineering mechanics','engineering mechanic','engineering drawing','microwave integrated circuits','microwave integrated circuit','digital system design','non linear dynamical system','power system dynamics and control','power system','non linear','discrete time signal processing','discrete time','discrete time signal','estimation of signals and systems','estimation of signal','estimation of signals','advance logic systhesis','advance logic','digital switching','digital system design','advance optical communication','advance optical','digital system','digital vlsi system design','vlsi','rf integrated circuits','rf','broadband networks','broadband','wireless communication','wireless','geotechnical earthquake engineering','geotechical earthquake','geotechical','earthquake','ground water hydrology','ground water','watershed management','watershed','siesmic analysis of structures','siesmic analysis','numerical method in ce','numerical method','concrete technology','concrete','soil dynamics','soil','modern construction materials','modern construction','construction','surveying'];







	$("#searchbox").autocomplete({
		source: search
	},{
		minLength: 2
	});