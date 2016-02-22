<?php

/* grid-gallery.twig */
class __TwigTemplate_5e3582e479c170618aab20f2dc142d6fed9cf95a442cd71e7dce04d0127bcb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'alerts' => array($this, 'block_alerts'),
            'header' => array($this, 'block_header'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'table' => array($this, 'block_table'),
            'notes' => array($this, 'block_notes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wraper\">

    ";
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('alerts', $context, $blocks);
        // line 10
        echo "
    <div class=\"supsystic-plugin\">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "        <section class=\"supsystic-content\">
            <nav class=\"supsystic-navigation supsystic-sticky\" style=\"top: 0px;\">
                <ul>
                    <li class=\"supsystic-sticky ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "overview")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "overview"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-info\"></i>
                            ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overview")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li ";
        // line 26
        if ((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "galleries") && ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "action") == "showPresets"))) {
            echo "class=\"active\" ";
        }
        echo ">
                        <a id=\"btn-add-new\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New Gallery")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"supsystic-sticky ";
        // line 32
        if (((($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "galleries") || (null === $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module"))) && ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "action") != "showPresets"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-archive\"></i>
                            ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "
                        </a>
                    </li>


                    <li class=\"supsystic-sticky ";
        // line 40
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "settings")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "settings"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-gear\"></i>
                            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Settings"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>
                    
                    ";
        // line 47
        if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "license"), "method")) {
            // line 48
            echo "                        <li class=\"supsystic-sticky ";
            if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "module") == "license")) {
                echo "active";
            }
            echo "\">
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "license"), "method"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-hand-o-right\"></i>
                                ";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("License")), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 55
        echo "
                    ";
        // line 57
        echo "                    ";
        // line 63
        echo "
                    ";
        // line 65
        echo "                    ";
        // line 110
        echo "
                    ";
        // line 119
        echo "                </ul>
            </nav>
            <div class=\"supsystic-container supsystic-item supsystic-panel\">
                ";
        // line 122
        $this->displayBlock('preview', $context, $blocks);
        // line 123
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "                <div class=\"clear\"></div>
                ";
        // line 125
        $this->displayBlock('table', $context, $blocks);
        // line 126
        echo "            </div>
        </section>
    </div>

    <!-- Modal loading overlay -->
    <div class=\"gg-modal-loading-overlay\"></div>
    <div class=\"gg-modal-loading-object\">
        <p>
            <span id=\"loading-text\">Loading</span>
            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "config"), "get", array(0 => "admin_url"), "method") . "/images/wpspin_light.gif"), "html", null, true);
        echo "\" alt=\"\"
                 title=\"";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loading")), "html", null, true);
        echo "\"/>
        </p>
    </div>

    ";
        // line 140
        $this->displayBlock('notes', $context, $blocks);
        // line 141
        echo "</div>
";
    }

    // line 9
    public function block_alerts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "            <div class=\"supsystic-breadcrumbs\">
                Gallery by Supsystic
            </div>
        ";
    }

    // line 122
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
    }

    // line 125
    public function block_table($context, array $blocks = array())
    {
    }

    // line 140
    public function block_notes($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "grid-gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 140,  219 => 125,  214 => 123,  209 => 122,  202 => 13,  199 => 12,  187 => 140,  180 => 136,  176 => 135,  165 => 126,  163 => 125,  160 => 124,  157 => 123,  155 => 122,  147 => 110,  145 => 65,  142 => 63,  140 => 57,  125 => 49,  118 => 48,  116 => 47,  109 => 43,  104 => 41,  98 => 40,  90 => 35,  85 => 33,  79 => 32,  73 => 29,  62 => 26,  51 => 21,  45 => 20,  40 => 17,  38 => 12,  34 => 10,  25 => 1,  367 => 143,  362 => 140,  358 => 138,  355 => 137,  351 => 135,  348 => 134,  344 => 132,  342 => 131,  339 => 130,  337 => 129,  331 => 128,  327 => 127,  323 => 126,  316 => 125,  305 => 124,  300 => 188,  296 => 145,  292 => 122,  288 => 120,  279 => 117,  275 => 116,  270 => 114,  265 => 112,  259 => 109,  254 => 107,  250 => 106,  244 => 104,  232 => 99,  228 => 98,  220 => 97,  210 => 90,  205 => 88,  201 => 87,  194 => 9,  189 => 141,  184 => 79,  177 => 75,  173 => 74,  167 => 71,  156 => 63,  150 => 119,  143 => 56,  137 => 55,  130 => 51,  124 => 46,  117 => 41,  115 => 37,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 25,  78 => 24,  72 => 23,  68 => 27,  65 => 19,  63 => 18,  61 => 17,  56 => 23,  53 => 13,  43 => 8,  36 => 6,  32 => 9,  29 => 8,);
    }
}
