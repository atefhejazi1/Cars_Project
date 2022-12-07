var noti = document.querySelector('h1');
var select = document.querySelector('.select');
var button = document.getElementsByTagName('button');
var arr = [];

for (var but of button) {
	but.addEventListener('click', (e) => {
		var add = Number(noti.getAttribute('data-count') || 0);
		noti.setAttribute('data-count', arr.length +1);
		console.log(arr.length);
		noti.classList.add('zero')
		// copy and paste //
		var parent = e.target.parentNode;
		var clone = parent.cloneNode(true);
		clone.onclick = () => {
			var removenum = Number(noti.getAttribute('data-count') || 0);
			noti.setAttribute('data-count', removenum - 1);
			noti.classList.add('zero')
			clone.style.display = 'none';
		}
		arr.push(clone)
		localStorage.setItem("lastname", arr);
		let lastname = localStorage.getItem("lastname");
		
		select.appendChild(clone);
		clone.lastElementChild.innerText = "Buy-now";
		
		if (clone) {
			noti.onclick = () => {
				select.classList.toggle('display');
				select.appendChild(lastname)
			}
		}	
	})
}



