<?php

/* core/modules/views/templates/views-view-row-rss.html.twig */
class __TwigTemplate_e76329d35fd80b9ebd6cd3a2907de34ba2336593637c1f7722a2ae575ed2806b extends Twig_Template
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
        $__internal_dd7f9570f20cdbee5fe34bf9e22ec7704631ed57521dd4aeae0ee8024acd916d = $this->env->getExtension("native_profiler");
        $__internal_dd7f9570f20cdbee5fe34bf9e22ec7704631ed57521dd4aeae0ee8024acd916d->enter($__internal_dd7f9570f20cdbee5fe34bf9e22ec7704631ed57521dd4aeae0ee8024acd916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/views/templates/views-view-row-rss.html.twig"));

        $tags = array("for" => 22, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 18
        echo "<item>
  <title>";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</title>
  <link>";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</link>
  <description>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "</description>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item_elements"]) ? $context["item_elements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "<";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
            // line 24
            if ($this->getAttribute($context["item"], "value", array())) {
                // line 25
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true));
                echo ">
    ";
            } else {
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(" />"));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</item>
";
        
        $__internal_dd7f9570f20cdbee5fe34bf9e22ec7704631ed57521dd4aeae0ee8024acd916d->leave($__internal_dd7f9570f20cdbee5fe34bf9e22ec7704631ed57521dd4aeae0ee8024acd916d_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-row-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  79 => 27,  71 => 25,  69 => 24,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display an item in a views RSS feed.*/
/*  **/
/*  * Available variables:*/
/*  * - title: RSS item title.*/
/*  * - link: RSS item link.*/
/*  * - description: RSS body text.*/
/*  * - item_elements: RSS item elements to be rendered as XML (pubDate, creator,*/
/*  *   guid).*/
/*  **/
/*  * @see template_preprocess_views_view_row_rss()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <item>*/
/*   <title>{{ title }}</title>*/
/*   <link>{{ link }}</link>*/
/*   <description>{{ description }}</description>*/
/*   {% for item in item_elements -%}*/
/*     <{{ item.key }}{{ item.attributes -}}*/
/*     {% if item.value -%}*/
/*       >{{ item.value }}</{{ item.key }}>*/
/*     {% else -%}*/
/*       {{ ' />' }}*/
/*     {% endif %}*/
/*   {%- endfor %}*/
/* </item>*/
/* */
