   function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}



function change_mode(){
  let mt=document.querySelector('.mode-toggle');
  let lt=document.querySelector('#light');
  let st=document.querySelector('#style-toggle');

   if(getCookie("mode")=="dark"){
    console.log("dmode=",getCookie("mode"));
    st.href="style.css";
    mt.childNodes[0].innerHTML="light_mode";
  mt.style.background="black";
  mt.style.border="2px solid white";
  lt.style.color="white";
    //check();
  }
  else if(getCookie("mode")=="light"){
    console.log("lmode=",getCookie("mode"));
    st.href="light-mode.css";
    

  mt.childNodes[0].innerHTML="dark_mode";
  mt.style.background="white";
  mt.style.border="2px solid black";
  lt.style.color="black";
    //check();
  }
  else{
      document.cookie = "mode=dark; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/";
  }
  $(mt).hover(function(){
    console.log("working lt");
    $(this).css("cursor", "pointer");
    if(mt.childNodes[0].innerHTML=="light_mode")
    {
        console.log("working lt");
        $(this).css("background", "white");
    $(this).css("border", "none");
    $(lt).css("color", "black");
    
  }
  else{
    console.log("working bl");
    $(this).css("background", "black");
    $(this).css("border", "2px solid black");
    $(lt).css("color", "white");
  }
    },
    function(){
    console.log("working lt");
    $(this).css("cursor", "pointer");
    if(mt.childNodes[0].innerHTML=="light_mode")
    {
        console.log("working lt");
        $(this).css("background", "black");
    $(this).css("border", "2px solid white");
    $(lt).css("color", "white");
        
    
  }
  else{
    console.log("working bl");
    $(this).css("background", "white");
    $(this).css("border", "2px solid black");
    $(lt).css("color", "black");
  }
    });
  mt.addEventListener('click',function check(){
//console.log(mt.childNodes[0].innerHTML);
//function check(){
 if(mt.childNodes[0].innerHTML=="light_mode"){
  mt.childNodes[0].innerHTML="dark_mode";
  mt.style.background="white";
  mt.style.border="2px solid black";
  lt.style.color="black";
//   st.href="style.css";
  st.href="light-mode.css";
  document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/";
//console.log("mode=",setCookie("mode","light","100000"));
console.log("mode=",getCookie("mode"));
}
else{
  mt.childNodes[0].innerHTML="light_mode";
  mt.style.background="black";
  mt.style.border="2px solid white";
  lt.style.color="white";
//   st.href="light-mode.css";
st.href="style.css";
document.cookie = "mode=dark; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/";
//console.log("mode=",setCookie("mode","light","100000"));
console.log("mode=",getCookie("mode"));
}
}
  );
}


function change_mode_in(){
  let mt=document.querySelector('.mode-toggle');
  let lt=document.querySelector('#light');
  let st=document.querySelector('#style-toggle');
  //document.cookie = "mode=dark; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/";
 
  if(getCookie("mode")=="dark"){
    console.log("dmode=",getCookie("mode"));
    st.href="../style.css";
    mt.childNodes[0].innerHTML="light_mode";
  mt.style.background="black";
  mt.style.border="2px solid white";
  lt.style.color="white";
    //check();
  }
  else{
    console.log("lmode=",getCookie("mode"));
    st.href="../light-mode.css";
    

  mt.childNodes[0].innerHTML="dark_mode";
  mt.style.background="white";
  mt.style.border="2px solid black";
  lt.style.color="black";
    //check();
  }
  $(mt).hover(function(){
    console.log("working lt");
    $(this).css("cursor", "pointer");
    if(mt.childNodes[0].innerHTML=="light_mode")
    {
        console.log("working lt");
        $(this).css("background", "white");
    $(this).css("border", "none");
    $(lt).css("color", "black");
    
  }
  else{
    console.log("working bl");
    $(this).css("background", "black");
    $(this).css("border", "2px solid black");
    $(lt).css("color", "white");
  }
    },
    function(){
    console.log("working lt");
    $(this).css("cursor", "pointer");
    if(mt.childNodes[0].innerHTML=="light_mode")
    {
        console.log("working lt");
        $(this).css("background", "black");
    $(this).css("border", "2px solid white");
    $(lt).css("color", "white");
        
    
  }
  else{
    console.log("working bl");
    $(this).css("background", "white");
    $(this).css("border", "2px solid black");
    $(lt).css("color", "black");
  }
    });
  mt.addEventListener('click',function check(){
//console.log(mt.childNodes[0].innerHTML);
//function check(){
 if(mt.childNodes[0].innerHTML=="light_mode"){
  mt.childNodes[0].innerHTML="dark_mode";
  mt.style.background="white";
  mt.style.border="2px solid black";
  lt.style.color="black";
//   st.href="style.css";
  st.href="../light-mode.css";
  document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/";
  //document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/admin";
  // document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/student";
  //document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/handler";
//console.log("mode=",setCookie("mode","light","100000"));
console.log("mode=",getCookie("mode"));
}
else{
  mt.childNodes[0].innerHTML="light_mode";
  mt.style.background="black";
  mt.style.border="2px solid white";
  lt.style.color="white";
//   st.href="light-mode.css";
st.href="../style.css";
document.cookie = "mode=dark; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/";
//document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/admin";
  // document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/student";
  //document.cookie = "mode=light; expires=Thu, 31 Dec 2050 12:00:00 UTC; path=/handler";
//console.log("mode=",setCookie("mode","light","100000"));
console.log("mode=",getCookie("mode"));
}
}
  );
}


