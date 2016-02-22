<?php

/* @insta/index.twig */
class __TwigTemplate_625e1889fba5e56c962f22348b7aca85fef9aefcfe6d61901b2f5d7d30b478b6 extends Twig_Template
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
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["galleryName"]) ? $context["galleryName"] : null)), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import images")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["id"]) ? $context["id"] : null))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Instagram")), "html", null, true);
        echo "</a>
    </nav>

    ";
        // line 17
        $this->env->loadTemplate("@insta/includes/toolbar.twig")->display($context);
        // line 18
        echo "
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
    ";
        // line 23
        if ((twig_test_iterable((isset($context["images"]) ? $context["images"] : null)) && (twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 0))) {
            // line 24
            echo "
        <ul class=\"sg-photos\" data-sortable data-container=\"block\">
            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "                <li class=\"gg-list-item\" data-entity data-entity-type=\"photo\"
                    data-entity-info=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["image"]) ? $context["image"] : null)), "html", null, true);
                echo "\">
                    <div class=\"gg-check\" style=\"position: absolute; top: 14px; left: 14px;\">
                        <input type=\"checkbox\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
                echo "\" class=\"gg-checkbox\" data-observable>
                    </div>
                    ";
                // line 32
                $context["sizes"] = array("width" => 60, "height" => 80);
                // line 33
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
                echo "\" width=\"150\"
                         style=\"min-height:150px;max-height:150px;\"/>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </ul>

    ";
        } else {
            // line 40
            echo "
        <p>Sorry, but you have no images on your instagram account</p>

    ";
        }
        // line 44
        echo "
    <script>
        /*global jQuery*/
        (function (\$) {
            jQuery(document).ready(function () {

                jQuery('#add_images').click(function () {
                    getResourcesList(\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\");
                });

                \$('.gg-list-item').on('click', function() {
                    \$(this).find('input:checkbox').iCheck('toggle');
                });

                var button_select = jQuery('#button-select').click(function () {

                    jQuery('input:checkbox').each(function () {
                        if (button_select.data('value') == 'select') {
                            \$(this).attr('checked', 'checked').iCheck('update');
                        } else {
                            \$(this).removeAttr('checked').iCheck('update');
                        }
                    });
                    if (\$(this).data('value') == 'select') {
                        \$(this).data('value', 'remove');
                    } else {
                        \$(this).data('value', 'select');
                    }
                });

            });

            function getResourcesList(galleryId) {
                var url = [],
                        elements = jQuery('.gg-checkbox:checked').each(function () {
                            url.push(jQuery(this).val());
                        }),
                        resources = [];

                if (elements.length) {
                    SupsysticGallery.Loader.show('Please, wait until images will be imported.');
                    var request = SupsysticGallery.Ajax.Post({
                        module: 'insta',
                        action: 'save'
                    });

                    request.add('urls', url);

                    request.send(function (response) {

                        for (var i = 0; i < response.ids.length; ++i) {
                            resources.push({type: 'photo', id: response.ids[i]});
                        }

                        if (resources.length) {
                            SupsysticGallery.Loader.show('Please, wait until images will be imported.');
                            \$.post(wp.ajax.settings.url, {
                                action: 'grid-gallery',
                                route: {module: 'galleries', action: 'attach'},
                                gallery_id: galleryId,
                                resources: resources
                            }, function (response) {
                                \$.jGrowl(response.message);
                                window.location = response.redirectUrl.replace(/\\\\\"/g, '\"');
                            });
                        } else {
                            \$.jGrowl('Please select images for import');
                        }

                        if (response.msg == 'Loaded')
                            SupsysticGallery.Loader.hide();
                        \$.jGrowl('Done');
                    });
                } else {
                    \$.jGrowl('Please select images for import');
                }
            }

        })(jQuery)
    </script>
";
    }

    public function getTemplateName()
    {
        return "@insta/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  132 => 44,  126 => 40,  121 => 37,  110 => 33,  108 => 32,  103 => 30,  98 => 28,  95 => 27,  91 => 26,  87 => 24,  85 => 23,  82 => 22,  79 => 21,  74 => 18,  72 => 17,  64 => 14,  57 => 12,  50 => 10,  43 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
