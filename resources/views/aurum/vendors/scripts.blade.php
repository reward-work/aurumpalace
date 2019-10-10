<script>
    var getParamUrl = new URLSearchParams(window.location.search);
    window.btag = getParamUrl.get('btag');
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
        $("#popup_acceptcookie").remove();
    }
    if (getParamUrl.get('btag') != null && getParamUrl.get('btag') != '') {
        setCookie('pwr_btag', getParamUrl.get('btag'), 90);
    }

</script>
<script>

    var urls = document.querySelectorAll('a');

    console.log(urls);

    function clickToA(e) {
        e.preventDefault();
        var url = e.target.href;
        
        url += '?btag=' + window.btag;
        console.log(url);
        window.location.href = url;

    }

    urls.forEach(function(element) {
        if(window.btag != null) {
            element.addEventListener('click', clickToA, false);
        }
    });



</script>
