		function validName() 
		{
			var namev = document.getElementById("name").value;
			var errorv = document.getElementById("errorn");

			if (namev.length < 3) {
				errorv.textContent = "!!! Name must have minimum 4 characters";
				return false;
			}else
			{
				errorv.textContent="";
				return true;
			}
		}

		function validMobile() 
		{
			var mobilev = document.getElementById("mobile").value;
			var errorv = document.getElementById("errorm");

			if (mobilev.length < 10) {
				errorv.textContent = "!!! Mobile must have minimum 10 characters";
				return false;
			}else
			{
				errorv.textContent="";
				return true;
			}
		}

		function validService() 
		{
			var servicev = document.getElementById("service").value;
			var errorv = document.getElementById("errors");

			if (servicev.length < 5) {
				errorv.textContent = "!!! Service must have minimum 5 characters";
				return false;
			}else
			{
				errorv.textContent="";
				return true;
			}
		}

		function validate()
		{
			var namev = document.getElementById("name").value;
			var mobilev = document.getElementById("mobile").value;
			var servicev = document.getElementById("service").value;
			var errorv = document.getElementById("errorsubmit");

			let listerror = document.getElementById("poperror").classList;
			let list = document.getElementById("popup").classList;

			if (namev.length < 3) {
				errorv.textContent = "!!! Please Input the Blanks Correctly";
				listerror.add("open");
				return false;
			}else if (mobilev.length < 10) {
				errorv.textContent = "!!! Please Input the Blanks Correctly";
				listerror.add("open");
				return false;
			}else if (servicev.length < 5) {
				errorv.textContent = "!!! Please Input the Blanks Correctly";
				listerror.add("open");
				return false;
			}else{
				errorv.textContent = "";
				list.add("open");
				return true;
			}
		}

function popout() 
{
	let list = document.getElementById("popup").classList;
	let listerror = document.getElementById("poperror").classList;
  	list.remove("open");
  	listerror.remove("open");
}

