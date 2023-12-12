<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href=""><img src="{{ asset('user_asset/img/logo.svg') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li><a href="#">Advertise on wasetak</a></li>
                <li><a href="#">Search Listing</a></li>
                <li><a href="#">Stay Connected</a></li>
                <li><a href="{{route('checkout.index')}}">Start Checkout</a></li>
                <li><a href="#">Earn money</a></li>
                <li><a href="#">How it works</a></li>
                <div id="google_translate_element" style="display:none"></div>
                <li>
                    <a id="zh-CN" class="language_option" onclick="changeLanguageByButtonClick('ar')"
                    translate="no" href="javascript:void(0)">Arabic</a>
                </li>
                <li>
                    <a id="en" class="language_option" onclick="changeLanguageByButtonClick('en')"
                    translate="no" href="javascript:void(0)">English</a>
                </li>
             
                
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "en"
    }, 'google_translate_element');
}

function changeLanguageByButtonClick(lang) { 
    
    var selectField = document.querySelector("#google_translate_element select");
    for (var i = 0; i < selectField.children.length; i++) {
        var option = selectField.children[i];
        if (option.value == lang) {
            selectField.selectedIndex = i;
            selectField.dispatchEvent(new Event('change'));
        }
    }
}
            // setTimeout(
            // function() 
            // {$('.language_option').trigger('click');
            //     alert('aa');
            // }, 5000);
</script>


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
