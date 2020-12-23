<?php require 'inc/header.php'; ?>

<div class="fluied menu-bar sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars"></i>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item">

                    <a class="nav-link" href="#home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#works">HOW IT WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">LOCATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bikes">BIKE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contract">CONTACT</a>
                </li>
                <?php if (Session::get('userName')){ ?>
                    <li class="nav-item">
                    <a class="nav-link" href="user/user_profile.php">My Profile</a>
                </li>
               <?php }else{ ?>
                     <li class="nav-item">
                    <a class="nav-link" href="login/login.php">LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signup/signup.php">SIGN UP</a>
                </li>
              <?php  }

                 ?>
               


            </ul>
        </div>

    </nav>
</div>
</div>



<!-- navbar end -->

<section id="home">
    <div class="row">
        <div class="col-md-4 ml-auto banner_contant">
            <div class="banner_contant  text-left">

                <h2><span>BIKE</span> Rent Service</h2>
                <h3>Best App LAnding Page</h3>
                <p>It’s an awesome app that you have ever used. It give you a great experis for using android app. Bike Rent is the best app evrr ha--d seen. So I am highly recomended you to use this app.</p>

                <div class="banner_btn">
                    <a href="#">
                        <i class="fab fa-android"></i>
                        <p>Available onspan <span>Google Store</span></p>
                    </a>

                </div>
            </div>

        </div>
        <div class="col-md-7 bike-spring">
            <svg width="700" height="650" viewBox="0 0 1058 785" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="undraw_Ride_a_bicycle_2yok (3) 1" clip-path="url(#clip0)">
                    <path id="Vector" d="M209.73 115.43C204.25 122.08 202.14 131.43 199.78 140.22C180.78 211.06 133.96 268.04 80.64 308.74C58.06 325.98 30.57 349.1 35.51 380.01C38.17 396.61 49.84 408.83 58.51 422.35C76.7 450.66 82.6 489.14 73.93 523.03C64.07 561.59 36.51 597.57 45.04 636.56C50.3 660.56 68.16 677.64 85.33 692.32C112.117 715.207 139.757 736.647 168.25 756.64C187.35 770.04 207.67 783.08 229.93 784.78C249.53 786.28 268.73 778.83 287.34 771.48C303.6 765.05 320.27 758.36 333.4 745.48C341.97 737.07 348.8 726.22 358.32 719.34C380.68 703.18 409.4 713.42 435.04 720.34C495.54 736.58 560.29 730.65 617.86 703.6C706.17 662.1 773.48 574.95 859.86 528.19C897 508.08 937.4 495.6 971.79 469.7C991.165 454.953 1007.81 436.936 1020.99 416.46C1046.99 376.35 1061.05 325.21 1056.99 275.15C1052.93 225.09 1030.18 176.85 994.45 148.59C956.2 118.34 907.89 112.69 864.37 94.53C819.43 75.77 779.45 43.53 734.94 23.4C698.924 7.15665 659.728 -0.81716 620.228 0.0636141C580.728 0.944389 541.926 10.6574 506.67 28.49C458.23 52.99 409.13 110.15 355.18 114.49C316.74 117.49 239.75 79.01 209.73 115.43Z" fill="url(#paint0_linear)"/>
                    <g id="left-wheel">
                        <path id="Vector_2" d="M364.92 589.95C360.909 572.131 352.79 555.495 341.21 541.37C336.911 536.121 332.171 531.25 327.04 526.81C307.314 509.779 282.491 499.779 256.467 498.381C230.443 496.983 204.692 504.265 183.254 519.085C161.816 533.904 145.906 555.422 138.02 580.262C130.134 605.102 130.719 631.857 139.683 656.328C148.647 680.799 165.482 701.601 187.547 715.47C209.612 729.339 235.657 735.488 261.595 732.954C287.533 730.42 311.895 719.345 330.858 701.468C349.822 683.591 362.312 659.923 366.37 634.18C367.314 628.119 367.789 621.994 367.79 615.86C367.797 607.144 366.834 598.454 364.92 589.95ZM249.73 704.3C231.498 704.281 213.714 698.647 198.797 688.164C183.879 677.682 172.552 662.859 166.356 645.712C160.16 628.565 159.395 609.926 164.165 592.329C168.935 574.732 179.009 559.031 193.018 547.361C207.026 535.692 224.288 528.619 242.457 527.106C260.627 525.593 278.821 529.712 294.567 538.904C310.312 548.096 322.845 561.914 330.46 578.48C338.076 595.045 340.405 613.554 337.13 631.49C333.38 651.933 322.58 670.414 306.611 683.718C290.642 697.021 270.514 704.304 249.73 704.3V704.3Z" fill="#535461"/>
                        <path id="Vector_3" d="M249.73 628.27C256.805 628.27 262.54 622.535 262.54 615.46C262.54 608.385 256.805 602.65 249.73 602.65C242.655 602.65 236.92 608.385 236.92 615.46C236.92 622.535 242.655 628.27 249.73 628.27Z" fill="#535461"/>
                        <path id="Vector_4" d="M255.23 716.99L248.96 619.05L248.83 618.84L242.51 621.04L213.43 705.89L167.18 673.1L240.85 619.69L240.92 619.48L241.34 619.33L246.09 615.88L168.85 572.57L149.93 593.37L152.93 612.87L241.75 614.49V616.49L151.27 614.87L147.85 592.73L173.75 564.27L212.5 519.07L213.19 520.94L221.39 511.94L251.85 517.4V516.19L253.85 516.25V517.76L299.21 525.88L256.92 610.49L250.75 614.96V615.46V616.02L348.55 581.94L336.94 673.15L253.94 620.28L251.02 618.64L299.96 697.52L255.23 716.99ZM251.23 622.65L257.08 714.03L297.13 696.65L251.23 622.65ZM170.65 673.08L212.44 702.71L239.78 622.97L170.65 673.08ZM252.97 617.42L255.06 618.59L335.41 669.79L346.21 584.92L252.97 617.42ZM245.87 610.22L248.38 614.27L248.82 613.95L251.82 519.42L222.08 514.1L213.92 523.1L245.87 610.22ZM170.45 571.16L245.29 613.16L243.99 611.03L212.41 524.76L175.22 565.63L170.45 571.16ZM253.85 519.77L250.85 612.49L255.37 609.21L296.28 527.39L253.85 519.77Z" fill="#535461"/>
                    </g>
                    <g id="right-wheel">
                        <path id="Vector_5" d="M681.42 717.39L675.16 619.49L675.03 619.28L668.71 621.48L639.62 706.29L593.37 673.49L667.06 620.08L667.13 619.87L667.55 619.72L672.3 616.27L595.06 572.96L576.13 593.76L579.13 613.26L667.93 614.84V616.84L577.45 615.22L574.05 593.11L599.94 564.66L638.66 519.49L639.35 521.36L647.55 512.36L678.09 517.83V516.62L680.09 516.68V518.19L725.45 526.31L683.12 610.96L676.95 615.43V615.93V616.49L774.76 582.41L763.15 673.62L680.15 620.75L677.23 619.11L726.17 698L681.42 717.39ZM677.42 623.05L683.27 714.43L723.32 697.05L677.42 623.05ZM596.85 673.49L638.64 703.12L665.98 623.38L596.85 673.49ZM679.17 617.83L681.26 619L761.61 670.2L772.41 585.33L679.17 617.83ZM672.07 610.63L674.58 614.68L675.02 614.36L678.02 519.83L648.28 514.49L640.12 523.49L672.07 610.63ZM596.68 571.58L671.52 613.58L670.22 611.45L638.64 525.18L601.44 566.06L596.68 571.58ZM680.05 520.19L677.05 612.88L681.57 609.6L722.48 527.78L680.05 520.19Z" fill="#535461"/>
                        <path id="Vector_6" d="M675.93 628.67C683.005 628.67 688.74 622.935 688.74 615.86C688.74 608.785 683.005 603.05 675.93 603.05C668.855 603.05 663.12 608.785 663.12 615.86C663.12 622.935 668.855 628.67 675.93 628.67Z" fill="#535461"/>
                        <path id="Vector_7" d="M676.33 498.61C665.717 498.598 655.15 500.024 644.92 502.85C639.644 504.305 634.477 506.133 629.46 508.32C602.73 519.907 581.247 540.997 569.167 567.508C557.087 594.019 555.269 624.069 564.065 651.843C572.86 679.618 591.644 703.143 616.782 717.869C641.921 732.594 671.627 737.473 700.155 731.562C728.682 725.65 754.004 709.369 771.221 685.867C788.438 662.365 796.327 633.312 793.362 604.33C790.396 575.348 776.787 548.495 755.168 528.966C733.548 509.438 705.454 498.622 676.32 498.61H676.33ZM675.93 704.7C655.649 704.692 635.981 697.746 620.192 685.017C604.404 672.288 593.445 654.541 589.135 634.723C584.825 614.905 587.424 594.209 596.501 576.073C605.577 557.936 620.584 543.45 639.03 535.02C643.722 532.872 648.594 531.142 653.59 529.85C665.802 526.68 678.549 526.147 690.984 528.287C703.418 530.427 715.253 535.191 725.703 542.261C736.153 549.332 744.977 558.547 751.588 569.293C758.199 580.039 762.446 592.069 764.046 604.585C765.646 617.1 764.562 629.812 760.866 641.875C757.17 653.939 750.948 665.077 742.613 674.548C734.277 684.02 724.02 691.608 712.524 696.806C701.028 702.005 688.557 704.696 675.94 704.7H675.93Z" fill="#535461"/>
                    </g>
                    <g id="man-bike">
                        <path id="Vector_8" d="M387 554.303L344.293 512.159L330.947 525.683L373.654 567.827L387 554.303Z" fill="#6C63FF"/>
                        <path id="Vector_9" opacity="0.1" d="M251.34 628.27C258.415 628.27 264.15 622.535 264.15 615.46C264.15 608.385 258.415 602.65 251.34 602.65C244.265 602.65 238.53 608.385 238.53 615.46C238.53 622.535 244.265 628.27 251.34 628.27Z" fill="black"/>
                        <path id="Vector_10" opacity="0.1" d="M387 554.303L344.293 512.159L330.947 525.683L373.654 567.827L387 554.303Z" fill="black"/>
                        <path id="Vector_11" d="M354.48 491.99C354.48 491.99 379.27 478.91 388.85 470.49C394.617 465.444 400.818 460.917 407.38 456.96L438.48 438.03L503.48 433.03L506.48 444.03C506.48 444.03 511.48 460.03 461.48 474.03C411.48 488.03 386.48 510.03 386.48 510.03C386.48 510.03 354.48 520.99 354.48 491.99Z" fill="#DB8B8B"/>
                        <path id="Vector_12" opacity="0.1" d="M389.13 507.86C387.36 509.21 386.48 509.99 386.48 509.99C386.48 509.99 354.48 520.99 354.48 491.99C354.48 491.99 356.03 491.17 358.48 489.8C360.955 493.831 364.423 497.16 368.551 499.469C372.679 501.778 377.33 502.99 382.06 502.99H385.45L389.13 507.86Z" fill="black"/>
                        <path id="Vector_13" opacity="0.05" d="M505.54 449.55C502.76 455.44 493.17 465.12 461.48 473.99C420.87 485.36 396.75 501.99 389.13 507.86C387.36 509.21 386.48 509.99 386.48 509.99C386.48 509.99 354.48 520.99 354.48 491.99C354.48 491.99 356.03 491.17 358.48 489.8C365.91 485.73 381.64 476.8 388.82 470.45C394.586 465.403 400.787 460.875 407.35 456.92L438.45 437.99L450.03 437.1L503.45 432.99L506.45 443.99C506.45 443.99 507.15 446.14 505.54 449.55Z" fill="black"/>
                        <path id="Vector_14" d="M354.98 485.49L328.48 502.99L406.08 567.99C406.08 567.99 417.48 560.99 411.48 552.99C411.48 552.99 391.48 535.99 390.48 511.99L384.48 503.99H381.09C375.358 503.991 369.767 502.211 365.089 498.897C360.412 495.583 356.88 490.898 354.98 485.49V485.49Z" fill="black"/>
                        <path id="Vector_15" opacity="0.1" d="M505.54 449.55C489.54 441.82 450.48 440.99 450.48 440.99L450.06 437.1L503.48 432.99L506.48 443.99C506.48 443.99 507.15 446.14 505.54 449.55Z" fill="black"/>
                        <path id="Vector_16" d="M450.48 438.99C450.48 438.99 497.48 439.99 509.48 449.99L503.48 328.99H438.48L450.48 438.99Z" fill="#ABB1D1"/>
                        <path id="Vector_17" opacity="0.05" d="M450.48 438.49C450.48 438.49 497.48 439.49 509.48 449.49L503.48 328.49H438.48L450.48 438.49Z" fill="black"/>
                        <path id="Vector_18" d="M488.24 364.95C488.24 364.95 605.89 360.95 608.29 376.16C610.69 391.37 490.64 384.96 490.64 384.96C490.64 384.96 481.04 375.35 488.24 364.95Z" fill="#535461"/>
                        <path id="Vector_19" opacity="0.05" d="M488.24 364.95C488.24 364.95 605.89 360.95 608.29 376.16C610.69 391.37 490.64 384.96 490.64 384.96C490.64 384.96 481.04 375.35 488.24 364.95Z" fill="black"/>
                        <path id="Vector_20" d="M393 425.78H372.19V606.66H393V425.78Z" fill="#6C63FF"/>
                        <path id="Vector_21" opacity="0.1" d="M393 425.77V439.7C386.08 440.6 379 441.17 372.19 441.39V425.77H393Z" fill="black"/>
                        <path id="Vector_22" d="M391.44 410.78C388.52 410.554 385.616 410.164 382.74 409.61C371.46 407.45 343.02 402.92 335.37 410.61C325.77 420.21 328.97 437.02 354.58 439.42C380.19 441.82 424.21 435.42 433.02 425.81C433.02 425.77 417.09 412.75 391.44 410.78Z" fill="#535461"/>
                        <path id="Vector_23" d="M387.4 475.4L605.9 407.37L613.1 424.18L389 501.01L387.4 475.4Z" fill="#6C63FF"/>
                        <path id="Vector_24" d="M452.23 582.65L609.9 427.38L618.7 440.18L468.23 597.05L452.23 582.65Z" fill="#6C63FF"/>
                        <path id="Vector_25" opacity="0.1" d="M653.58 529.85C648.584 531.142 643.712 532.872 639.02 535.02L629.46 508.31C634.477 506.123 639.644 504.295 644.92 502.84L653.58 529.85Z" fill="black"/>
                        <path id="Vector_26" d="M680.33 608.26L669.13 614.66L590.99 396.33L587.49 386.56L605.9 376.15L610.51 390.53L680.33 608.26Z" fill="#6C63FF"/>
                        <path id="Vector_27" opacity="0.1" d="M610.51 390.53L590.99 396.33L587.49 386.56L605.9 376.15L610.51 390.53Z" fill="black"/>
                        <path id="Vector_28" d="M491.44 407.37L601.09 369.75C601.09 369.75 620.3 372.15 613.09 388.16L502.65 420.97C502.65 420.97 485.85 422.57 491.44 407.37Z" fill="#535461"/>
                        <path id="Vector_29" opacity="0.1" d="M367.79 615.86C367.789 621.994 367.314 628.119 366.37 634.18C356.77 633.49 346.85 632.49 337.13 631.49C339.289 619.599 339.021 607.394 336.34 595.61C345.81 593.61 355.48 591.7 364.92 589.97C366.833 598.467 367.795 607.15 367.79 615.86V615.86Z" fill="black"/>
                        <path id="Vector_30" opacity="0.1" d="M393 585.38V606.65H372.19V588.65C379.39 587.4 386.39 586.29 393 585.38Z" fill="black"/>
                        <path id="Vector_31" d="M258.54 615.49C258.54 615.49 426.62 571.49 440.22 588.28C453.82 605.07 468.23 627.49 425.85 635.49C383.47 643.49 255.37 621.88 255.37 621.88L258.54 615.49Z" fill="#6C63FF"/>
                        <path id="Vector_32" opacity="0.1" d="M341.21 541.37L319.85 560.92C316.067 556.064 311.791 551.614 307.09 547.64L327.03 526.81C332.164 531.249 336.908 536.12 341.21 541.37V541.37Z" fill="black"/>
                        <path id="Vector_33" d="M252.94 606.66L378.59 475.4L382.6 505.81L259.34 618.66L252.94 606.66Z" fill="#6C63FF"/>
                        <path id="Vector_34" opacity="0.1" d="M675.13 627.07C682.205 627.07 687.94 621.335 687.94 614.26C687.94 607.185 682.205 601.45 675.13 601.45C668.055 601.45 662.32 607.185 662.32 614.26C662.32 621.335 668.055 627.07 675.13 627.07Z" fill="black"/>
                        <path id="Vector_35" opacity="0.1" d="M448.22 628.27C462.364 628.27 473.83 616.804 473.83 602.66C473.83 588.516 462.364 577.05 448.22 577.05C434.076 577.05 422.61 588.516 422.61 602.66C422.61 616.804 434.076 628.27 448.22 628.27Z" fill="black"/>
                        <path id="Vector_36" d="M449.83 628.27C463.974 628.27 475.44 616.804 475.44 602.66C475.44 588.516 463.974 577.05 449.83 577.05C435.686 577.05 424.22 588.516 424.22 602.66C424.22 616.804 435.686 628.27 449.83 628.27Z" fill="#535461"/>
                        <path id="Vector_37" d="M442.992 600.736L442.984 600.742C439.977 602.991 439.362 607.253 441.611 610.26L461.937 637.441C464.186 640.448 468.448 641.063 471.455 638.814L471.463 638.808C474.471 636.559 475.085 632.297 472.836 629.29L452.51 602.109C450.261 599.102 446 598.487 442.992 600.736Z" fill="#6C63FF"/>
                        <path id="Vector_38" d="M565.48 246.99L563.1 277.1C562.826 280.914 562.876 284.744 563.25 288.55C563.56 291.92 563.25 297.82 559.95 306.82C555.713 318.317 553.523 330.467 553.48 342.72V376.99L530.48 372.99C530.48 372.99 531.48 324.99 527.48 316.99C523.48 308.99 530.48 237.99 530.48 237.99L565.48 246.99Z" fill="#DB8B8B"/>
                        <path id="Vector_39" opacity="0.05" d="M564.3 261.91L563.1 277.1C562.83 280.911 562.883 284.738 563.26 288.54C563.57 291.91 563.26 297.81 559.96 306.82C555.723 318.317 553.533 330.467 553.49 342.72V376.99L530.49 372.99C530.49 372.99 531.49 324.99 527.49 316.99C524.66 311.32 527.34 274.05 529.15 252.78C529.9 244.03 530.49 237.99 530.49 237.99L565.49 246.99L564.3 261.91Z" fill="black"/>
                        <path id="Vector_40" d="M451.5 476.99L442.85 526.19C441.759 532.759 440.086 539.218 437.85 545.49C432.78 559.35 436.02 578.78 438.48 589.38C439.57 594.06 440.48 597.02 440.48 597.02L414.48 611.02L406.48 605.02V601.02L405.48 512.02C399.48 498.02 401.48 477.02 405.48 469.02C406.617 466.392 407.417 463.63 407.86 460.8C409.86 450.08 410.48 435.02 410.48 435.02C410.48 435.02 426.48 408.02 445.48 426.02C452.48 432.65 455.14 441.32 455.7 449.62C456.68 463.83 451.5 476.99 451.5 476.99Z" fill="#DB8B8B"/>
                        <path id="Vector_41" opacity="0.1" d="M455.7 449.59C441.83 457.83 417.7 460.16 407.86 460.77C409.86 450.05 410.48 434.99 410.48 434.99C410.48 434.99 426.48 407.99 445.48 425.99C452.48 432.62 455.14 441.29 455.7 449.59Z" fill="black"/>
                        <path id="Vector_42" d="M489.48 424.99C478.846 430.653 468.797 437.352 459.48 444.99C443.48 457.99 403.48 458.99 403.48 458.99V443.99C404.48 425.99 387.48 405.99 364.48 349.99C349.79 314.23 353.86 293.99 358.72 283.99C361.48 278.34 364.48 275.99 364.48 275.99L489.48 299.99L493.95 313.39L503.48 341.99C503.48 341.99 468.48 343.99 462.48 346.99C456.48 349.99 460.48 376.99 460.48 376.99C454.48 404.99 489.48 424.99 489.48 424.99Z" fill="#ABB1D1"/>
                        <path id="Vector_43" opacity="0.1" d="M565.48 246.99L564.3 261.91C546.9 266.91 534.48 250.99 534.48 250.99C532.665 251.477 530.882 252.074 529.14 252.78C529.89 244.03 530.48 237.99 530.48 237.99L565.48 246.99Z" fill="black"/>
                        <path id="Vector_44" opacity="0.1" d="M493.95 313.39C493.48 318.06 493.48 320.99 493.48 320.99C493.48 320.99 470.48 339.99 431.48 310.99C392.48 281.99 357.48 289.99 357.48 289.99C357.48 289.99 357.89 287.67 358.72 283.99C361.48 278.34 364.48 275.99 364.48 275.99L489.48 299.99L493.95 313.39Z" fill="black"/>
                        <path id="Vector_45" d="M578.96 207.94C576.35 228.29 575.48 253.94 575.48 253.94C552.48 271.94 534.48 248.94 534.48 248.94C512.76 254.77 502.55 273.78 497.74 290.37C495.164 299.344 493.732 308.607 493.48 317.94C493.48 317.94 487.4 322.94 476.2 323.94C465.61 324.83 450.43 322.07 431.48 307.94C392.48 278.94 357.48 286.94 357.48 286.94C357.48 286.94 364.48 246.94 380.48 234.94C396.48 222.94 408.48 207.94 428.48 161.94C448.48 115.94 489.48 126.94 489.48 126.94C489.48 126.94 491.48 117.94 528.48 126.94C537.492 129.302 545.834 133.721 552.85 139.85C572.64 156.49 582.24 182.3 578.96 207.94Z" fill="black"/>
                        <path id="Vector_46" d="M541.85 149.49C541.8 150.82 541.69 152.3 541.51 153.95C539.51 171.95 537.51 169.95 515.51 173.95C501.83 176.44 494.72 165.01 491.3 156.01C490.062 152.75 489.128 149.382 488.51 145.95L536.51 137.95C536.51 137.95 542.26 136.34 541.85 149.49Z" fill="#DB8B8B"/>
                        <path id="Vector_47" opacity="0.05" d="M497.74 290.42C495.164 299.394 493.732 308.657 493.48 317.99C493.48 317.99 487.4 322.99 476.2 323.99C475.884 323.353 475.643 322.682 475.48 321.99C473.48 312.99 458.48 296.99 458.48 296.99C448.48 287.99 446.48 271.99 446.48 271.99L429.98 223.49L424.48 218.99C424.48 218.99 447.48 200.99 467.48 215.99C487.48 230.99 481.48 262.99 481.48 262.99L485.48 273.99C489.63 277.49 493.85 283.66 497.74 290.42Z" fill="black"/>
                        <path id="Vector_48" d="M427.48 217.99L449.48 270.99C449.48 270.99 451.48 286.99 461.48 295.99C461.48 295.99 476.48 311.99 478.48 320.99C480.48 329.99 508.48 353.99 508.48 353.99C508.48 353.99 534.48 377.99 536.48 386.99C536.48 386.99 560.48 393.99 557.48 407.99C557.48 407.99 575.48 389.99 557.48 372.99C539.48 355.99 515.48 320.99 515.48 320.99C515.48 320.99 501.48 283.99 488.48 272.99L484.48 261.99C484.48 261.99 490.48 229.99 470.48 214.99C450.48 199.99 427.48 217.99 427.48 217.99Z" fill="#DB8B8B"/>
                        <path id="Vector_49" opacity="0.1" d="M440.48 596.99L414.48 610.99L406.48 604.99V600.99C415.464 600.352 424.193 597.718 432.03 593.28C434.43 591.92 436.69 590.58 438.5 589.4C439.55 594.03 440.48 596.99 440.48 596.99Z" fill="black"/>
                        <path id="Vector_50" opacity="0.1" d="M470.48 175.99L484.48 230.99C484.48 230.99 441.48 237.99 432.48 230.99C423.48 223.99 406.48 221.99 406.48 221.99C406.48 221.99 424.48 169.99 434.48 163.99C444.48 157.99 470.48 175.99 470.48 175.99Z" fill="black"/>
                        <path id="Vector_51" d="M470.48 173.99L484.48 228.99C484.48 228.99 441.48 235.99 432.48 228.99C423.48 221.99 406.48 219.99 406.48 219.99C406.48 219.99 424.48 167.99 434.48 161.99C444.48 155.99 470.48 173.99 470.48 173.99Z" fill="black"/>
                        <path id="Vector_52" opacity="0.1" d="M541.85 148.49C539.049 152.356 535.487 155.609 531.383 158.047C527.278 160.485 522.718 162.058 517.983 162.669C513.248 163.28 508.439 162.915 503.85 161.598C499.261 160.281 494.99 158.039 491.3 155.01C490.062 151.75 489.128 148.382 488.51 144.95L536.51 136.95C536.51 136.95 542.26 135.34 541.85 148.49Z" fill="black"/>
                        <path id="Vector_53" d="M548.48 126.99C548.48 136.273 544.793 145.175 538.229 151.739C531.665 158.303 522.763 161.99 513.48 161.99C504.197 161.99 495.295 158.303 488.731 151.739C482.168 145.175 478.48 136.273 478.48 126.99C478.48 126.41 478.48 125.83 478.48 125.25C478.711 115.967 482.62 107.157 489.346 100.756C496.073 94.3555 505.067 90.8893 514.35 91.12C523.633 91.3508 532.443 95.2595 538.844 101.986C545.245 108.713 548.711 117.707 548.48 126.99V126.99Z" fill="#DB8B8B"/>
                        <path id="Vector_54" opacity="0.1" d="M548.48 126.99C548.483 130.216 548.039 133.426 547.16 136.53C544.455 137.12 541.633 136.861 539.08 135.79C535.34 134.32 532.13 131.79 528.54 129.97C518.43 124.85 506.4 125.86 495.2 127.55C489.64 128.39 483.33 129.17 478.96 125.63C478.81 125.511 478.666 125.385 478.53 125.25C478.761 115.967 482.67 107.157 489.396 100.756C496.123 94.3555 505.117 90.8893 514.4 91.12C523.683 91.3508 532.493 95.2595 538.894 101.986C545.295 108.713 548.761 117.707 548.53 126.99H548.48Z" fill="black"/>
                        <path id="Vector_55" opacity="0.05" d="M384.98 234.49C384.98 234.49 410.98 241.49 418.98 259.49C426.98 277.49 448.62 280.78 448.62 280.78" fill="black"/>
                        <path id="Vector_56" d="M482.98 630.49H422.98V649.49H482.98V630.49Z" fill="#6C63FF"/>
                        <path id="Vector_57" opacity="0.1" d="M482.98 630.49H422.98V649.49H482.98V630.49Z" fill="black"/>
                        <path id="Vector_58" d="M431.99 595.23C437.36 592.23 442.07 589.23 442.48 587.99C442.48 587.99 456.03 602.29 468.1 606.73C472.159 608.229 476.044 610.16 479.69 612.49C484.47 615.49 491.29 619.02 497.48 619.02C497.48 619.02 511.48 631.02 484.48 633.02C457.48 635.02 394.48 628.02 394.48 628.02L398.48 603.02C410.167 603.705 421.804 601 431.99 595.23Z" fill="black"/>
                    </g>
                    <g id="hat">
                        <path id="Vector_59" d="M453.16 105.34C455.29 112.02 465.52 112.23 470.77 117.15C473.5 119.71 474.77 123.49 477.77 125.77C481.94 128.95 487.96 128.25 493.27 127.49C503.96 125.97 515.44 125.06 525.08 129.67C528.5 131.3 531.57 133.58 535.14 134.91C538.71 136.24 543.14 136.4 546.04 134.04C548.36 132.15 549.21 129.04 551.31 126.96C552.94 125.32 555.21 124.4 557.07 122.96C561.15 119.88 562.91 114.86 564.07 110.06C566.47 100.18 567.16 89.53 563.07 80.16C558.98 70.79 549.14 63.16 538.4 63.65C535.11 63.8 531.9 64.65 528.62 65.01C520.07 65.88 511.62 63.01 503.04 62.52C500.551 62.2172 498.027 62.5616 495.71 63.52C493.963 64.4908 492.457 65.8406 491.3 67.47C487.372 72.6154 484.682 78.5969 483.44 84.95C482.44 89.74 482.39 94.08 476.52 94.82C469.85 95.7 448.65 91.21 453.16 105.34Z" fill="#472727"/>
                    </g>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="896.5" y1="104" x2="105" y2="656.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7E77F5"/>
                        <stop offset="1" stop-color="#6C63FF" stop-opacity="0"/>
                    </linearGradient>
                    <clipPath id="clip0">
                        <rect width="1057.7" height="784.98" fill="white"/>
                    </clipPath>
                </defs>
            </svg>



        </div>

    </div>
    <div class="clr"></div>
