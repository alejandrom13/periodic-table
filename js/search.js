const searchBar = document.getElementById('searchBar');

searchBar.addEventListener('keyup', (e) =>{
    console.log(e.target.value);
})

function myFunction() {
    document.body.style.background = "#f3f3f3 url('img_tree.png') no-repeat right top";
  }

const SetDarkMode = () => {
    document.body.style.background = "#2b2b2b no-repeat right top";

}