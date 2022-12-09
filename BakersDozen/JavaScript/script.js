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