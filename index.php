

<style>
#google_translate_element{
    display:none;
}
frame.goog-te-banner-frame.skiptranslate{
    display:none;
}
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
top: 0px !important; 
}
.language_select{
    color: #fff !important;
    background: transparent;
    border: 0px transparent;
    margin-top: 14px;
    margin-left: 12px;
}
.language_select option{
    color:#000;
}
@media(max-width:766px){
    .mobile_labguage{
        display:flex !important;
    }
    .mobile_labguage select{
        margin-left:auto;
        margin-right:35px;
    }
}
@media(min-width:767px){
    .mobile_labguage{
        display:none !important;
    }
}
</style>






<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
   function googleTranslateElementInit() {
       new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
   }
</script>


<script>
     function changeLanguate(lang='en'){
         alert(lang);
        var languageSelect = document.querySelector("select.goog-te-combo");
        languageSelect.value = lang; 
        languageSelect.dispatchEvent(new Event("change"));
        
     }
</script>

<select class="language_select" onchange="changeLanguate(this.value)" style="color:#000">
                        <option value="">Language</option>
                        <option value="en">English</option>
                        <option value="fr">French</option>
                        <option value="es">Spanish</option>
                    <select>

<div class="mobile_labguage">
            <select class="language_select" onchange="changeLanguate(this.value)">
                <option value="">Languate</option>
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="es">Spanish</option>
            <select>
            </div>
                
                
                
                
                
<script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        
    
    <script>
         function changeLanguate(lang='en'){
             
            var languageSelect = document.querySelector("select.goog-te-combo");
            languageSelect.value = lang; 
            languageSelect.dispatchEvent(new Event("change"));
            
         }
    </script>