function scrolling(){
let calcScrollValue = () => {
  let scrollProgress = document.getElementById('progress');
  let progressValue = document.getElementById('progress-value');
  let pos = window.pageYOffset;
  // pos=progressValue.scrollValue;
 let calcHeight= document.documentElement.scrollHeight- document.body.clientHeight;
  let scrollvalue = Math.round((pos * 100) / calcHeight);
 //console.log(scrollvalue);
  if(pos > 100){
      if(scrollProgress!=null)
    scrollProgress.style.display="grid";
  }
  else {
      if(scrollProgress!=null)
    scrollProgress.style.display="none";
  }
if(scrollProgress!=null)
scrollProgress.addEventListener("click", () => {
  //console.log("clicked");
  document.body.scrollTop=0;
  //window.pageYOffset
});
if(scrollProgress!=null)
scrollProgress.style.background=`conic-gradient(#66fcf1 ${scrollvalue}%, #1f2833  ${scrollvalue}%)`
};
window.onscroll = calcScrollValue;
window.onload= calcScrollValue;
}

//sign in

function infologValidate(){
let validate=false;
let usernamee=document.querySelector("#lluse");
let passwordd=document.querySelector('#llpas');
// console.log("hello");
// console.log(usernamee.value);
// console.log(passwordd.value);
// console.log(stud_account.stu_username);
// console.log(stud_account.stu_pass);
//instead fire an query to search user name 
//and then check if the password which is entered has the same password in the datatbase of the corresponding username
// let duse=stud_account.stu_username;
// let dpas=stud_account.stu_pass;

if(usernamee.value==stud_account.stu_username && passwordd.value==stud_account.stu_pass)
{
  validate=true;
  console.log(validate);
  if(validate){
    window.location.href="index.php";
  }
}

// duse=stud_account.hand_username;
//  dpas=stud_account.hand_pass;

else if(usernamee.value==handler.hand_username && passwordd.value==handler.hand_pass)
{
  validate=true;
  console.log(validate);
  if(validate){
    window.location.href="indexh.php";
  }
}

//  duse=stud_account.adm_username;
//  dpas=stud_account.adm_pass;

else if(usernamee.value==admin.adm_username && passwordd.value==admin.adm_pass){
  validate=true;
  console.log(validate);
  if(validate){
    window.location.href="indexa.php";
  }
}


else
{
  alert("Please enter valid credientials");
}


// const formToReset = document.getElementById('form_id');
// formToReset.addEventListener('submit', (e) => {
//    e.preventDefault();
//    formToReset.reset();
// //    output.innerHTML += "The form is resetted successfully!"
// });


usernamee.value="";
passwordd.value="";

}


// function clear(){
// usernamee.value


// }






// const student={
//   control_id:"2019040668",
//   roll_no:"3944A090",
//   register_no:"194",
//   otp:"1221"
// }
// const stud_account={
//   stu_username:"franky_super",
//   stu_phoneno:"rujiihelpdesk@gmail.com",
//   stu_pass:"hi123",
//   stu_control_id:"2019040668",
//   stu_roll_no:"3944A090"
// }



//sign up

