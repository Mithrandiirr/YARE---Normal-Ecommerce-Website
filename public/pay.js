
// document.getElementById("form1").addEventListener("submit",e => {
//     e.preventDefault()
//     location = "google.com";
//   })

function btnClick(btn){
    const name = btn.getAttribute('data-name');
    switch (name){
            case 'paypal' :
            document.getElementById("form1").addEventListener("submit",e => {
                e.preventDefault()
                location = "TEST.com";
              })
              break;
              case 'stripe':
                document.getElementById("form1").addEventListener("submit",e => {
                    e.preventDefault()
                    location = "https://buy.stripe.com/test_14kdTw4Cn61mcMwfYY";})
                    break;
            case 'payop':
            document.getElementById("form1").addEventListener("submit",e => {
                e.preventDefault()
                location = "TEST.com";
              })
              break;
            case 'skrill':
            document.getElementById("form1").addEventListener("submit",e => {
                e.preventDefault()
                location = "";
              })
              break;
            case 'bpayment' :
                document.getElementById("form1").addEventListener("submit",e => {
                    e.preventDefault()
                    location = "TEST.com";
                  })
                  break;
            case 'paysera' :
                document.getElementById("form1").addEventListener("submit",e => {
                    e.preventDefault()
                    location = "HH.com";
                  })
                  break;
                  default:
    }

}

const btn = document.querySelector(".close");
const hey = document.getElementById("hey");
      btn.addEventListener("click", function () {
hey.style.display = "none";
 });
