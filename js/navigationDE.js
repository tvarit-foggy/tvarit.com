var lang,isSaved=!1,cook=document.cookie,arr=cook.split(";");
lang = window.navigator.languages ? window.navigator.languages[0] : window.navigator.userLanguage||window.navigator.language;
for(var i=0;i<arr.length;i++){
    let name=arr[i].split("=")[0];
    value=arr[i].split("=")[1];
    if(" lang"!= name &&" language" != name || "en"!= value && "enUs" !=value){
        isSaved=!0;
        document.cookie="language=enUs; path=/; Secure ";
    }
}
if((isSaved || "de"!=lang) && localStorage.getItem('lang') === 'de'){
    document.cookie="lang="+lang+";path=/";
    window.location.href=window.location.origin+"/de/";
}

window.onbeforeunload=function(a){
    window.onunload=function(){
        document.cookie="lang="+lang+"; expires=Thu, 18 Dec 2013 12:00:00 UTC";
        document.cookie="language=enUs; expires=Thu, 18 Dec 2013 12:00:00 UTC";
    }
};
