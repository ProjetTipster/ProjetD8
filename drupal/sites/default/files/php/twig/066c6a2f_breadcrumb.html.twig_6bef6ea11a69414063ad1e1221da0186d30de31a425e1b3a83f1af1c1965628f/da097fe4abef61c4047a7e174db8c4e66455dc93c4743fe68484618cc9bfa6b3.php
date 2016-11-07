<?php

/* themes/bootstrap/templates/system/breadcrumb.html.twig */
class __TwigTemplate_51f4672c5e8182d3112fceeb4295730d1b2c9f3fc0bfb868b94c7ddb2c55088e extends Twig_Template
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
        $__internal_c189a70c477822c569bfb6fb79498fb946f6709f1195849992c784152aa03755 = $this->env->getExtension("native_profiler");
        $__internal_c189a70c477822c569bfb6fb79498fb946f6709f1195849992c784152aa03755->enter($__internal_c189a70c477822c569bfb6fb79498fb946f6709f1195849992c784152aa03755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/breadcrumb.html.twig"));

        $tags = array("if" => 12, "for" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
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

        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <ol class=\"breadcrumb\">
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "      <li ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 16
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 17
                    echo "          <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</a>
        ";
                } else {
                    // line 19
                    echo "          ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "
        ";
                }
                // line 21
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ol>
";
        }
        
        $__internal_c189a70c477822c569bfb6fb79498fb946f6709f1195849992c784152aa03755->leave($__internal_c189a70c477822c569bfb6fb79498fb946f6709f1195849992c784152aa03755_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  76 => 21,  70 => 19,  62 => 17,  60 => 16,  55 => 15,  51 => 14,  48 => 13,  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% if breadcrumb %}*/
/*   <ol class="breadcrumb">*/
/*     {% for item in breadcrumb %}*/
/*       <li {{ item.attributes }}>*/
/*         {% if item.url %}*/
/*           <a href="{{ item.url }}">{{ item.text }}</a>*/
/*         {% else %}*/
/*           {{ item.text }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ol>*/
/* {% endif %}*/
/* */
