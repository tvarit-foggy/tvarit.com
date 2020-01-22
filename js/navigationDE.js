
    var lang;
    var isSaved = false;
    var cook = document.cookie;
    var arr = cook.split(';');

    if (window.navigator.languages) {
        lang = window.navigator.languages[0];
        console.log(lang + '$$$$$');
    } else {
        lang = window.navigator.userLanguage || window.navigator.language;
        console.log(lang + '@@@');
    }
    for (var i = 0; i < arr.length; i++) {
        name = arr[i].split('=')[0];
        value = arr[i].split('=')[1];
        console.log(name + '+++' + value);
        if ((name == ' lang' || name == ' language') && (value == 'en' || value == 'enUs' )) {
         isSaved = true
         document.cookie = "language=enUs; path=/; Secure ";
        }
    }
    if(!isSaved && lang== 'de') {
            // document.cookie = 'lang=' + lang + ";path=/";
            // window.location.href = "https://tvarit.com/de/";
    }
    window.onbeforeunload = function(e) {
        window.onunload = function() {
            document.cookie = 'lang=' + lang + '; expires=Thu, 18 Dec 2013 12:00:00 UTC';
            document.cookie = 'language=enUs'+ '; expires=Thu, 18 Dec 2013 12:00:00 UTC';
        }
        return undefined;
    };