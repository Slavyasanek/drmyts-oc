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

/* drmyts/template/account/order_list.twig */
class __TwigTemplate_ca4b8fdc7bc12a5342efe4975c881308ab33ec211dc252e1c10f27cf99203f95 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "

<main>
  <div class=\"page-title border--end\">    
    <div class=\"container page-title__container\">
      <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">Особистий кабінет</h1>
      <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
        <div class=\"breadcrumbs__list flex-row\"><a class=\"breadcrumbs__item\" href=\"/\">Головнa</a><a class=\"breadcrumbs__item\" href=\"/\">Особистий кабінет</a>
        </div>
      </div>
    </div>
  </div>
  <section class=\"account\"> 
    <div class=\"container account__container\">
      <div class=\"account__nav flex-col border--end\"> <a class=\"flex-row account__nav-item text--upp\" href=\"account.html\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#user\"></use>
            </svg>
          </div><span>Контактна інформація</span></a><a class=\"flex-row account__nav-item text--upp\" href=\"wishlist.html\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#heart\"></use>
            </svg>
          </div><span>Список бажань </span></a><a class=\"flex-row account__nav-item text--upp\" href=\"orders.html\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#shopping-bag\"></use>
            </svg>
          </div><span>Історія замовлень</span></a><a class=\"flex-row account__nav-item text--upp\" href=\"/\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#logout\"></use>
            </svg>
          </div><span>Вийти</span></a></div>
      <div class=\"account__content\">
        <h2 class=\"account__subtitle text--size_h3-full\">Історія замовлень</h2>
        <div class=\"account-empty text--center flex-center flex-col\"> 
          <h3 class=\"account-empty__title\">У вас немає замовлень</h3>
          <p>Перейдіть в каталог для того щоб зробити замовлення</p>
        </div>
      </div>
    </div>
  </section>
</main>

";
        // line 47
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 47,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<main>
  <div class=\"page-title border--end\">    
    <div class=\"container page-title__container\">
      <h1 class=\"text--upp text--size_h2-mob text--size_h2-desk page-title__title m-0\">Особистий кабінет</h1>
      <div class=\"breadcrumbs text--color_gray page-title__breadcrumbs\">
        <div class=\"breadcrumbs__list flex-row\"><a class=\"breadcrumbs__item\" href=\"/\">Головнa</a><a class=\"breadcrumbs__item\" href=\"/\">Особистий кабінет</a>
        </div>
      </div>
    </div>
  </div>
  <section class=\"account\"> 
    <div class=\"container account__container\">
      <div class=\"account__nav flex-col border--end\"> <a class=\"flex-row account__nav-item text--upp\" href=\"account.html\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#user\"></use>
            </svg>
          </div><span>Контактна інформація</span></a><a class=\"flex-row account__nav-item text--upp\" href=\"wishlist.html\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#heart\"></use>
            </svg>
          </div><span>Список бажань </span></a><a class=\"flex-row account__nav-item text--upp\" href=\"orders.html\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#shopping-bag\"></use>
            </svg>
          </div><span>Історія замовлень</span></a><a class=\"flex-row account__nav-item text--upp\" href=\"/\"> 
          <div class=\"icon account__nav-icon\"> 
            <svg role=\"presentation\">
              <use href=\"./assets/svg/sprite.svg#logout\"></use>
            </svg>
          </div><span>Вийти</span></a></div>
      <div class=\"account__content\">
        <h2 class=\"account__subtitle text--size_h3-full\">Історія замовлень</h2>
        <div class=\"account-empty text--center flex-center flex-col\"> 
          <h3 class=\"account-empty__title\">У вас немає замовлень</h3>
          <p>Перейдіть в каталог для того щоб зробити замовлення</p>
        </div>
      </div>
    </div>
  </section>
</main>

{{ footer }}
", "drmyts/template/account/order_list.twig", "");
    }
}