// function infoValidate(){
//   // chrome.runtime.onMessage.addListener((msg, sender, sendResponse) => {
//   //   doSomethingWithoutResponding(msg);
//   // });
// let valid=false;
// // alert("infoValidate");
// let controlidr=document.querySelector("#rrcid");
// let rollnor=document.querySelector("#rrrno");
// let phonenor=document.querySelector("#rrpno");
// let countnn=0;
// for(let i=0;i<phonenor.value.length;i++)
//     {
// // let str=s.substring(i,i+1);
// let str=phonenor.value.charAt(i);
//  if(typeof parseInt(str, 10) === 'number')
//  {
//    countnn+=1;
//  }
// }
// // console.log(countnn);
// if(controlidr.value!=student.control_id)
// {
//   alert("Invalid control id");
// }
// else if(rollnor.value!=student.roll_no)
// {
//   alert("Invalid Roll no");
// }
// else if(phonenor.value.length!=10){
//  alert("Invalid phone number. There should be 10 digits");
// }
// else if(countnn!=10){
//  alert("Invalid phone number. There should be no characters.");
// }
// else{
//   //storing in database after validation
//   stud_account.stu_phoneno = phonenor.value;
//   stud_account.stu_control_id=controlidr.value;
//   stud_account.stu_roll_no=rollnor.value;



//   // fetch('main.php', {
//   //   method: 'POST',
//   //   headers: {
//   //     'Content-Type': 'application/json'
//   //   },
//   //   body: JSON.stringify(data)
//   // })

//   // .then((response)=>{
//   //   return response.json();
//   // }).then((data)=>{
//   //   return console.log(data);
//   // }).catch((error)=>{
//   //   return  error.json();
//   // });
  
//   valid=true;
// }

//   if(valid)
//   changetoVerification();
// }
// function changetoVerification(){
// let first= document.querySelector(".sign-up-cont");
// let sec= document.querySelector(".verify-fake");
// // console.log(first);
// first.remove();
// first= document.querySelector(".sign-up-fake");
// first.remove();
// sec.style.display="block";
// sec= document.querySelector(".verify-cont");
// sec.style.display="block";
// }
// function toVerification(){
//   let verification=false;
//   // alert("toVerification");
//   // console.log("toVerification");
//   //checking the 
//   let otpr=document.querySelector("#rrotp");
//   if(otpr.value!=student.otp){
//     alert("Invalid otp");
//   }
//   else{
//     verification=true;  
//   }
//   if(verification)
//     changetoUsername();

// }
// function changetoUsername(){
//   let first= document.querySelector(".verify-cont");
// let sec= document.querySelector(".user-fake");
// // console.log(first);
// first.remove();
// first= document.querySelector(".verify-fake");
// first.remove();
// sec.style.display="block";
// sec= document.querySelector(".user-cont");
// sec.style.display="block";


// // document.getElementById("nextuse").onclick = function () {
// //   alert("Account created. Please login again");
// //   location.href = "login.html";
// // };


// // toUsername();
// }


// function loginagain(){
//   alert("Account created. Please Sign in again");
// }



// // const student={
// //   control_id:"2019040668",
// //   roll_no:"3944A090",
// //   register_no:"194",
// //   otp:"1221"
// // }


// function toUsername(){
//   // alert("toUsername");
//   let validate=false;
//   let usernamer =document.querySelector("#rruse");
//   let passwordr =document.querySelector("#rrpas");
 


//   //username validation


//   if(usernamer.value.length>20)
//   {
//     alert("Username length must not exceed 20 characters");
//   }
//   else{
// let s=usernamer.value;let counta=0;let countn=0;
// let countc=0;let invalid=0;
//     for(let i=0;i<usernamer.value.length;i++)
//     {
// // let str=s.substring(i,i+1);
// let str=s.charAt(i);
// // console.log(str);
// // if(str.isLetter())
// if((/[a-zA-Z]/).test(str))
// {
//   counta+=1;
// }

// // 
// else if(str=='_')
// {
//   countc+=1;
// }
// // else if(typeof parseInt(str, 10) === 'number')

// else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
// {
//   countn+=1;
// }
// else{
//   invalid=1;
//   break;
// }
//     }
//     if(invalid==1)
//     {
//       alert("In username, No space or special character allowed, except underscore(_)");
//     }
//     else if(counta==0)
//     {
//       alert("In username, Minimum one alpahbet required");
//     }
//     else if(countn==0)
//     {
//       alert("In username, Minimum one number required");
//     }
//     // else{
//     //   validate=true;
//     // }


//     // validate=true;
//   }
  
//   //password validation

//   if(passwordr.value.length<8)
//   {
//     alert("Password should not be less than 8 characters");
//   }
//   else{
// let s=passwordr.value;let counta=0;let countn=0;
// let countc=0;let invalid=0;
//     for(let i=0;i<passwordr.value.length;i++)
//     {
// // let str=s.substring(i,i+1);
// let str=s.charAt(i);
// // console.log(str);
// // if(str.isLetter())
// if((/[a-zA-Z]/).test(str))
// {
//   counta+=1;
// }

