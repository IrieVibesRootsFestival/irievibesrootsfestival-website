<!-- END Bootstrap-Cookie-Alert -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
<!-- Cookie consent code -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>