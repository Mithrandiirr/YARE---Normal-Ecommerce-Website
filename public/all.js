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
    const span1 = document.getElementById("span-euw");
    const span2 = document.getElementById("span-na");
    const span3 = document.getElementById("span-tr");
    const span4 = document.getElementById("span-br");
    const span5 = document.getElementById("span-eune");
    const span6 = document.getElementById("span-oce");


    const euw = document.querySelectorAll('#euw');
    const na = document.querySelectorAll('#na');
    const oce = document.querySelectorAll('#oce');
    const eune = document.querySelectorAll('#eune');
    const br = document.querySelectorAll('#br');
    const tr = document.querySelectorAll('#tr')
    switch(name){
        case 'euw':
          span1.classList.add('active');
          span2.classList.remove('active');
          span3.classList.remove('active');
          span4.classList.remove('active');
          span5.classList.remove('active');
          span6.classList.remove('active');
          for (i = 0; i < euw.length; i++) {
            euw[i].style.display = "flex";
          }
          for (i = 0; i < na.length; i++) {
            na[i].style.display = "none";
          }
          for (i = 0; i < tr.length; i++) {
            tr[i].style.display = "none";
          }
          for (i = 0; i < oce.length; i++) {
            oce[i].style.display = "none";
          }
          for (i = 0; i < eune.length; i++) {
            eune[i].style.display = "none";
          }
          for (i = 0; i < br.length; i++) {
            br[i].style.display = "none";
          }
            break;
            case 'na' :
              span2.classList.add('active');
              span1.classList.remove('active');
              span3.classList.remove('active');
              span4.classList.remove('active');
              span5.classList.remove('active');
              span6.classList.remove('active');
              for (i = 0; i < euw.length; i++) {
                euw[i].style.display = "none";
              }
              for (i = 0; i < na.length; i++) {
                na[i].style.display = "flex";
              }
              for (i = 0; i < tr.length; i++) {
                tr[i].style.display = "none";
              }
              for (i = 0; i < oce.length; i++) {
                oce[i].style.display = "none";
              }
              for (i = 0; i < eune.length; i++) {
                eune[i].style.display = "none";
              }
              for (i = 0; i < br.length; i++) {
                br[i].style.display = "none";
              }
                break;
                case 'tr' :
                  span3.classList.add('active');
                  span2.classList.remove('active');
                  span1.classList.remove('active');
                  span4.classList.remove('active');
                  span5.classList.remove('active');
                  span6.classList.remove('active');
                  for (i = 0; i < euw.length; i++) {
                    euw[i].style.display = "none";
                  }
                  for (i = 0; i < na.length; i++) {
                    na[i].style.display = "none";
                  }
                  for (i = 0; i < tr.length; i++) {
                    tr[i].style.display = "flex";
                  }
                  for (i = 0; i < oce.length; i++) {
                    oce[i].style.display = "none";
                  }
                  for (i = 0; i < eune.length; i++) {
                    eune[i].style.display = "none";
                  }
                  for (i = 0; i < br.length; i++) {
                    br[i].style.display = "none";
                  }
                    break;
                    case 'br' :
                  span4.classList.add('active');
                  span2.classList.remove('active');
                  span1.classList.remove('active');
                  span3.classList.remove('active');
                  span5.classList.remove('active');
                  span6.classList.remove('active');
                  for (i = 0; i < euw.length; i++) {
                    euw[i].style.display = "none";
                  }
                  for (i = 0; i < na.length; i++) {
                    na[i].style.display = "none";
                  }
                  for (i = 0; i < tr.length; i++) {
                    tr[i].style.display = "none";
                  }
                  for (i = 0; i < oce.length; i++) {
                    oce[i].style.display = "none";
                  }
                  for (i = 0; i < eune.length; i++) {
                    eune[i].style.display = "none";
                  }
                  for (i = 0; i < br.length; i++) {
                    br[i].style.display = "flex";
                  }
                    break;
                    case 'eune' :
                      span4.classList.remove('active');
                      span2.classList.remove('active');
                      span1.classList.remove('active');
                      span3.classList.remove('active');
                      span5.classList.add('active');
                      span6.classList.remove('active');
                      for (i = 0; i < euw.length; i++) {
                        euw[i].style.display = "none";
                      }
                      for (i = 0; i < na.length; i++) {
                        na[i].style.display = "none";
                      }
                      for (i = 0; i < tr.length; i++) {
                        tr[i].style.display = "none";
                      }
                      for (i = 0; i < oce.length; i++) {
                        oce[i].style.display = "none";
                      }
                      for (i = 0; i < eune.length; i++) {
                        eune[i].style.display = "flex";
                      }
                      for (i = 0; i < br.length; i++) {
                        br[i].style.display = "none";
                      }
                        break;
                        case 'oce' :
                          span4.classList.remove('active');
                          span2.classList.remove('active');
                          span1.classList.remove('active');
                          span3.classList.remove('active');
                          span5.classList.remove('active');
                          span6.classList.add('active');
                          for (i = 0; i < euw.length; i++) {
                            euw[i].style.display = "none";
                          }
                          for (i = 0; i < na.length; i++) {
                            na[i].style.display = "none";
                          }
                          for (i = 0; i < tr.length; i++) {
                            tr[i].style.display = "none";
                          }
                          for (i = 0; i < oce.length; i++) {
                            oce[i].style.display = "flex";
                          }
                          for (i = 0; i < eune.length; i++) {
                            eune[i].style.display = "none";
                          }
                          for (i = 0; i < br.length; i++) {
                            br[i].style.display = "none";
                          }
                            break;
        default:
    }

 }
