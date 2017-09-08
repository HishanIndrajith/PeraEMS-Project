
function newpatient(){
	var myWindow = window.open("./newpatient.php","","height=720,width=660,left=60,top=30,scrollbars=no");
}

function viewpatient(){
	var regNo= document.getElementById("regNo").value;
	var addrs1="./viewpatient.php?regNo=";
	var address= addrs1.concat(regNo);
	var myWindow2 = window.open(address,"","height=720,width=700,left=790,top=30,scrollbars=yes");
	//change fields in newpatient window
	var addrs2="./newPatient.php?regNo=";
	var address2= addrs2.concat(regNo);
	var myWindow3= window.open(address2,"","height=720,width=660,left=60,top=30,scrollbars=no");
	self.close ();
	
}

function viewpatient2(){
	var regNo= document.getElementById("search").value;
	var addrs1="./viewpatient.php?regNo=";
	var address= addrs1.concat(regNo);
	var myWindow2 = window.open(address,"","height=720,width=700,left=790,top=30,scrollbars=yes");
	
}

function addMedicinetoList(){
	var medicine= document.getElementById("medicine").value;
	var amount= document.getElementById("amount").value;
	if(medicine!="" && amount != "" && amount > 0){
		var iframe= document.getElementById("iframe1");
		var innerDoc= iframe.contentDocument || iframe.contentWindow.document;
		var table= innerDoc.getElementById("medicineTable");
		var row=table.insertRow(1);
		var cell1=row.insertCell(0);
		var cell2=row.insertCell(1);
		cell1.innerHTML= medicine;
		cell2.innerHTML= amount;
	}
	
}

function addtreatment(){
	var regNo= document.getElementById("regNo").value;
	var illness= document.getElementById("illness").value;
	var prescribe= document.getElementById("prescribe").checked;
	var note1= document.getElementById("note1").value;
	
	var addrs1="./newpatientresult.php?regNo=";
	var addrs2= addrs1.concat(regNo);
	addrs2= addrs2.concat("&illness=");
	addrs2= addrs2.concat(illness);
	addrs2= addrs2.concat("&prescribe=");
	addrs2= addrs2.concat(prescribe);
	addrs2= addrs2.concat("&note1=");
	var final= addrs2.concat(note1);
	var myWindow3 = window.open(final,"","height=200,width=400,left=300,top=50,scrollbars=no");
	self.close ();
}

function releasepatient(){
	var myWindow = window.open("releasepatient.php","","height=300,width=500,left=400,top=60,scrollbars=no");
}

function residentlist(){
	var myWindow = window.open("residentlist.php","","height=700,width=1300,left=50,top=30,scrollbars=yes");
}
function treatmentlist(){
	var myWindow = window.open("treatmentlist.php","","height=700,width=1300,left=50,top=30,scrollbars=yes");
}