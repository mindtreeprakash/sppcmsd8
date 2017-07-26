<?php

/* modules/contrib/module_filter/templates/system-modules-details.html.twig */
class __TwigTemplate_756659023ffcf5e1ca3bdc44030adcd80757b805b8704f7aef928cd0344905c5 extends Twig_Template
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
        $tags = array("for" => 36, "set" => 37, "if" => 52);
        $filters = array("t" => 30);
        $functions = array("cycle" => 37);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('t'),
                array('cycle')
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

        // line 27
        echo "<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
  <tr>
    <th class=\"checkbox visually-hidden\">";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Installed")));
        echo "</th>
    <th class=\"name visually-hidden\">";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Name")));
        echo "</th>
    <th class=\"description visually-hidden priority-low\">";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Description")));
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 37
            echo "    ";
            $context["zebra"] = twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()));
            // line 38
            echo "    <tr";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "addClass", array(0 => (isset($context["zebra"]) ? $context["zebra"] : null)), "method"), "html", null, true));
            echo ">
      <td class=\"checkbox\">
        ";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox", array()), "html", null, true));
            echo "
      </td>
      <td class=\"module\">
        <label id=\"";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true));
            echo "\" for=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true));
            echo "</label>
      </td>
      <td class=\"description expand priority-low\">
        <details class=\"js-form-wrapper form-wrapper\" id=\"";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "-description\">
          <summary aria-controls=\"";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "description", array()), "html", null, true));
            echo "</span></summary>
          <div class=\"details-wrapper\">
            <div class=\"details-description\">
              <div class=\"requirements\">
                <div class=\"admin-requirements\">";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", array("@machine-name" => $this->getAttribute($context["module"], "machine_name", array())))));
            echo "</div>
                ";
            // line 52
            if ($this->getAttribute($context["module"], "version", array())) {
                // line 53
                echo "                  <div class=\"admin-requirements\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version: @module-version", array("@module-version" => $this->getAttribute($context["module"], "version", array())))));
                echo "</div>
                ";
            }
            // line 55
            echo "                ";
            if ($this->getAttribute($context["module"], "requires", array())) {
                // line 56
                echo "                  <div class=\"admin-requirements requires\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Requires: @module-list", array("@module-list" => $this->getAttribute($context["module"], "requires", array())))));
                echo "</div>
                ";
            }
            // line 58
            echo "                ";
            if ($this->getAttribute($context["module"], "required_by", array())) {
                // line 59
                echo "                  <div class=\"admin-requirements required-by\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Required by: @module-list", array("@module-list" => $this->getAttribute($context["module"], "required_by", array())))));
                echo "</div>
                ";
            }
            // line 61
            echo "              </div>
              ";
            // line 62
            if ($this->getAttribute($context["module"], "links", array())) {
                // line 63
                echo "                <div class=\"links\">
                  ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "help", 1 => "permissions", 2 => "configure"));
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 65
                    echo "                    ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "links", array()), $context["link_type"], array(), "array"), "html", null, true));
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                </div>
              ";
            }
            // line 69
            echo "            </div>
          </div>
        </details>
      </td>
    </tr>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/module_filter/templates/system-modules-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  173 => 69,  169 => 67,  160 => 65,  156 => 64,  153 => 63,  151 => 62,  148 => 61,  142 => 59,  139 => 58,  133 => 56,  130 => 55,  124 => 53,  122 => 52,  118 => 51,  109 => 47,  105 => 46,  95 => 43,  89 => 40,  83 => 38,  80 => 37,  63 => 36,  56 => 32,  52 => 31,  48 => 30,  43 => 27,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the modules listing page.
 *
 * Displays a list of all packages in a project.
 *
 * Available variables:
 * - modules: Contains multiple module instances. Each module contains:
 *   - attributes: Attributes on the row.
 *   - checkbox: A checkbox for enabling the module.
 *   - name: The human-readable name of the module.
 *   - id: A unique identifier for interacting with the details element.
 *   - enable_id: A unique identifier for interacting with the checkbox element.
 *   - description: The description of the module.
 *   - machine_name: The module's machine name.
 *   - version: Information about the module version.
 *   - requires: A list of modules that this module requires.
 *   - required_by: A list of modules that require this module.
 *   - links: A list of administration links provided by the module.
 *
 * @see template_preprocess_system_modules_details()
 *
 * @ingroup themeable
 */
#}
<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
  <tr>
    <th class=\"checkbox visually-hidden\">{{ 'Installed'|t }}</th>
    <th class=\"name visually-hidden\">{{ 'Name'|t }}</th>
    <th class=\"description visually-hidden priority-low\">{{ 'Description'|t }}</th>
  </tr>
  </thead>
  <tbody>
  {% for module in modules %}
    {% set zebra = cycle(['odd', 'even'], loop.index0) %}
    <tr{{ module.attributes.addClass(zebra) }}>
      <td class=\"checkbox\">
        {{ module.checkbox }}
      </td>
      <td class=\"module\">
        <label id=\"{{ module.id }}\" for=\"{{ module.enable_id }}\" class=\"module-name table-filter-text-source\">{{ module.name }}</label>
      </td>
      <td class=\"description expand priority-low\">
        <details class=\"js-form-wrapper form-wrapper\" id=\"{{ module.enable_id }}-description\">
          <summary aria-controls=\"{{ module.enable_id }}-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">{{ module.description }}</span></summary>
          <div class=\"details-wrapper\">
            <div class=\"details-description\">
              <div class=\"requirements\">
                <div class=\"admin-requirements\">{{ 'Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>'|t({'@machine-name': module.machine_name }) }}</div>
                {% if module.version %}
                  <div class=\"admin-requirements\">{{ 'Version: @module-version'|t({'@module-version': module.version }) }}</div>
                {% endif %}
                {% if module.requires %}
                  <div class=\"admin-requirements requires\">{{ 'Requires: @module-list'|t({'@module-list': module.requires }) }}</div>
                {% endif %}
                {% if module.required_by %}
                  <div class=\"admin-requirements required-by\">{{ 'Required by: @module-list'|t({'@module-list': module.required_by }) }}</div>
                {% endif %}
              </div>
              {% if module.links %}
                <div class=\"links\">
                  {% for link_type in ['help', 'permissions', 'configure'] %}
                    {{ module.links[link_type] }}
                  {% endfor %}
                </div>
              {% endif %}
            </div>
          </div>
        </details>
      </td>
    </tr>
  {% endfor %}
  </tbody>
</table>
";
    }
}