// // 
// else if(str==' ')
// {
//   invalid=1;
// }
// else if(str=='0' ||str=='1' ||str=='2' ||str=='3' ||str=='4' ||str=='5' ||str=='6' ||str=='7' ||str=='8' ||str=='9')
// {
//   countn+=1;
// }
// else{
//   // invalid=1;
//   // break;
//   countc+=1;
//   console.log(countc);
// }
// }
//     if(invalid==1){
//       alert("In password, No space character allowed");
//     }
//     else if(counta==0)
//     {
//       alert("In password, Minimum one alpahbet required");
//     }
//     else if(countn==0)
//     {
//       alert("In password, Minimum one number required");
//     }
//     else if(countc==0)
//     {
//       alert("In password, Minimum one special character required");
//     }
  
   
//     else{
//       validate=true;
//     }


//     // validate=true;
//   }

  
//   // console.log(validate);
//   if(validate){

//     loginagain();
//     window.location.href="home.php";
//   }
//   // console.log("toUsername");
  

// }









//contact us

function refresh(){
let output = document.getElementById('output');
const formToReset = document.getElementById('form_id');
formToReset.addEventListener('submit', (e) => {
   e.preventDefault();
   formToReset.reset();
//    output.innerHTML += "The form is resetted successfully!"
});
}











//profile 

// const stu_user ={
//   user_name:"franky_super7",     
//   control_id:"2019060686",
//   roll_no:"3944A024",
//   phone_no:"123456789",
//   pass_word:"hi123"
// }
// let tempp="";let  password =""; let  phoneno="";

// function changedDetails(){
//   // let  username = document.querySelector('#contentHolderusee');
//   //      username.innerText = stu_user.user_name;
//   //      let  controlid = document.querySelector('#contentHoldercid');
//   //      controlid.innerText = stu_user.control_id;
//   //      let  rno = document.querySelector('#contentHolderrno');
//   //      rno.innerText = stu_user.roll_no;
//   phoneno = document.querySelector('#mcontentHolderpno');
//   password = document.querySelector('#mcontentHolderpas');
//   stu_user.phone_no =  phoneno.value;
//   stu_user.pass_word =  password.value;
//   console.log(phoneno.innerText);
//   console.log(password.innerText);
//          phoneno = document.querySelector('#contentHolderpno');
//        phoneno.innerText = stu_user.phone_no;
//         password = document.querySelector('#contentHolderpas');
//        let temp="";
//        for(let i1=0; i1<stu_user.pass_word.length; i1++)
//        {
//         temp=temp+"●";
//        }
//        console.log(temp);
//        password.innerText = temp;
//        tempp=temp;
//        alert("The changes have been updated");
//       //  fetchinfo();
// }

// function fetchinfo(){
//        let  username = document.querySelector('#contentHolderusee');
//        username.innerText = stu_user.user_name;
//        let  controlid = document.querySelector('#contentHoldercid');
//        controlid.innerText = stu_user.control_id;
//        let  rno = document.querySelector('#contentHolderrno');
//        rno.innerText = stu_user.roll_no;
//          phoneno = document.querySelector('#contentHolderpno');
//        phoneno.innerText = stu_user.phone_no;
//         password = document.querySelector('#contentHolderpas');
//       //  let temp="";
//        for(let i1=0; i1<stu_user.pass_word.length; i1++)
//        {
//         tempp=tempp+"●";
//        }
//        console.log(tempp);
//        password.innerText = tempp;//stu_user.pass_word;
//       //  temp="";
//       //  console.log(stu_user.pass_word);
// }

// function hidechange(){
//   // console.log("reachedhc");
//   password = document.querySelector('#contentHolderpas');
//   let btn= document.querySelector('#eye1');
//   if(btn.style.display != 'none'){
// btn.style.display = 'none';
// // password.innerText = stu_user.pass_word;
// // console.log(password.innerText);
//   }
//   else if(btn.style.display == 'none'){
//     password.innerText = tempp;
//     btn.style.display = 'block';   
//       }
//   btn = document.querySelector('#eye2');
//   if(btn.style.display == 'none'){
//     password.innerText = stu_user.pass_word;
// btn.style.display = 'block';
//   }
//   else  if(btn.style.display != 'none'){
//     btn.style.display = 'none';
//       }
// }


// function editProfile(){
// const openModalButtons = document.querySelectorAll('[data-modal-target]');
// const closeModalButtons = document.querySelectorAll('[data-close-button]');
// const overlay= document.getElementById('overlay');

