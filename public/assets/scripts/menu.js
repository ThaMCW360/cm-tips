let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
let menuParam = 1;
navBarTop = $(".top-menu").height();

    function hamburgerMenu() {
        if (isMobile) {
            menuWidth = 80;
        } else {
            menuWidth = 50;
        }


        hamIcoLeft = 100 - menuWidth;
        // navBarTop = $(".top-menu").height();
        navBar = $(".top-menu");

        $(".ham-menu").css({ "width": "100%", "left": "0", "top": "6.5rem" });

        if ($(".ham-menu").hasClass("open")) {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches == false) {
                $(".ham-menu").animate({ "height": "85%" });
            } else {
                $(".ham-menu").css({ "height": "85%" });
            }
            $('#hamburger-icon').addClass("active");

            $(".ham-menu").css({
                "backdrop-filter": "blur(4px)",
                "-webkit-backdrop-filter:": "blur(4px)"
            });
            $(".top-menu").css({
                "backdrop-filter": "blur(4px)",
                "-webkit-backdrop-filter:": "blur(4px)"
            });
        } else {

            if ($(".ham-menu").hasClass("closed")) {
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches == false) {
                    $(".ham-menu").animate({ "height": "0" });
                } else {
                    $(".ham-menu").css({ "height": "0" });
                }
            } else {
                $(".ham-menu").css({ "height": "0" });
            }
            $('#hamburger-icon').removeClass("active");

            $(".ham-menu").css({
                "backdrop-filter": "blur(0px)",
                "-webkit-backdrop-filter:": "blur(0px)"
            });
            $(".top-menu").css({
                // "backdrop-filter": "blur(0px)",
                // "-webkit-backdrop-filter:": "blur(0px)"
            });
        }
    }

            hamburgerMenu();


        $(".hamburger").click(function(event) {
            // $(".ham-menu").toggleClass("open");
            if ($(".ham-menu").hasClass("open")) {
                $(".ham-menu").addClass("closed");
                $(".ham-menu").removeClass("open");
            } else {
                $(".ham-menu").addClass("open");
                $(".ham-menu").removeClass("closed");
            }
            hamburgerMenu();

        });