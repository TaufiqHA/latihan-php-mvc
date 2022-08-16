const button = document.querySelector("#button_modal");
const button2 = document.querySelector("#button2_modal");
const button3 = document.querySelector("#button_update");
const button4 = document.querySelector("#button_modal_update")
const modal = document.querySelector("#modal_box");
const update_modal = document.querySelector("#update_modal_box");

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

button3.addEventListener('click', function()
{
	update_modal.classList.remove('hidden_modal');
	update_modal.classList.add('set_modal');
})

button4.addEventListener('click', function()
{
	update_modal.classList.remove('set_modal');
	update_modal.classList.add('hidden_modal');
})