const search = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementsByClassName(".container");
    const item = document.querySelectorAll(".item");
    const name = document.getElementsByTagName("h5");


    for(var i=0; i<name.length; i++){
        let match = item[i].getElementsByTagName('h5')[0];

        if(match){
            let searchvalue = match.textContent || match.innerHTML;
            if(searchvalue.toUpperCase().indexOf(searchbox) > -1){
                item[i].style.display = "";
            }else{
                item[i].style.display = "none";
            }
        }
    }
}

const toggle = document.getElementById('toggleDark');
const body  = document.querySelector('body');
const footer  = document.querySelector('footer');
const card  = document.querySelectorAll('.card');
const navigation  = document.querySelector('nav');


toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon-fill');

    if(!this.classList.toggle('bi-brightness-high-fall')){
        body.style.backgroundColor = "white";
        
    }
    else{
        body.style.backgroundColor = "#29262c";
        body.style.color = "white";
        footer.style.backgroundColor = "#29262c";
        footer.style.color = "white";
        card.forEach((card) =>{
            card.classList.replace("bg-white","cardDark");
        });
        navigation.classList.replace("bg-white","bg-dark");
    }
})