</section>

<section id="about-us">


    <section id="full_about">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="about_contant text-center">
                        <h3 class="about-h3">About us</h3>
                        <img src="image/aboutshap.png" alt="">
                        <br/><br/>
                        <h4>A ride that saves you</h4>

                        <p>We have a vision to provide a dockless bike sharing sharing service to ensure first mile and last mile solution </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about_img text-right">
                        <img src="image/image (8).png" class="w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </section>
</section>

<!-- about end -->

<section id="works">

    <section id="full_feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feed_contant text-center">
                        <h3>How Its Works</h3>
                        <img src="image/aboutshap.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="user_feedback">
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-8 slide-for-fbtxt text-center m-auto text-black-50">
                    <div class="feedback-text">
                        <h2>Find Bike in Specific Location</h2>
                        <div class="feedback_ratings pb-2">
                            <i class="fa fa-star"></i>

                        </div>
                    </div>
                    <div class="feedback-text">
                        <h2>Get Bike Code and Do Verification</h2>
                        <div class="feedback_ratings pb-2">
                            <i class="fa fa-star"></i>

                        </div>
                    </div>
                    <div class="feedback-text">
                        <h2>Go Source To Destination</h2>
                        <div class="feedback_ratings pb-2">
                            <i class="fa fa-star"></i>

                        </div>
                    </div>
                    <div class="feedback-text">
                        <h2>Park & Lock</h2>
                        <div class="feedback_ratings pb-2">
                            <i class="fa fa-star"></i>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 m-auto">
                    <div class="row user_slider">
                        <div class="col-md-12">
                            <div class="user_img">
                                <img src="image/image (9).png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user_img">
                                <img src="image/image (6).png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user_img">
                                <img src="image/image (7).png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user_img">
                                <img src="image/image.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </section>

