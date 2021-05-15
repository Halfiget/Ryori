
const GalleryFace = document.querySelector(".GalleryFace");
const header = document.querySelector(".header");
const Number1 = document.querySelector(".Number1");
const Adress = document.querySelector(".Adress");

window.onscroll = ()=>{
    this.scrollY > 300 ? GalleryFace.classList.add("active") : GalleryFace.classList.remove("active");
}

window.onscroll = ()=>{
    this.scrollY > 10 ? header.classList.add("active") : header.classList.remove("active");
}




document.getElementById('Registation').addEventListener('click',
    function(){
    document.getElementById("RegistationLink").style.display = "none";
document.querySelector('.container').style.display = 'flex';
});

document.getElementById("CloseEnter").addEventListener("click",
	function(){
		document.querySelector(".container").style.display = "none";

	});

document.getElementById("CloseEnter1").addEventListener("click",
	function(){
		document.getElementById("RegistationLink").style.display = "none";

	});


document.getElementById('linkreg').addEventListener("click",
	function(){
document.querySelector(".container").style.display = "none";



document.getElementById("RegistationLink").style.display = "flex";
	});


document.querySelector('.Registation').addEventListener('click',
    function(){
document.querySelector('.bg-reg').style.display = 'flex';
});

document.getElementById("CloseEnter").addEventListener("click",
	function(){
		document.querySelector(".bg-reg").style.display = "none";

	});

document.getElementById("CloseEnter1").addEventListener("click",
	function(){
		document.querySelector(".bg-reg").style.display = "none";

	});










	