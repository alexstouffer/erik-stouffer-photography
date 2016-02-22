<?php

/* @insta/includes/toolbar.twig */
class __TwigTemplate_a3c28d0caa9c87140e25209984800adc0cbca3788efc6aa24f8a24af39602c4a extends Twig_Template
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
        // line 2
        echo "<section id=\"photo-toolbar\" class=\"supsystic-bar\" data-intro=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["manual"]) ? $context["manual"] : null), "intro"), "html", null, true);
        echo "\" data-step=\"1\">
    <ul class=\"supsystic-bar-controls\">
        <li title=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Return to the gallery")), "html", null, true);
        echo "\">
            <a class=\"button button-primary\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">
                <i class=\"fa fa-angle-left\"></i>
                ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Return to the gallery")), "html", null, true);
        echo "
            </a>
        </li>
        <li title=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
            <button id=\"add_images\" class=\"button button-primary\">
                <i class=\"fa fa-download\"></i>
                ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import images")), "html", null, true);
        echo "
            </button>
        </li>
        <li title=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Logout")), "html", null, true);
        echo "\">
            <a class=\"button button-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "logout", 2 => array("id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">
                <i class=\"fa fa-sign-out\"></i>
                ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Logout")), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"separator\">
            |
        </li>

        <li title=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select/unselect all photos")), "html", null, true);
        echo "\">
            <button id=\"button-select\" class=\"button\" data-value=\"select\" data-toolbar-button>
                <i class=\"fa fa-check-square-o fa-fw\"></i>
            </button>
        </li>
    </ul>
</section>
";
    }

    public function getTemplateName()
    {
        return "@insta/includes/toolbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  61 => 19,  56 => 17,  52 => 16,  46 => 13,  40 => 10,  34 => 7,  25 => 4,  19 => 2,  141 => 51,  132 => 44,  126 => 40,  121 => 37,  110 => 33,  108 => 32,  103 => 30,  98 => 28,  95 => 27,  91 => 26,  87 => 24,  85 => 23,  82 => 22,  79 => 21,  74 => 18,  72 => 17,  64 => 14,  57 => 12,  50 => 10,  43 => 8,  36 => 6,  32 => 4,  29 => 5,);
    }
}
