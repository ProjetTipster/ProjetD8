<?php

/* core/modules/views/templates/views-view-rss.html.twig */
class __TwigTemplate_e041a9f31e10572da88329816190499f0eb53050744d87ba882aa824fcfe34f1 extends Twig_Template
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
        $__internal_3ea20c596ac224d1b2d925bcd97daa5af7c9a08f4391335a61e6ea096592cc7c = $this->env->getExtension("native_profiler");
        $__internal_3ea20c596ac224d1b2d925bcd97daa5af7c9a08f4391335a61e6ea096592cc7c->enter($__internal_3ea20c596ac224d1b2d925bcd97daa5af7c9a08f4391335a61e6ea096592cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/views/templates/views-view-rss.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 20
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<rss version=\"2.0\" xml:base=\"";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["namespaces"]) ? $context["namespaces"] : null), "html", null, true));
        echo ">
  <channel>
    <title>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</title>
    <link>";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</link>
    <description>";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "</description>
    <language>";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["langcode"]) ? $context["langcode"] : null), "html", null, true));
        echo "</language>
    ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["channel_elements"]) ? $context["channel_elements"] : null), "html", null, true));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true));
        echo "
  </channel>
</rss>
";
        
        $__internal_3ea20c596ac224d1b2d925bcd97daa5af7c9a08f4391335a61e6ea096592cc7c->leave($__internal_3ea20c596ac224d1b2d925bcd97daa5af7c9a08f4391335a61e6ea096592cc7c_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  56 => 23,  49 => 21,  46 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default template for feed displays that use the RSS style.*/
/*  **/
/*  * Available variables:*/
/*  * - link: The link to the feed (the view path).*/
/*  * - namespaces: The XML namespaces (added automatically).*/
/*  * - title: The title of the feed (as set in the view).*/
/*  * - description: The feed description (from feed settings).*/
/*  * - langcode: The language encoding.*/
/*  * - channel_elements: The formatted channel elements.*/
/*  * - items: The feed items themselves.*/
/*  **/
/*  * @see template_preprocess_views_view_rss()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <?xml version="1.0" encoding="utf-8" ?>*/
/* <rss version="2.0" xml:base="{{ link }}"{{ namespaces }}>*/
/*   <channel>*/
/*     <title>{{ title }}</title>*/
/*     <link>{{ link }}</link>*/
/*     <description>{{ description }}</description>*/
/*     <language>{{ langcode }}</language>*/
/*     {{ channel_elements }}*/
/*     {{ items }}*/
/*   </channel>*/
/* </rss>*/
/* */
