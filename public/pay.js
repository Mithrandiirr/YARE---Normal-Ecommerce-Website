
// document.getElementById("form1").addEventListener("submit",e => {
//     e.preventDefault()
//     location = "google.com";
//   })

// function btnClick(btn){
//     var stripe = Stripe("pk_test_51JX1BnCwSqIoxRpKqaWSy6nwkGvHgOeaDni97F6R5VGaRi6G8s1BkAty6QNiwuJxtVbrvzlMLPF2OPPFMH3EbZmq00DMLewtGE");
//     const name = btn.getAttribute('data-name');
//     const btnn = document.getElementById("checkout-button")
//     switch (name){
//             case 'paypal' :
//             document.getElementById("form1").addEventListener("submit",e => {
//                 e.preventDefault()

//                 location = "TEST.com";
//               })
//               break;
//               case 'stripe':
//                 btnn.addEventListener('click',function(e) {
//                     e.preventDefault();
//                     stripe.redirectToCheckout({
//                         sessionId: "<?php echo $session->id; ?>"
//                       });
//                     });
//                     break;
//             case 'payop':
//             document.getElementById("form1").addEventListener("submit",e => {
//                 e.preventDefault()
//                 location = "TEST.com";
//               })
//               break;
//             case 'skrill':
//             document.getElementById("form1").addEventListener("submit",e => {
//                 e.preventDefault()
//                 location = "";
//               })
//               break;
//             case 'bpayment' :
//                 document.getElementById("form1").addEventListener("submit",e => {
//                     e.preventDefault()
//                     location = "TEST.com";
//                   })
//                   break;
//             case 'paysera' :
//                 document.getElementById("form1").addEventListener("submit",e => {
//                     e.preventDefault()
//                     location = "HH.com";
//                   })
//                   break;
//                   default:
//     }

// }

const btn = document.querySelector(".close");
const hey = document.getElementById("hey");
      btn.addEventListener("click", function () {
hey.style.display = "none";
 });
