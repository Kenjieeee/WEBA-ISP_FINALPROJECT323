let btn = document.querySelector('#btn')
	let sidebar = document.querySelector('.sidebar')
	let maincontent = document.querySelector('.main-content');

	btn.onclick = function () {
		sidebar.classList.toggle('active');
	};

	function logoutfunc(){
		if(confirm("Are you sure you want to logout?")){
			
		}
	}