var urlCounter = window.location.href;
var md5Counter = hash( urlCounter );

const elementScript = document.querySelector('#bh-dev-counter-script');
const elementDom = document.querySelector('#bh-dev-counter-element');

var startCounter = 0;
if( elementScript.dataset.start ){
	startCounter = elementScript.dataset.start;
}

if( elementScript.dataset.uid ){
	md5Counter = elementScript.dataset.uid;
}

baseCounter = elementScript.getAttribute('src').replace('js/widget.js','');

//only track first
var count = 'true'; 
if ( sessionStorage.getItem("bhCounter") !== null) {
	count = 'false';
}

var xhr = new XMLHttpRequest();
xhr.open('GET', baseCounter + 'php/counter.php?id=' + md5Counter + '&start=' + startCounter + '&count=' + count );
xhr.onload = function() {
    if (xhr.status === 200) {
	    elementDom.innerHTML = JSON.parse( xhr.responseText ).count;
	    sessionStorage.setItem('bhCounter','tracked');
    } else {
        console.log('Request failed.  Returned status of ' );
    }
};
xhr.send();

function hash(h){h.length%32>0&&(h+=Array(33-h.length%32).join("z"));var t="",r=[],n=j=k=a=0,e=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","1","2","3","4","5","6","7","8","9"];for(n=0;n<h.length;n++)ch=h.charCodeAt(n),r[j++]=ch<127?255&ch:127;var l=Math.ceil(r.length/32);for(n=0;n<r.length;n++)j+=r[n],k++,k!=l&&n!=r.length-1||(a=Math.floor(j/k),a<32?t+="0":a>126?t+="z":t+=e[Math.floor((a-32)/2.76)],j=k=0);return t}