// openModalButtons.forEach(button => 
//   button.addEventListener('click',()=>{
//     const modal = document.querySelector(button.dataset.modalTarget);
//     openModal(modal);
//   }))

// overlay.addEventListener('click',()=>{
//   const modals = document.querySelectorAll('.modal.active');
//   modals.forEach(modal => {
//     closeModal(modal)
// })
// })
// closeModalButtons.forEach(button => 
//   button.addEventListener('click',()=>{
//   const modal = button.closest('.modal');
//   closeModal(modal)
//   }))

// function openModal(){
//   if(modal==null) return
//   modal.classList.add('active');
//   overlay.classList.add('active');
// }
// function closeModal(){
//   if(modal==null) return
//   modal.classList.remove('active');
//   overlay.classList.remove('active');
// }

// //putting details in modal
// let  username = document.querySelector('#mcontentHolderusee');
// username.innerText = stu_user.user_name;
// let  controlid = document.querySelector('#mcontentHoldercid');
// controlid.innerText = stu_user.control_id;
// let  rno = document.querySelector('#mcontentHolderrno');
// rno.innerText = stu_user.roll_no;
//  phoneno = document.querySelector('#mcontentHolderpno');
// phoneno.innerText = stu_user.phone_no;
//  password = document.querySelector('#mcontentHolderpas');
//  password.innerText = stu_user.pass_word;
// }



//side bar

var menu;
function makeactive(k){
  
  
  switch(k)
  {
    case 1:
      {
        menu = document.getElementById('m1');
  menu.classList.add('activee'); 
    break;
      }
    case 2:
      {
        
       menu = document.getElementById("m2");
      menu.classList.add("activee");
      break;
      }
      case 3:
        {
          
     menu = document.getElementById("m3");
    menu.classList.add("activee");
    break;
        }
    case 4:
      {
       
     menu = document.getElementById("m4");
    menu.classList.add("activee");
    break;
      }
    case 5:
      {
       
     menu = document.getElementById("m5");
    menu.classList.add("activee");
    break;
      }
    case 6:
      {
        
     menu = document.getElementById("m6");
    menu.classList.add("activee");
    break;
      }

  }
}
  






// for student  post code

// function PostValidate(){
//   let ptitle= document.getElementById("titp").value;
//   let pdes= document.getElementById("desp").value;
//     if(ptitle==""){
//       alert("Please enter the title");
    
//     }
//    if(pdes==""){
//       alert("Please enter the description");
//     }
//     else{
//   if(confirm("Are you sure you want to post"))
//   {
//     alert("This will be posted after it gets verified");
//   }
//     }
//   }


//for handler posth code
// class post{
//   constructor(post_id,post_title,post_desc,post_username,post_date,posted_date,post_count,post_status){
//     this.post_id = post_id;
//     this.post_title = post_title;
//     this.post_desc = post_desc;
//     this.post_username = post_username;
//     this.post_date = post_date;
//     this.posted_date = posted_date;
//     this.post_count = post_count;
//     this.post_status = post_status;
    
//   }
// }



