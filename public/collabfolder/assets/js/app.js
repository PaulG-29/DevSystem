
document.querySelector('.btn-copy').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.querySelector('.content-copy').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}


document.getElementById('btn-copya').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.getElementById('content-copya').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}

document.getElementById('btn-copya1').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.getElementById('content-copya1').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}

document.getElementById('btn-copya2').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.getElementById('content-copya2').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}

document.getElementById('btn-copya3').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.getElementById('content-copya3').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}

document.getElementById('btn-copya4').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.querySelector('highlight').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}


document.getElementById('btn-copya5').onclick = function() {
  let _this = this;
  navigator.clipboard.writeText(document.getElementById('content-copya5').textContent)
  let copied = navigator.clipboard.readText() 
  .then(function() {
      _this.innerText = 'Copied 📋'

      setTimeout(function() {
        _this.innerText = '📋Copy'
      }, 1000);
  })
  console.log(copied);
}




// $(document).ready(function() {
//   $(document).on("click", ".btn-copy", function() {
//     let cat = $(this).data("cat");
//     let sub_cat = $(this).data("sub-cat");
//       let copy_text = $(".cat-" + cat + ".sub-cat-" + sub_cat + ".content-copy").text();
//       navigator.clipboard.writeText(copy_text);
//       console.log(cat, sub_cat, copy_text);


//   });
// });



// var chatbox = document.getElementById('fb-customer-chat');
// chatbox.setAttribute("page_id", "102383912541320");
// chatbox.setAttribute("attribution", "biz_inbox");


// window.fbAsyncInit = function() {
// 	FB.init({
// 	  xfbml            : true,
// 	  version          : 'v14.0'
// 	});
//   };

//   (function(d, s, id) {
// 	var js, fjs = d.getElementsByTagName(s)[0];
// 	if (d.getElementById(id)) return;
// 	js = d.createElement(s); js.id = id;
// 	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
// 	fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));