<?php

/* @insta/authorization.twig */
class __TwigTemplate_5807de025676a300d18687dd1ac7c922e0bfb55dcb4764c8b7bbfb2ddba5b078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["galleryName"]) ? $context["galleryName"] : null)), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import images")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "authorization", 2 => array("id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Instagram authorization")), "html", null, true);
        echo "</a>
    </nav>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
    <h2 id=\"gg-alrt\" style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
\t\t<span style=\"margin-bottom: 20px; display: block;\">
\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload your images from the Instagram Media Library")), "html", null, true);
        echo "
\t\t</span>
        <a class=\"button button-primary button-hero bordered\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
            <i class=\"fa fa-fw fa-instagram\"></i>
            ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload from Instagram")), "html", null, true);
        echo "
        </a>
    </h2>
";
    }

    public function getTemplateName()
    {
        return "@insta/authorization.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  85 => 23,  80 => 21,  75 => 18,  72 => 17,  63 => 13,  56 => 11,  49 => 9,  42 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
