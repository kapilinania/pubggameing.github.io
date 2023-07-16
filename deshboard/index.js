const sideMenu  = document.querySelector("aside");
const menuBtn  = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
//dark mode variable
const themeToggler  = document.querySelector(".theme-toggler")

//show side BAR
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

//CLOSE side bar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display  = 'none';
})

//change theme0
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');

})

//button onclick active class apply
         var a = document.querySelectorAll(".sidebar a");
            for (var i = 0, length = a.length; i < length; i++) {
              a[i].onclick = function() {
                var b = document.querySelector(".sidebar a .active");
                if (b) b.classList.remove(".active");
                this.classList.add('.active');
              };
            }

            //register page code
            