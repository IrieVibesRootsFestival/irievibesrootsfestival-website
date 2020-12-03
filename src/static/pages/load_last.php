<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<!-- Includes Popper + BootstrapJS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Cookie consent code -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

<!-- Automatically add 'Active' class to Navbar -->
<script>
    $(document).ready(function() {
        // get current URL path and assign 'active' class
        var pathname = window.location.pathname;
        $('nav li > a[href="'+pathname+'"]').parent().addClass('active');
    })</script>
<!-- Language location changer -->
<script>
    "use strict";const validLangs=new Set(["nl","fr","en"]);function tabToLang(lang){if(!validLangs.has(lang))return false;const path=location.pathname;const re=new RegExp([...validLangs].map(x=>`/${x}/`).join("|"),"");location.pathname=path.replace(re,`/${lang}/`);return true;} function clickHandler(e){e.preventDefault();tabToLang(e.target.getAttribute("href"));} for(const anchor of document.getElementsByClassName("select-lang")){anchor.addEventListener("click",clickHandler,false);}
</script>
<!-- Mailchimp Javascript -->
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/81c9b73355e0e402d5618756c/4bc3b38f98e566d382695610d.js");</script>