</section>

<!-- how ot works end -->

<section id="location">

    <section id="full_feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feed_contant text-center">
                        <h3>Location</h3>
                        <img src="image/aboutshap.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row full-location">
        <div class="col-md-12">
            <div class="col-md-6 location-png">
                <img src="image/image (3).png" alt="">
            </div>
            <div class="col-md-6 location-icon">
                <h2>Daffodil International University</h2>
                <a href="bike_finder.php?find=Khahan_Bazar"><i class="fa fa-star location-name"> Khahan Bazar</i></a>
            </br>
           <a href="bike_finder.php?find=YKSG_Hall"> <i class="fa fa-star location-name"> YKSG Hall</i></a>
        </div>
    </div>


    <div class="col-md-12">
        <div class="col-md-6 location-png">
            <img src="image/image (2).png" alt="">
        </div>
        <div class="col-md-6 location-icon-city">
            <h2>City University</h2>
           <a href="bike_finder.php?find=City_University_Hall"> <i class="fa fa-star location-name">City University Hall</i></a>
        </br>
        <a href="bike_finder.php?find=Kumkumari_Bazar"><i class="fa fa-star location-name">Kumkumari Bazar</i></a>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-6 location-png">
        <img src="image/image (3).png" alt="">
    </div>
    <div class="col-md-6 location-icon-brac">
        <h2>Brac University</h2>
        <a href="bike_finder.php?find=Brac_University_Gate"><i class="fa fa-star location-name">Brac University Gate</i></a>
    </br>
    <a href="bike_finder.php?find=Akrain_Bari"><i class="fa fa-star location-name">Akrain Bari</i></a>
