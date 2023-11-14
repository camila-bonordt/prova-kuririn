<?php

function cookies() {
?>
    <div class="cookie-banner" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex  align-items-center justify-content-center flex-column flex-md-row">
                    <div>
                        Este site usa cookies para análises, personalização e publicidade.<br>Reveja a nossa <a href="<?php echo home_url('/politica-de-privacidade/#cookies'); ?> ">política de cookies</a> para saber mais. Ao continuar a navegar, concorda com a nossa utilização de cookies.
                    </div>
                    <div class="btn-laranja-wrapper d-flex justify-content-end fechar">
                        <a class="btn-laranja">
                            Entendi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;domain=." + window.location.hostname;
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        if (getCookie('politica_cookies')) {
            jQuery('.cookie-banner').remove();
        }

        jQuery(function() {
            jQuery('.cookie-banner .fechar').on('click', function() {
                setCookie('politica_cookies', '1', 16000);

                jQuery('.cookie-banner').remove();

                return false;
            });
        });
    </script>
<?php
}

// add_action('wp_footer', 'cookies');