var bodyp,divp;var post_new;
function addtitle()
{
  const posttitle = document.createElement("div");
  posttitle.innerText ="Title";
   posttitle.setAttribute('id','post-title');
   posttitle.classList.add('post-con-itm');
  divp.appendChild(posttitle);
  let para = document.createElement("p");
  para.setAttribute('id','contentHoldertit');
   //  para.innerText = post_new.post_title;
     posttitle.appendChild(para);
}
function adddesc(){
  const postdesc = document.createElement("div");
  postdesc.innerText ="Description";
   postdesc.setAttribute('id','post-desc');
   postdesc.classList.add('post-con-itm');
  divp.appendChild(postdesc);
   para = document.createElement("p");
  para.setAttribute('id','contentHolderdes');
  
   //  para.innerText = post_new.post_desc;
     postdesc.appendChild(para);
}
function adduse(){
  const postuse = document.createElement("div");
  postuse.innerText ="Username";
 
   postuse.setAttribute('id','post-usenamee');
   postuse.classList.add('post-con-itm');
   postuse.style.width='fit-content';
  divp.appendChild(postuse);
   para = document.createElement("p");
  para.setAttribute('id','contentHolderuse');
  
   //  para.innerText = post_new.post_username;
     postuse.appendChild(para);
}
function addpostdate()
{
  const postdate = document.createElement("div");
  postdate.innerText ="Post Date";
   postdate.setAttribute('id','post-date');
   postdate.classList.add('post-con-itm');
  divp.appendChild(postdate);
   para = document.createElement("p");
  para.setAttribute('id','contentHolderpstd');
  
    // para.innerText = post_new.post_date;
     postdate.appendChild(para);
}
function addposteddate(){
  const posteddate = document.createElement("div");
     posteddate.innerText ="Verified Date";
      posteddate.setAttribute('id','posted-date');
      posteddate.classList.add('post-con-itm');
     divp.appendChild(posteddate);
      para = document.createElement("p");
     para.setAttribute('id','contentHolderpstdd');
     
      //  para.innerText = post_new.posted_date;
        posteddate.appendChild(para);
}
function addpostid(){
  const postid = document.createElement("div");
  postid.innerText ="Post Id";
   postid.setAttribute('id','post-id');
   postid.classList.add('post-con-itm');
  divp.appendChild(postid);
   para = document.createElement("p");
  para.setAttribute('id','contentHolderpsid');
  
 //    para.innerText = post_new.post_id;
     postid.appendChild(para);
}
function addposttvote(){
  let postvote = document.createElement("button");
  postvote.innerText ="Vote";
   postvote.setAttribute('id','post-vote');
   postvote.classList.add('post-con-itm','submi');
    // postvote.classList.add('submi');
  divp.appendChild(postvote);
  let count = document.createElement("div");
  count.setAttribute('id','post-count');
  count.classList.add('post-con-itm');
//  count.innerText=post_new.post_count;
  postvote.appendChild(count);
  postvote.addEventListener("click",e =>{
    countincphp(e);
  });
}
function addposttvoteh(){
  let postvote = document.createElement("p");
  postvote.innerText ="Total Votes: ";
   postvote.setAttribute('id','post-vote-disp');
   postvote.classList.add('post-con-itm');
    // postvote.classList.add('submi');
  divp.appendChild(postvote);
  let count = document.createElement("p");
  count.setAttribute('id','post-count-disp');
  count.classList.add('post-con-itm');
 //count.innerText=post_new.post_count;
   postvote.appendChild(count);
//   postvote.addEventListener("click",e =>{
//     countincphp(e);
//   });
}

function addposttvotea(){

  box = document.createElement("div");
  box.classList.add('box');
 divp.appendChild(box);

  let postvote = document.createElement("button");
  postvote.innerText ="Vote";
  postvote.setAttribute('id','post-verify');
  postvote.classList.add('post-con-itm','submi');
    // postvote.classList.add('submi');
  box.appendChild(postvote);
  let count = document.createElement("div");
  count.setAttribute('id','post-count');
  count.classList.add('post-con-itm');
//  count.innerText=post_new.post_count;
///postvote.style.alignSelf="left";
//postvote.style.marginLeft="-30%";
  postvote.appendChild(count);
  postvote.addEventListener("click",e =>{
    countincphp(e);
  });
}


//localStorage.setItem("flag", "0");
function countincphp(e){
//  console.log(e.target.parentNode.childNodes[3].lastChild);
  let votee =e.target.parentNode.childNodes[4].lastChild.innerText;
  //console.log(votee);
 //votee=parseInt(votee)+1;

 // console.log(votee);
//  let flagg=localStorage.setItem("flag");
//session_start();
//var sess_use = "<?php echo $_SESSION['USERNAME']?>";
let iuu=document.querySelector('#indexusername');
console.log(iuu.innerText);
  jQuery.ajax({
  
    type: 'POST',
    url: 'index_voteupdate.php',
   // data: {vote:votee,pid:e.target.parentNode.childNodes[5].lastChild.innerText},
    data: {use:iuu.innerText,pid:e.target.parentNode.childNodes[3].lastChild.innerText},
    success:function(data){
      console.log(data);
      if(data=='NV'){
        alert("vote not updated");
      }
      else if(data=='AV'){
        alert("already voted");

      }
     else if(Number.isInteger(parseInt(data))){
     // console.log(e.target.parentNode.childNodes[5].lastChild);
       alert("vote added");
       e.target.parentNode.childNodes[4].lastChild.innerText=data;
       window.location.reload();
       e.target.parentNode.childNodes[4].disabled=true;
   //    localStorage.setItem("flag", "1");
    
   
    
    // else{
    //   alert("some issue");
    // }
  }
  else{
    alert("some issue");
  }
    }
  });
}


