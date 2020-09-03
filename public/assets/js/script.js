const searchBtn    = document.querySelector('.searchBtn');
const keyword      = document.querySelector('.keyword');
const tableSection = document.querySelector('.tableSection');

searchBtn.style.display = 'none';

keyword.addEventListener('keyup', function()
{
	// const xhr = new XMLHttpRequest();

	// xhr.onreadystatechange = function(){
	// 	if (xhr.readyState == 4 && xhr.status == 200)
	// 	{
	// 		tableSection.innerHTML = xhr.responseText;
	// 	}
	// };

	// xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
	// xhr.send();

	//FETCH
	fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
	.then((response) => response.text())
	.then((response) => (tableSection.innerHTML = response));
});