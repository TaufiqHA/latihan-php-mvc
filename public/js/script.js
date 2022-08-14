const button = document.querySelector("#button_modal");
const button2 = document.querySelector("#button2_modal");
const modal = document.querySelector("#modal_box");

button.addEventListener('click', function()
{
	modal.classList.remove('set_modal');
	modal.classList.add('hidden_modal');
})

button2.addEventListener('click', function()
{
	modal.classList.remove('hidden_modal');
	modal.classList.add('set_modal');
})