var box ;
function addremove()
{
  //  box = document.createElement("div");
  //  box.classList.add('box');
  divp.appendChild(box);

  postremove = document.createElement("button");
  postremove.innerText ="Remove";
   postremove.setAttribute('id','post-rem');
   postremove.classList.add('post-con-itm','submi');
  
    // postvote.classList.add('submi');
    box.appendChild(postremove);
    // postremove.addEventListener("click",e =>{
    //   removepost(e);
    // })
    postremove.addEventListener("click",e =>{
      removepostphp(e);
    });
}
function addremoveR()
{
  //  box = document.createElement("div");
  //  box.classList.add('box');
  divp.appendChild(box);

  postremove = document.createElement("button");
  postremove.innerText ="Delete";
   postremove.setAttribute('id','post-rem');
   postremove.classList.add('post-con-itm','submi');
  
    // postvote.classList.add('submi');
    box.appendChild(postremove);
    // postremove.addEventListener("click",e =>{
    //   removepost(e);
    // })
    postremove.addEventListener("click",e =>{
      deletepostphp(e);
    });
}
function addremovea()
{
   box = document.createElement("div");
   box.classList.add('box');
  divp.appendChild(box);

  postremove = document.createElement("button");
  postremove.innerText ="Remove";
   postremove.setAttribute('id','post-rem');
   postremove.classList.add('post-con-itm','submi');
  box.style.alignSelf ="center";
    // postvote.classList.add('submi');
    box.appendChild(postremove);
    // postremove.addEventListener("click",e =>{
    //   removepost(e);
    // })
    postremove.addEventListener("click",e =>{
      removepostphp(e);
    });
}

//posth code  
var postverify;var ppid=0;var ppid2=0;
function verifypost(){
 box = document.createElement("div");
 box.classList.add('box');
 divp.appendChild(box);

  postverify = document.createElement("button");
  postverify.innerText ="Verify";
   postverify.setAttribute('id','post-verify');
   postverify.classList.add('post-con-itm','submi');
  
    // postvote.classList.add('submi');
    box.appendChild(postverify);
    // console.log(ppid);
    postverify.addEventListener("click",
    e => {addverify(e);},true);
    postverify.addEventListener("click",
    e => {addverifyphp(e);},true);
      // console.log(ppid+10);
 

}
function addverifyphp(e){
//console.log(e.target.parentNode.parentNode.childNodes[2].lastChild);
jQuery.ajax({

  type: 'POST',
  url: '../handler/posth_verify.php',
  data: {puse:e.target.parentNode.parentNode.childNodes[2].lastChild.innerText,pid:e.target.parentNode.parentNode.childNodes[5].lastChild.innerText},
  success:function(data){
  if(data=='V'){
    console.log("verify added");
  }
  else if(data=='NV'){
    alert("not verified");
  }
  else{
    alert("some issue");
  }
  }
});
}
// function removepost(e)
// {
//   if(confirm("Are you sure you want to Remove"))
//   {
// // let temp=ppid.toString();
// // var postemp= document.getElementById(temp);
// // console.log(e.target.parentNode.parentNode);
// e.target.parentNode.parentNode.remove();
// // if(e.target.parentNode.parentNode.remove())
// alert("Post removed");
//   }
//}
function removepostphp(e){
  //console.log(e.target.parentNode.parentNode.childNodes[2].lastChild);
  jQuery.ajax({
  
    type: 'POST',
    url: '../handler/posth_remove.php',
    data: {puse:e.target.parentNode.parentNode.childNodes[2].lastChild.innerText,pid:e.target.parentNode.parentNode.childNodes[5].lastChild.innerText},
    success:function(data){
    if(data=='R'){
       alert("Removed post");
       e.target.parentNode.parentNode.remove();
    }
    else if(data=='NR'){
      alert("not removed");
    }
    else{
      alert("some issue");
    }
    }
  });
  }
  function deletepostphp(e){
    //console.log(e.target.parentNode.parentNode.childNodes[2].lastChild);
    jQuery.ajax({
    
      type: 'POST',
      url: 'posta_delete.php',
      data: {puse:e.target.parentNode.parentNode.childNodes[2].lastChild.innerText,pid:e.target.parentNode.parentNode.childNodes[5].lastChild.innerText},
      success:function(data){
      if(data=='R'){
         alert("post deleted");
         e.target.parentNode.parentNode.remove();
      }
      else if(data=='NR'){
        alert("not deleted");
      }
      else{
        alert("some issue");
      }
      }
    });
    }
function addverify(e){

  // e.stopPropagation();
  // let temp=ppid.toString();
  // var postemp= document.getElementById(temp);
  //post_new.post_status="v";
  // alert("Verified");
  // if(postverify.innerText=="Verify")
  // {
    // console.log(e.target);
    // console.log(e.target);
    // postemp.lastChild.firstChild.innerText ="Verified";
    e.target.innerText ="Verified";
    e.target.style.pointerEvents="none";
  // }
  // removepost();
}