</div>
</div>


<div class="col-md-12">
    <div class="col-md-6 location-png">
        <img src="image/image (2).png" alt="">
    </div>
    <div class="col-md-6 location-icon-model">
        <h2>Ashulia Model Town</h2>
       <a href="bike_finder.php?find=Membar_Bari"> <i class="fa fa-star location-name">Membar Bari</i></a>

    </div>
</div>

<div class="clr"></div>


</div>
</section>
<!--end location-->

<section id="bikes">

    <section id="full_feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feed_contant text-center">
                        <h3>Available Bikes</h3>

                        <img src="image/aboutshap.png" alt="">
                        <p>Book Your favourite Bike</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container recharge">
        <div class="recharge-heading">

        </div>

        <div class="row about-cols">
            <div class="card-deck">
                <?php 

                 $select_query = "SELECT * FROM all_bikes WHERE status = 'available' ORDER BY bike_id DESC LIMIT 4";
                $rslts = $datab->select($select_query);
                if ($rslts) {
                    while ($row = $rslts->fetch_assoc()) {  ?>
                        <div class="card wow fadeInUp">
                            <div class="img">
                                <img src="admin/image/<?php echo $row['bike_img']; ?> " class="card-img-top" alt="..." class="img-fluid">
                                <div class="icon"><i class="fas fa-motorcycle"></i></div>
                            </div>
                            <div class="card-body">
                                 <p class="mt-2"><b>Bike : </b><?php echo $row['bike_brand']; ?> </p>
                                <p><b>CC : </b><?php echo $row['bike_cc']; ?> </p>
                                <p><b>Reg no : </b><?php echo $row['bike_reg']; ?> </p>
                                <p><b>Location: </b><?php echo $row['bike_location']; ?> </p>
                                <?php 
                                if (Session::get('userName')) {?>
                                   <a href="booking_bike.php?booking=<?php echo $row['bike_id']; ?>"><button class="btn btn-success">Book Now!</button></a> 
                                <?php  }else{?>
                                    <p style="color:#000; text-align: center;">Please <a href="login/login.php">login</a> to book bike!</p>
                                <?php }


                                 ?>

                            </div>
                        </div>

                   <?php }
                }


                 ?>

                
            </div>
            <div style="margin: 0 auto;" class="view-more mt-4">
                <a href="view_more_bike.php"><button class="btn btn-warning">Visit More Bikes</button></a>
            </div>
        </div>


    </div>
    <div class="clr"></div>
