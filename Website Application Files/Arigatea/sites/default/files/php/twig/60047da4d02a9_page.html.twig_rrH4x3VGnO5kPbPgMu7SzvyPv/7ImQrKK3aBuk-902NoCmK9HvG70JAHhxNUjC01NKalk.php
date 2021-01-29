<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/pets_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_7a7bac9eb8aa7df2ec5618a77bede3d42c5af393db3a999b4f6b7b52203902cf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 78))) {
            // line 79
            echo "        <div class=\"col-md-9\">

          ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 81)) {
                // line 82
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 84
            echo "
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
          
        </div>
      ";
        }
        // line 89
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 97
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 98
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 102
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 102, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 108
        echo "

<!-- Start: Top widget -->

";
        // line 112
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 112) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 112)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 112))) {
            // line 113
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 118)) {
                // line 119
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 119, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 120
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 124
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 124)) {
                // line 125
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 125, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 126
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 130)) {
                // line 131
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 131, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 132
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 139
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 145)) {
            // line 146
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 152
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 157) &&  !($context["is_front"] ?? null))) {
            // line 158
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 166
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 175
        if ( !($context["is_front"] ?? null)) {
            // line 176
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 180
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 186)) {
            // line 187
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 187, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 193
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 196)) {
            // line 197
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 197, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 203
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206)) {
            // line 207
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 207, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 213
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 226
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 226) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 226))) {
            // line 227
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 233)) {
                // line 234
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 234, $this->source), "html", null, true);
                echo ">
            ";
                // line 235
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 238
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 241
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 241)) {
                // line 242
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 242, $this->source), "html", null, true);
                echo ">
            ";
                // line 243
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 246
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 249
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 249)) {
                // line 250
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 250, $this->source), "html", null, true);
                echo ">
            ";
                // line 251
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 254
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 261
        echo "
<!--End: Features -->


<!-- Start: Services -->

";
        // line 267
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 267)) {
            // line 268
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 271
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 271), 271, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 276
        echo "
<!--End: Services -->


<!-- Start: Price table widgets -->

";
        // line 282
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 282) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 282)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 282))) {
            // line 283
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 289
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 289)) {
                // line 290
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 290, $this->source), "html", null, true);
                echo ">
            ";
                // line 291
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 293
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 297
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 297)) {
                // line 298
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 298, $this->source), "html", null, true);
                echo ">
            ";
                // line 299
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 301
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 305)) {
                // line 306
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 306, $this->source), "html", null, true);
                echo ">
            ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 309
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 313
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 313)) {
                // line 314
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 314, $this->source), "html", null, true);
                echo ">
            ";
                // line 315
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 317
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 325
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 331
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 331) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 331))) {
            // line 332
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 338
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 338)) {
                // line 339
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 339, $this->source), "html", null, true);
                echo ">
            ";
                // line 340
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 342
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 346
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 346)) {
                // line 347
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 347, $this->source), "html", null, true);
                echo ">
            ";
                // line 348
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 348), 348, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 350
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 354)) {
                // line 355
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 355, $this->source), "html", null, true);
                echo ">
            ";
                // line 356
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 358
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 362
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 362)) {
                // line 363
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 363, $this->source), "html", null, true);
                echo ">
            ";
                // line 364
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 364), 364, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 367
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 374
        echo "
<!--End: Bottom widgets -->


<!-- Start: Team widgets -->

";
        // line 380
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 380) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 380)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 380)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 380))) {
            // line 381
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 387
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 387)) {
                // line 388
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 388, $this->source), "html", null, true);
                echo ">
            ";
                // line 389
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 389), 389, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 391
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 395)) {
                // line 396
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 396, $this->source), "html", null, true);
                echo ">
            ";
                // line 397
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 397), 397, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 399
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 403
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 403)) {
                // line 404
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 404, $this->source), "html", null, true);
                echo ">
            ";
                // line 405
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 407
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 411
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 411)) {
                // line 412
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 412, $this->source), "html", null, true);
                echo ">
            ";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 416
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 423
        echo "
<!--End: Team widgets -->


<!-- Start: Footer widgets -->

