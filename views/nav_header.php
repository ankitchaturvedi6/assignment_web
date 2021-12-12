<nav class="flex items-center justify-between flex-wrap bg-teal p-4">
	<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
		<div class="text-lg lg:flex-grow">
			<a href="home" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
				Home
			</a>
			<?php if($_SESSION['level_id'] == 1): ?>
				<a href="admin" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
					Admin
				</a>
			<?php endif; ?>
		</div>
		<div>

			<button class="modal-open bg-transparent border border-white hover:border-white text-black hover:text-white font-bold py-2 px-4 rounded-md text-teal-lighter">Logout</button>
		</div>
	</div>
</nav>


<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
	<div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

	<div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

		<div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
			<svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
				<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
			</svg>
			<span class="text-sm">(Esc)</span>
		</div>

		<!-- Add margin if you want to see some of the overlay behind the modal-->
		<div class="modal-content py-4 text-left px-6">
			<!--Title-->
			<div class="flex justify-between items-center pb-3">
				<p class="text-2xl font-bold">Logout!</p>
				<div class="modal-close cursor-pointer z-50">
					<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
						<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
					</svg>
				</div>
			</div>

			<!--Body-->
			<p>Are you sure you want to logout</p>

			<!--Footer-->
			<div class="flex justify-end pt-2">
				<form method="POST">
					<button name="logout" value="logout" class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Logout</button>
				</form>
				<button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
			</div>

		</div>
	</div>
</div>

<script>
	var openmodal = document.querySelectorAll('.modal-open')
	for (var i = 0; i < openmodal.length; i++) {
		openmodal[i].addEventListener('click', function(event){
			event.preventDefault()
			toggleModal()
		})
	}

	const overlay = document.querySelector('.modal-overlay')
	overlay.addEventListener('click', toggleModal)

	var closemodal = document.querySelectorAll('.modal-close')
	for (var i = 0; i < closemodal.length; i++) {
		closemodal[i].addEventListener('click', toggleModal)
	}

	document.onkeydown = function(evt) {
		evt = evt || window.event
		var isEscape = false
		if ("key" in evt) {
			isEscape = (evt.key === "Escape" || evt.key === "Esc")
		} else {
			isEscape = (evt.keyCode === 27)
		}
		if (isEscape && document.body.classList.contains('modal-active')) {
			toggleModal()
		}
	};


	function toggleModal () {
		const body = document.querySelector('body')
		const modal = document.querySelector('.modal')
		modal.classList.toggle('opacity-0')
		modal.classList.toggle('pointer-events-none')
		body.classList.toggle('modal-active')
	}


</script>
