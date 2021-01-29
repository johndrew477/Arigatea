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

/* themes/light_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_64ce9dc4826b437e7ae92d719d6600b3dfd4b343de6a93e239866ba649018c9e extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78)) {
            // line 79
            echo "        <div class=\"col-md-9\">
          <div class=\"main-menu\">
            ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 85
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 93
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 94
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 98
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 98, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 104
        echo "

<!-- Start: Top widget -->

";
        // line 108
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 108) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 108))) {
            // line 109
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 114)) {
                // line 115
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 115, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 116
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 120)) {
                // line 121
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 121, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 122
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 126)) {
                // line 127
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 127, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 128
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 135
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 141)) {
            // line 142
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 148
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 153) &&  !($context["is_front"] ?? null))) {
            // line 154
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 162
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 171
        if ( !($context["is_front"] ?? null)) {
            // line 172
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 176
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 182)) {
            // line 183
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 183, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 189
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 192)) {
            // line 193
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 193, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 199
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202)) {
            // line 203
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 203, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 209
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 222
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 222) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 222)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 222))) {
            // line 223
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 229
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 229)) {
                // line 230
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 230, $this->source), "html", null, true);
                echo ">
            ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 234
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 237
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 237)) {
                // line 238
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 238, $this->source), "html", null, true);
                echo ">
            ";
                // line 239
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 242
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 245
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 245)) {
                // line 246
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 246, $this->source), "html", null, true);
                echo ">
            ";
                // line 247
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 257
        echo "
<!--End: Features -->


<!-- Start: Services -->

";
        // line 263
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 263)) {
            // line 264
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 267
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 272
        echo "
<!--End: Services -->



<!-- Start: Services -->

";
        // line 279
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 279)) {
            // line 280
            echo "
  <!-- <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 283
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
            echo "
    </div>
  </div> -->

";
        }
        // line 288
        echo "
<!--End: Services -->


<!-- Start: Price table widgets -->

";
        // line 294
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 294) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 294)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 294))) {
            // line 295
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 301
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 301)) {
                // line 302
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 302, $this->source), "html", null, true);
                echo ">
            ";
                // line 303
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 305
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 309)) {
                // line 310
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 310, $this->source), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 313
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 317
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 317)) {
                // line 318
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 318, $this->source), "html", null, true);
                echo ">
            ";
                // line 319
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 325
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 325)) {
                // line 326
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 326, $this->source), "html", null, true);
                echo ">
            ";
                // line 327
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 337
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 343
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 343) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 343)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 343)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 343))) {
            // line 344
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 350
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 350)) {
                // line 351
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 351, $this->source), "html", null, true);
                echo ">
            ";
                // line 352
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 354
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 358
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 358)) {
                // line 359
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 359, $this->source), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 362
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 366
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 366)) {
                // line 367
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 367, $this->source), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 370
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 374)) {
                // line 375
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 375, $this->source), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 386
        echo "
<!--End: Bottom widgets -->


<!-- Start: Team widgets -->

";
        // line 392
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 392) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 392)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 392)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 392))) {
            // line 393
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 399
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 399)) {
                // line 400
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 400, $this->source), "html", null, true);
                echo ">
            ";
                // line 401
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 401), 401, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 403
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 407
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 407)) {
                // line 408
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 408, $this->source), "html", null, true);
                echo ">
            ";
                // line 409
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 409), 409, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 415
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 415)) {
                // line 416
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 416, $this->source), "html", null, true);
                echo ">
            ";
                // line 417
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 417), 417, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 419
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 423
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 423)) {
                // line 424
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 424, $this->source), "html", null, true);
                echo ">
            ";
                // line 425
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 425), 425, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 428
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 435
        echo "
<!--End: Team widgets -->


<!-- Start: Footer widgets -->

";
        // line 441
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 441) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 441)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 441))) {
            // line 442
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 449
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 449)) {
                // line 450
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 450, $this->source), "html", null, true);
                echo ">
              ";
                // line 451
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 451), 451, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 454
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 457
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 457)) {
                // line 458
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 458, $this->source), "html", null, true);
                echo ">
              ";
                // line 459
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 459), 459, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 462
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 465
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 465)) {
                // line 466
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 466, $this->source), "html", null, true);
                echo ">
              ";
                // line 467
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 467), 467, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 470
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 478
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      ";
        // line 487
        if (($context["show_social_icon"] ?? null)) {
            // line 488
            echo "        <p class=\"social-media\">
          ";
            // line 489
            if (($context["facebook_url"] ?? null)) {
                // line 490
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 490, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 492
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 493
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 493, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 495
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 496
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 496, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 498
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 499
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 499, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 501
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 502
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 502, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 504
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 505
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 505, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 507
            echo "        </p>
      ";
        }
        // line 509
        echo "
      <p>Copyright © ";
        // line 510
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>

      ";
        // line 512
        if (($context["show_credit_link"] ?? null)) {
            // line 513
            echo "        <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
      ";
        }
        // line 515
        echo "
  </div>

</div>

<!-- End: Copyright -->


<!-- Start: Map -->

";
        // line 525
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 525))) {
            // line 526
            echo "
  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 528
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 528), 528, $this->source), "html", null, true);
            echo "</div>
  </div>
  
";
        }
        // line 532
        echo "
<!--End: Map -->





";
    }

    public function getTemplateName()
    {
        return "themes/light_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  921 => 532,  914 => 528,  910 => 526,  908 => 525,  896 => 515,  892 => 513,  890 => 512,  885 => 510,  882 => 509,  878 => 507,  872 => 505,  869 => 504,  863 => 502,  860 => 501,  854 => 499,  851 => 498,  845 => 496,  842 => 495,  836 => 493,  833 => 492,  827 => 490,  825 => 489,  822 => 488,  820 => 487,  809 => 478,  799 => 470,  793 => 467,  788 => 466,  786 => 465,  781 => 462,  775 => 459,  770 => 458,  768 => 457,  763 => 454,  757 => 451,  752 => 450,  750 => 449,  741 => 442,  739 => 441,  731 => 435,  722 => 428,  716 => 425,  711 => 424,  709 => 423,  703 => 419,  697 => 417,  692 => 416,  690 => 415,  684 => 411,  678 => 409,  673 => 408,  671 => 407,  665 => 403,  659 => 401,  654 => 400,  652 => 399,  644 => 393,  642 => 392,  634 => 386,  625 => 379,  619 => 376,  614 => 375,  612 => 374,  606 => 370,  600 => 368,  595 => 367,  593 => 366,  587 => 362,  581 => 360,  576 => 359,  574 => 358,  568 => 354,  562 => 352,  557 => 351,  555 => 350,  547 => 344,  545 => 343,  537 => 337,  527 => 329,  521 => 327,  516 => 326,  514 => 325,  508 => 321,  502 => 319,  497 => 318,  495 => 317,  489 => 313,  483 => 311,  478 => 310,  476 => 309,  470 => 305,  464 => 303,  459 => 302,  457 => 301,  449 => 295,  447 => 294,  439 => 288,  431 => 283,  426 => 280,  424 => 279,  415 => 272,  407 => 267,  402 => 264,  400 => 263,  392 => 257,  383 => 250,  377 => 247,  372 => 246,  370 => 245,  365 => 242,  359 => 239,  354 => 238,  352 => 237,  347 => 234,  341 => 231,  336 => 230,  334 => 229,  326 => 223,  324 => 222,  309 => 209,  302 => 205,  296 => 203,  294 => 202,  289 => 199,  282 => 195,  276 => 193,  274 => 192,  269 => 189,  262 => 185,  256 => 183,  254 => 182,  246 => 176,  240 => 173,  237 => 172,  235 => 171,  224 => 162,  216 => 157,  211 => 154,  209 => 153,  202 => 148,  195 => 144,  191 => 142,  189 => 141,  181 => 135,  172 => 128,  164 => 127,  162 => 126,  156 => 122,  148 => 121,  146 => 120,  140 => 116,  132 => 115,  130 => 114,  123 => 109,  121 => 108,  115 => 104,  109 => 100,  100 => 98,  96 => 97,  91 => 94,  89 => 93,  79 => 85,  72 => 81,  68 => 79,  66 => 78,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/light_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\Arigatea\\themes\\light_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 97);
        static $filters = array("escape" => 72, "raw" => 98, "date" => 510);
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