";
        // line 429
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 429) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 429)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 429))) {
            // line 430
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 437
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 437)) {
                // line 438
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 438, $this->source), "html", null, true);
                echo ">
              ";
                // line 439
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 439), 439, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 442
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 445
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 445)) {
                // line 446
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 446, $this->source), "html", null, true);
                echo ">
              ";
                // line 447
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 447), 447, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 450
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 453
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 453)) {
                // line 454
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 454, $this->source), "html", null, true);
                echo ">
              ";
                // line 455
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 455), 455, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 458
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 466
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      ";
        // line 475
        if (($context["show_social_icon"] ?? null)) {
            // line 476
            echo "        <p class=\"social-media\">
          ";
            // line 477
            if (($context["facebook_url"] ?? null)) {
                // line 478
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 478, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 480
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 481
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 481, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 483
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 484
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 484, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 486
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 487
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 487, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 489
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 490
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 490, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 492
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 493
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 493, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 495
            echo "        </p>
      ";
        }
        // line 497
        echo "
      <p>Copyright © ";
        // line 498
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>

      ";
        // line 500
        if (($context["show_credit_link"] ?? null)) {
            // line 501
            echo "        <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
      ";
        }
        // line 503
        echo "
  </div>

</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/pets_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  883 => 503,  879 => 501,  877 => 500,  872 => 498,  869 => 497,  865 => 495,  859 => 493,  856 => 492,  850 => 490,  847 => 489,  841 => 487,  838 => 486,  832 => 484,  829 => 483,  823 => 481,  820 => 480,  814 => 478,  812 => 477,  809 => 476,  807 => 475,  796 => 466,  786 => 458,  780 => 455,  775 => 454,  773 => 453,  768 => 450,  762 => 447,  757 => 446,  755 => 445,  750 => 442,  744 => 439,  739 => 438,  737 => 437,  728 => 430,  726 => 429,  718 => 423,  709 => 416,  703 => 413,  698 => 412,  696 => 411,  690 => 407,  684 => 405,  679 => 404,  677 => 403,  671 => 399,  665 => 397,  660 => 396,  658 => 395,  652 => 391,  646 => 389,  641 => 388,  639 => 387,  631 => 381,  629 => 380,  621 => 374,  612 => 367,  606 => 364,  601 => 363,  599 => 362,  593 => 358,  587 => 356,  582 => 355,  580 => 354,  574 => 350,  568 => 348,  563 => 347,  561 => 346,  555 => 342,  549 => 340,  544 => 339,  542 => 338,  534 => 332,  532 => 331,  524 => 325,  514 => 317,  508 => 315,  503 => 314,  501 => 313,  495 => 309,  489 => 307,  484 => 306,  482 => 305,  476 => 301,  470 => 299,  465 => 298,  463 => 297,  457 => 293,  451 => 291,  446 => 290,  444 => 289,  436 => 283,  434 => 282,  426 => 276,  418 => 271,  413 => 268,  411 => 267,  403 => 261,  394 => 254,  388 => 251,  383 => 250,  381 => 249,  376 => 246,  370 => 243,  365 => 242,  363 => 241,  358 => 238,  352 => 235,  347 => 234,  345 => 233,  337 => 227,  335 => 226,  320 => 213,  313 => 209,  307 => 207,  305 => 206,  300 => 203,  293 => 199,  287 => 197,  285 => 196,  280 => 193,  273 => 189,  267 => 187,  265 => 186,  257 => 180,  251 => 177,  248 => 176,  246 => 175,  235 => 166,  227 => 161,  222 => 158,  220 => 157,  213 => 152,  206 => 148,  202 => 146,  200 => 145,  192 => 139,  183 => 132,  175 => 131,  173 => 130,  167 => 126,  159 => 125,  157 => 124,  151 => 120,  143 => 119,  141 => 118,  134 => 113,  132 => 112,  126 => 108,  120 => 104,  111 => 102,  107 => 101,  102 => 98,  100 => 97,  90 => 89,  83 => 85,  80 => 84,  74 => 82,  72 => 81,  68 => 79,  66 => 78,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pets_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\Arigatea\\themes\\pets_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 101);
        static $filters = array("escape" => 72, "raw" => 102, "date" => 498);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
