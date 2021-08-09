function initialize(){
	let buttons = document.getElementsByClassName('card-button');
	let navButtons = document.getElementsByClassName("nav-link active");
  	let activatingElements = document.getElementsByClassName("activate");

	/* para cambiar las flechitas de expandir/colapasar */
	for (let i = 0; i < buttons.length; i++) {

		buttons[i].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>';

  		buttons[i].addEventListener("click", function(){
			let state = this.getAttribute("aria-expanded");

			if(state === "true"){
				this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16"><path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/></svg>';
			}
			else{
				this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>';
				}
			}
		)
  	}

  	/* para navegar a cualquier parte que indique la navbar */
  	for (let i = 0; i < navButtons.length -1; i++) {
  		navButtons[i].addEventListener("click", function(){
  			let obj = document.getElementById(this.getAttribute("pointer"))
  			window.scroll(0, findPos(obj) - 30);
  		})
  	}

  	for (let i = 0; i < activatingElements.length; i++) {
  		let element = activatingElements[i]
  		
  		document.addEventListener('scroll', function (){
	    	if(!element.classList.contains('active-'.concat('15')) && isInViewport(element)){
				element.classList.add('active-'.concat('15'));
				}
			}, {passive: true}
		);
  	}

  	window.scroll(0, 0);
}


function isInViewport(element){
	const rect = element.getBoundingClientRect();
	return (
	    rect.top >= 0 &&
	    rect.left >= 0 &&
	    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	    rect.right <= (window.innerWidth || document.documentElement.clientWidth)

	 );
}

function findPos(obj){
    let curtop = 0;

    if (obj.offsetParent){
        
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop];
    }
}

initialize();