//function expression to select elements
const selectElement =(s)=> document.querySelector(s);
//open the menu on click
selectElement('.open').addEventListener('click', () => {
  selectElement('.nav-list').classList.add('active');
});
//close the menu on click
selectElement('.close').addEventListener('click', ()  => {
selectElement('.nav-list').classList.remove('active');

});
const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".gallery .image");
window.onload = ()=>{ //after window loaded
  filterItem.onclick = (selectedItem)=>{ //if user click on filterItem div
    if(selectedItem.target.classList.contains("item")){ //if user selected item has .item class
      filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
      selectedItem.target.classList.add("active"); //add that active class on user selected item
      let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
        if((filterImges == filterName) || (filterName == "skins")){
          image.classList.remove("hide"); //first remove the hide class from the image
          image.classList.add("show"); //add show class in image
        }else{
          image.classList.add("hide"); //add hide class in image
          image.classList.remove("show"); //remove show class from the image
        }
      });

    }
  }
  for (let i = 0; i < filterImg.length; i++) {
    filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
  }
}





const wrapper = document.querySelector('.wrapper');
const indicators = [...document.querySelectorAll('.indicators button')];

let currentTestimonial = 0; // Default 0

indicators.forEach((item, i) => {
    item.addEventListener('click', () => {
        indicators[currentTestimonial].classList.remove('active');
        wrapper.style.marginLeft = `-${100 * i}%`;
        item.classList.add('active');
        currentTestimonial = i;
    })
})


 function btnClick(btn){
  const name = btn.getAttribute('data-name');
   const skins = document.querySelector('#skinsWarpper');
   const champions = document.querySelector('#championsWarpper');
   const gallery = document.querySelector('#galleryWarpper');
   switch(name){
       case 'skins':
           skins.style.display = 'flex'
           champions.style.display = 'none'
           gallery.style.display = 'none'
           break;
       case 'champions':
           skins.style.display = 'none'
           champions.style.display = 'flex'
           gallery.style.display = 'none'
           break;
           case 'gallery':
             skins.style.display = 'none'
           champions.style.display = 'none'
           gallery.style.display = 'flex'
       default:
   }
 }