function addposth(){
  ppid=ppid+1;
  let s='posttt'+ppid.toString();
   bodyp= document.getElementById('post-section');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
        adduse();
        //add postdate
        addpostdate();
        //add posteddate
        addposteddate();
        //add postid
        addpostid();
        //add postvote
       // addposttvote();
       //verify post
       verifypost(); 
       //add remove
       addremove();
}
function addposthsearch(){
  ppid2=ppid2+1;
  let s='posttt'+ppid2.toString();
   bodyp= document.getElementById('post-section');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
        adduse();
        //add postdate
        addpostdate();
        //add posteddate
        addposteddate();
        //add postid
        addpostid();
        //add postvote
       // addposttvote();
       //verify post
       verifypost(); 
       //add remove
       addremove();
}


function addposta(){//posta
  ppid=ppid+1;
  let s='posttt'+ppid.toString();
   //body= document.getElementById('post-section');
   bodyp= document.getElementById('pconta1');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
        adduse();
        //add postdate
        addpostdate();
        //add posteddate
        addposteddate();
        //add postid
        addpostid();
        //add postvote
       // addposttvote();
       //verify post
       //verifypost(); 
       //add remove
       addremovea();
}

function addpostaa(){//indexa
  ppid=ppid+1;
  let s='posttt'+ppid.toString();
   bodyp= document.getElementById('post-section');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
        adduse();
        //add postdate
        addpostdate();
        //add posteddate
        addposteddate();
        //add postid
        addpostid();
        //add postvote
        addposttvoteh();
       //verify post
       //verifypost(); 
       //add remove
       addremovea();
}

function addpostar(){
  ppid=ppid+1;
  let s='postttt'+ppid.toString();
   bodyp= document.getElementById('pconta2');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
        adduse();
        //add postdate
        addpostdate();
        //add posteddate
        addposteddate();
        //add postid
        addpostid();
        //add postvote
       // addposttvote();
       //verify post
       verifypost(); 
       //add remove
       addremoveR();
}


function addpost(){
  ppid=ppid+1;
  let s='posttt'+ppid.toString();
   bodyp= document.getElementById('post-section');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
       /// adduse();
        //add postdate
       //// addpostdate();
        //add posteddate
        addposteddate();
        //add postid
        addpostid();
        //add postvote
        addposttvote();
       //verify post
       //verifypost(); 
       //add remove
       //addremove();
}

function addposthindexh(){
  ppid=ppid+1;
  let s='posttt'+ppid.toString();
   bodyp= document.getElementById('post-section');
  //add post
   divp = document.createElement("div");
 console.log("reached add post");
   divp.classList.add('post');
   divp.setAttribute('id',s);//indivitdual id created for the posts
  bodyp.appendChild(divp);
        //add title
        addtitle();
        //add desc
        adddesc();
        //add username
       /// adduse();
        //add postdate
       //// addpostdate();
        //add posteddate
        addposteddate();
        //add postid
      ///  addpostid();
        //add postvote
        addposttvoteh();
       //verify post
       //verifypost(); 
       //add remove
       //addremove();
}




// let i=1;
// function load_toVerify(){
//   do{
//    post_new = new post("12345"+i.toString(),
//    "Complaint about college water filters available",
//    "The filters are not available in every floors so the students have to got to to fill bottle to another floors or canteen. Please vote this so that filters fill be availble in every floor atleast.",
//    "#45Asd",
//    "01-05-2023",
//    "02-05-2023",
//    0,"nv");
// // post_new = new post("12346",
// // "Complaint about college water filters available",
// // "The filters are not available in every floors so the students have to got to to fill bottle to another floors or canteen. Please vote this so that filters fill be available in every floor atleast.",
// // "#45Asd",
// // "01-05-2023",
// // "02-05-2023",
// // 8);
//     var x = document.getElementsByClassName("post");
//     var y = document.getElementById("no-post");
//     if(Object.keys(post_new).length!=0)
//   {
//     y.style.display = "none";
    
//   }
//   else{
//     // x.style.display = "none";
//     for(j=0; j<x.length; j++){
//       x[j].style.display ="none";
//      }
//   }

//   addpost();
//   i=i+1;
  
// }while(i<=3);
// }
// function load(){


//   var x = document.getElementsByClassName("post");
//   var y = document.getElementById("no-post");
//   if(Object.keys(post_new).length!=0)
// {
//   y.style.display = "none";
  
// }
// else{
//   // x.style.display = "none";
//   for(i=0; i<x.length; i++){
//     x[i].style.display ="none";
//    }
// }


// }
