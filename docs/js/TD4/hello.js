
$=(id)=>document.getElementById(id)

/*ou*/

/*$=function(id){
    returne document.getElementById(id);
}*/

const bt= $("#bt-hello");
console.log(bt);
bt && bt.addEventListener("click",function () {
    alert("Hello !!");
});
$("bt-clear").addEventListener("click",function(){
    document.body.innerHTML="";
});

$("bt-dom").addEventListener("click",function(){
    const h2=document.createElement("h2");
    h2.innerText="sous titre ajouté dynamique";
    $("content").append(h2);
    const img=document.createElement("img");
    img.src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.wikia.nocookie.net%2Fjujutsu-kaisen%2Fimages%2Fe%2Fe9%2FYuta_Okkotsu_-_Recorte_Cap90.jpg%2Frevision%2Flatest%3Fcb%3D20201127144607%26path-prefix%3Des&tbnid=8b0CYTcx8wk25M&vet=10CAgQxiAoAWoXChMIqK385NjwgQMVAAAAAB0AAAAAEAY..i&imgrefurl=https%3A%2F%2Fjujutsu-kaisen.fandom.com%2Fes%2Fwiki%2FYuta_Okkotsu&docid=jzRb1r-B06i5yM&w=395&h=552&itg=1&q=yuta%20pp%20manga&ved=0CAgQxiAoAWoXChMIqK385NjwgQMVAAAAAB0AAAAAEAY";
    img.style.width="250px";
    $("content").appendChild(img);
});
//alert("hello world en JS")
//document.body.innerHTML = "<h1>Hello world en JS</h1>";