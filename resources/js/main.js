(function () {
    const startMenu = document.querySelector(".start-menu");
    /* const loader = document.querySelector(".loader-wrapp"); */
    const startMenuBtn = document.querySelector(".logo-vert");
    const date = new Date();
    const timeEl = document.querySelector(".time");
    const time = date.toLocaleTimeString('pt-BR', {
        hour: '2-digit',
        minute: '2-digit'
    });

function maximize() {
    maximize.classList.add.toggle("changement");
}
 


    /* function hideLoader() {
        loader.style.display = "none"
    } */

    function toggleMenu() {
        startMenu.classList.toggle("active");
    }

    /* setTimeout(hideLoader, 3000); */

    startMenuBtn.addEventListener("click", toggleMenu);
    document.addEventListener("click", function (e) {
        
        /* e.preventDefault(); */
        let el = e.target;
        if (el.parent !== startMenu && el !== startMenuBtn && !startMenu.contains(e.target)) {
            startMenu.classList.remove('active');
        }
        
    })

    timeEl.textContent = time;
    

})()

const maximizeArea = document.querySelector(".fichier");

function maximize() {
    maximizeArea.classList.toggle("changement");
}