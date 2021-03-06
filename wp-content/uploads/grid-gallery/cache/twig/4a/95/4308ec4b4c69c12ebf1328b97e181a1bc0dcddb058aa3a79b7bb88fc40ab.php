<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_4a954308ec4b4c69c12ebf1328b97e181a1bc0dcddb058aa3a79b7bb88fc40ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getshow($_areaWidth = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $_areaWidth,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["areaWidth"]) ? $context["areaWidth"] : null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 29
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 38
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 44
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 50
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 53
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 53,  145 => 50,  133 => 44,  128 => 42,  102 => 29,  96 => 26,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  68 => 15,  54 => 10,  38 => 3,  882 => 151,  870 => 150,  844 => 146,  830 => 142,  814 => 141,  811 => 140,  798 => 139,  786 => 136,  765 => 133,  746 => 131,  720 => 127,  703 => 125,  699 => 124,  683 => 123,  680 => 122,  666 => 121,  653 => 118,  650 => 117,  647 => 116,  644 => 115,  642 => 114,  636 => 112,  623 => 111,  610 => 108,  607 => 107,  604 => 106,  591 => 105,  578 => 102,  575 => 101,  572 => 100,  559 => 99,  546 => 96,  543 => 95,  540 => 94,  514 => 90,  508 => 88,  495 => 87,  479 => 83,  476 => 82,  463 => 81,  450 => 78,  447 => 77,  444 => 76,  441 => 75,  439 => 74,  436 => 73,  420 => 71,  404 => 67,  401 => 66,  388 => 65,  372 => 61,  369 => 60,  356 => 59,  344 => 56,  338 => 55,  312 => 51,  309 => 50,  305 => 49,  296 => 48,  282 => 47,  267 => 42,  263 => 41,  254 => 37,  250 => 36,  239 => 35,  233 => 32,  229 => 31,  226 => 30,  224 => 29,  219 => 26,  217 => 25,  214 => 24,  200 => 23,  188 => 20,  173 => 18,  169 => 17,  164 => 16,  162 => 15,  159 => 14,  156 => 13,  153 => 11,  142 => 10,  130 => 7,  97 => 3,  88 => 2,  70 => 16,  67 => 145,  64 => 138,  49 => 8,  43 => 86,  40 => 80,  37 => 70,  34 => 64,  31 => 58,  28 => 46,  25 => 22,  22 => 9,  19 => 5,  78 => 18,  75 => 1,  72 => 16,  69 => 15,  63 => 13,  61 => 129,  58 => 11,  55 => 110,  52 => 104,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  33 => 2,  46 => 92,  21 => 1,  1881 => 4,  1869 => 3,  1861 => 1132,  1857 => 1131,  1851 => 1128,  1847 => 1127,  1841 => 1124,  1837 => 1123,  1831 => 1120,  1827 => 1119,  1822 => 1116,  1811 => 1113,  1802 => 1112,  1797 => 1111,  1795 => 1094,  1791 => 1092,  1788 => 1091,  1785 => 1090,  1781 => 950,  1771 => 946,  1762 => 940,  1758 => 939,  1753 => 937,  1744 => 931,  1740 => 930,  1735 => 929,  1730 => 928,  1727 => 927,  1722 => 802,  1713 => 794,  1709 => 793,  1702 => 789,  1696 => 786,  1693 => 785,  1690 => 784,  1685 => 799,  1683 => 784,  1677 => 781,  1673 => 780,  1666 => 776,  1660 => 773,  1656 => 771,  1653 => 770,  1642 => 761,  1638 => 760,  1634 => 759,  1630 => 758,  1626 => 757,  1619 => 756,  1615 => 755,  1611 => 754,  1607 => 753,  1603 => 752,  1599 => 751,  1591 => 746,  1582 => 740,  1575 => 736,  1564 => 728,  1560 => 727,  1555 => 725,  1551 => 724,  1543 => 719,  1534 => 713,  1527 => 709,  1518 => 703,  1511 => 699,  1502 => 693,  1495 => 689,  1486 => 683,  1479 => 679,  1470 => 673,  1463 => 669,  1454 => 663,  1447 => 659,  1441 => 655,  1439 => 652,  1434 => 649,  1431 => 645,  1429 => 644,  1425 => 642,  1422 => 641,  1413 => 481,  1409 => 480,  1401 => 475,  1395 => 472,  1391 => 470,  1388 => 469,  1384 => 462,  1381 => 461,  1374 => 463,  1372 => 461,  1369 => 460,  1367 => 458,  1363 => 456,  1361 => 454,  1357 => 452,  1355 => 450,  1351 => 448,  1349 => 447,  1345 => 445,  1343 => 443,  1339 => 441,  1337 => 439,  1333 => 437,  1331 => 433,  1326 => 430,  1323 => 426,  1321 => 425,  1317 => 423,  1314 => 422,  1305 => 415,  1303 => 414,  1299 => 412,  1297 => 411,  1293 => 409,  1291 => 408,  1287 => 406,  1285 => 405,  1281 => 403,  1279 => 402,  1270 => 396,  1264 => 395,  1259 => 393,  1253 => 392,  1248 => 390,  1242 => 389,  1235 => 385,  1225 => 378,  1218 => 374,  1209 => 368,  1203 => 367,  1199 => 366,  1193 => 365,  1186 => 361,  1178 => 355,  1175 => 354,  1166 => 347,  1164 => 345,  1160 => 343,  1158 => 342,  1154 => 340,  1152 => 338,  1149 => 337,  1146 => 323,  1144 => 312,  1139 => 309,  1136 => 308,  1132 => 279,  1129 => 278,  1122 => 280,  1120 => 278,  1116 => 276,  1114 => 260,  1110 => 258,  1108 => 257,  1103 => 254,  1100 => 250,  1098 => 249,  1094 => 247,  1091 => 246,  1079 => 236,  1077 => 234,  1073 => 232,  1071 => 230,  1067 => 228,  1065 => 226,  1062 => 225,  1058 => 220,  1056 => 219,  1052 => 217,  1050 => 215,  1046 => 213,  1044 => 211,  1040 => 209,  1038 => 207,  1035 => 206,  1031 => 202,  1029 => 192,  1022 => 188,  1013 => 182,  1009 => 181,  1003 => 177,  1001 => 176,  996 => 173,  993 => 172,  988 => 1136,  986 => 1090,  976 => 1083,  972 => 1082,  968 => 1081,  962 => 1078,  957 => 1077,  955 => 1076,  948 => 1072,  941 => 1068,  916 => 1045,  906 => 1041,  900 => 1038,  890 => 1037,  880 => 1036,  877 => 1035,  873 => 1034,  869 => 1032,  867 => 960,  861 => 957,  856 => 147,  850 => 951,  848 => 927,  843 => 925,  840 => 924,  834 => 923,  827 => 919,  821 => 916,  809 => 908,  802 => 904,  791 => 899,  785 => 896,  781 => 895,  776 => 894,  773 => 893,  769 => 134,  764 => 890,  761 => 889,  758 => 888,  754 => 886,  752 => 885,  749 => 132,  743 => 882,  741 => 881,  736 => 880,  732 => 130,  728 => 878,  723 => 877,  721 => 876,  715 => 872,  705 => 868,  700 => 866,  694 => 865,  688 => 864,  685 => 863,  681 => 862,  678 => 861,  675 => 860,  672 => 859,  670 => 858,  667 => 857,  665 => 848,  659 => 845,  654 => 843,  646 => 838,  639 => 113,  629 => 827,  624 => 825,  618 => 822,  613 => 820,  608 => 818,  601 => 814,  597 => 813,  590 => 809,  584 => 806,  579 => 804,  576 => 803,  574 => 802,  571 => 801,  569 => 770,  565 => 768,  563 => 641,  556 => 636,  554 => 635,  547 => 630,  545 => 629,  541 => 627,  539 => 623,  535 => 621,  533 => 620,  529 => 618,  527 => 93,  523 => 614,  521 => 610,  517 => 608,  515 => 607,  511 => 89,  509 => 604,  505 => 602,  503 => 599,  499 => 597,  497 => 594,  493 => 592,  491 => 589,  488 => 588,  486 => 587,  482 => 84,  480 => 582,  473 => 578,  467 => 575,  461 => 572,  454 => 568,  445 => 562,  438 => 560,  433 => 72,  426 => 556,  418 => 551,  412 => 547,  410 => 530,  407 => 68,  405 => 520,  402 => 519,  400 => 491,  393 => 486,  391 => 469,  387 => 467,  385 => 422,  382 => 421,  380 => 354,  377 => 353,  375 => 62,  367 => 302,  365 => 301,  354 => 293,  350 => 292,  342 => 289,  337 => 287,  332 => 284,  330 => 53,  327 => 245,  325 => 172,  319 => 169,  315 => 168,  311 => 167,  306 => 165,  303 => 164,  300 => 163,  298 => 162,  295 => 161,  292 => 160,  283 => 154,  268 => 144,  260 => 40,  253 => 138,  246 => 134,  242 => 132,  228 => 121,  220 => 120,  212 => 114,  206 => 112,  204 => 111,  201 => 110,  199 => 109,  190 => 103,  180 => 96,  175 => 94,  166 => 88,  161 => 86,  152 => 80,  147 => 78,  143 => 77,  140 => 48,  132 => 63,  129 => 62,  127 => 61,  124 => 60,  121 => 38,  116 => 36,  109 => 32,  107 => 53,  101 => 50,  93 => 45,  85 => 40,  77 => 35,  66 => 14,  59 => 27,  51 => 25,  48 => 8,  45 => 7,);
    }
}
