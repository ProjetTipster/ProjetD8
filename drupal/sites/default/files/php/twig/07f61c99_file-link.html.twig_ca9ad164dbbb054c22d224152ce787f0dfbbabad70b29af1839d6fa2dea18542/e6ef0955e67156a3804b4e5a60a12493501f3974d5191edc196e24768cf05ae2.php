<?php

/* themes/bootstrap/templates/file/file-link.html.twig */
class __TwigTemplate_43b9e247a981be880f763801b3707557bd6fcdbd614c1e2c73960431acdd4538 extends Twig_Template
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
        $__internal_06b984c9c80c48c96d57bf270d088b7a31c99da01abd1bc3d43a4d2a8ef11312 = $this->env->getExtension("native_profiler");
        $__internal_06b984c9c80c48c96d57bf270d088b7a31c99da01abd1bc3d43a4d2a8ef11312->enter($__internal_06b984c9c80c48c96d57bf270d088b7a31c99da01abd1bc3d43a4d2a8ef11312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/file/file-link.html.twig"));

        $tags = array("spaceless" => 18, "set" => 20, "if" => 26);
        $filters = array("clean_class" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        ob_start();
        // line 19
        echo "  ";
        // line 20
        $context["classes"] = array(0 => ((        // line 21
(isset($context["icon_only"]) ? $context["icon_only"] : null)) ? ("icon-only") : ("")), 1 => (( !        // line 22
(isset($context["icon_only"]) ? $context["icon_only"] : null)) ? (("icon-" . \Drupal\Component\Utility\Html::getClass((isset($context["icon_position"]) ? $context["icon_position"] : null)))) : ("")));
        // line 25
        echo "  <span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 26
        if ((isset($context["icon_only"]) ? $context["icon_only"] : null)) {
            // line 27
            echo "      <span class=\"file-icon\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "</span>
      <span class=\"sr-only\">
        <span class=\"file-link\">";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
            echo "</span>
        <span class=\"file-size\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["file_size"]) ? $context["file_size"] : null), "html", null, true));
            echo "</span>
      </span>
    ";
        } else {
            // line 33
            echo "      ";
            if (((isset($context["icon_position"]) ? $context["icon_position"] : null) == "after")) {
                // line 34
                echo "        <span class=\"file-link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
                echo "</span><span class=\"file-size\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["file_size"]) ? $context["file_size"] : null), "html", null, true));
                echo "</span><span class=\"file-icon\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                echo "</span>
      ";
            } else {
                // line 36
                echo "        <span class=\"file-icon\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                echo "</span><span class=\"file-link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
                echo "</span><span class=\"file-size\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["file_size"]) ? $context["file_size"] : null), "html", null, true));
                echo "</span>
      ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "  </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_06b984c9c80c48c96d57bf270d088b7a31c99da01abd1bc3d43a4d2a8ef11312->leave($__internal_06b984c9c80c48c96d57bf270d088b7a31c99da01abd1bc3d43a4d2a8ef11312_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/file/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  100 => 38,  90 => 36,  80 => 34,  77 => 33,  71 => 30,  67 => 29,  61 => 27,  59 => 26,  54 => 25,  52 => 22,  51 => 21,  50 => 20,  48 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a link to a file.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: The HTML attributes for the containing element.*/
/*  * - link: A link to the file.*/
/*  * - icon: An icon.*/
/*  * - icon_only: Flag to display only the icon and not the label.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\FileLink::preprocessVariables*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {%*/
/*     set classes = [*/
/*       icon_only ? 'icon-only',*/
/*       not icon_only ? 'icon-' ~ icon_position|clean_class*/
/*     ]*/
/*   %}*/
/*   <span{{ attributes.addClass(classes) }}>*/
/*     {% if icon_only %}*/
/*       <span class="file-icon">{{ icon }}</span>*/
/*       <span class="sr-only">*/
/*         <span class="file-link">{{ link }}</span>*/
/*         <span class="file-size">{{ file_size }}</span>*/
/*       </span>*/
/*     {% else %}*/
/*       {% if icon_position == 'after' %}*/
/*         <span class="file-link">{{ link }}</span><span class="file-size">{{ file_size }}</span><span class="file-icon">{{ icon }}</span>*/
/*       {% else %}*/
/*         <span class="file-icon">{{ icon }}</span><span class="file-link">{{ link }}</span><span class="file-size">{{ file_size }}</span>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </span>*/
/* {% endspaceless %}*/
/* */
