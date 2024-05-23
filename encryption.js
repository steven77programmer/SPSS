/* <script> */

function encrypt()
{
    // let use="franky_super77";
    let head=Math.floor((Math.random() * 10000) + 1);
    let headstr=head.toString();
    let use=document.querySelector('#rruse').value;
    let sarr=headstr.split('');
    for(let i=0;i<headstr.length;i++){
        sarr[i]=String.fromCharCode(headstr.charCodeAt(i)+30);
            }
          let  str=sarr.reverse().join('');
            sarr=use.split('');    
    for(let i=0;i<use.length;i++){
sarr[i]=String.fromCharCode(use.charCodeAt(i)+5);
    }
     str=str+sarr.reverse().join('');
  let  str1=str.substring(0,(str.length)/2);
  let  str2=str.substring(str.length/2,str.length);
  str=str2+str1;
// let puse=use.reverse();
console.log(str);
// console.log(str1,str2);
} 
// encrypt(puse);
// </script>
//franky_super77/* <script> */

function encrypt()
{
    // let use="franky_super77";
    let head=Math.floor((Math.random() * 10000) + 1);
    let headstr=head.toString();
    let use=document.querySelector('#rruse').value;
    let sarr=headstr.split('');
    for(let i=0;i<headstr.length;i++){
        sarr[i]=String.fromCharCode(headstr.charCodeAt(i)+30);
            }
          let  str=sarr.reverse().join('');
            sarr=use.split('');    
    for(let i=0;i<use.length;i++){
sarr[i]=String.fromCharCode(use.charCodeAt(i)+5);
    }
     str=str+sarr.reverse().join('');
  let  str1=str.substring(0,(str.length)/2);
  let  str2=str.substring(str.length/2,str.length);
  str=str2+str1;
// let puse=use.reverse();
console.log(str);
// console.log(str1,str2);
} 
// encrypt(puse);
// </script>
//franky_super77