</section>
<!--Recharge end-->

<section id="contract">

    <section id="full_touch">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="touch_contant text-center">
                        <h3>Get In Touch</h3>
                        <img src="image/aboutshap.png" alt="">
                    </div>
                </div>
                <form class="m-auto pt-5" method="post" action="send_message.php">
                    <div class="form-row touch_form">
                        <div class="col-md-4 mb-4">
                            <input name="u_name" type="text" class="form-control" id="validationDefault03" placeholder="Name">
                        </div>
                        <div class="col-md-4 mb-4">

                            <input name="u_email" type="text" class="form-control" id="validationDefault04" placeholder="Your E-mail">
                        </div>
                        <div class="col-md-4 mb-4">
                            <input name="u_phone" type="text" class="form-control" id="validationDefault05" placeholder="Your Phone">
                        </div>

                        <div class="col-md-12 mb-4">

                            <input name="subject" type="text" class="form-control" id="validationDefault04" placeholder="Subject">
                        </div>

                        <div class="col-md-12 mb-4">
                            <textarea name="msg_content" class="form-control ms_area" id="validationTextarea" placeholder="Message"></textarea>
                        </div>
                        <button name="send" class="btn m-auto" type="submit">send</button>
                    </div>
                </form>
            </div>
            <div class="clr"></div>
        </div>
    </section>
    <!-- touch end -->
</section>

<section id="footer">

    <section id="full_futtar">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="futtar_icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="futtar_text ">
                        <p>Copyright @ BY <span>Bike Rent Service </span>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<?php require 'inc/footer.php'; ?>



