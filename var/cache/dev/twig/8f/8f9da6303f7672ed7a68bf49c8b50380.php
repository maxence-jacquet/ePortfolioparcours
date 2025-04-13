<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* portfolio/eportfolio.html.twig */
class __TwigTemplate_10b57cdf4cc51fbbe133f34bad046025 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/eportfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/eportfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/eportfolio.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "ePortfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cv\">CV</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/parcours\">Parcours</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1> ePortfolio </h1>

<div class=\"card-container\">
  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Administrer</h2>
      </div>

        <div class=\"flip-card-back\">
          <ul>
          <li>
          <a class=\"apprentissage_critique\" href=\"/administrer/maitriser_loi_fondamentale_electricite\">
            <h4>Maîtriser les lois fondamentales de l’électricité</h4>
          </a>
          </li>
          <li>
          <a class=\"apprentissage_critique\" href=\"/administrer/configurer_fonction_base_reseau_local\">
            <h4>Configurer les fonctions de base du réseau local</h4>
          </a>
          </li>
          <li>
          <a class=\"apprentissage_critique\" href=\"/administrer/maitrise_systeme_exploitation\">
            <h4>Maîtriser les rôles et les principes des systèmes d’exploitation pour configurer et administrer des réseaux et des services</h4>
          </a>
          </li>
          </ul>
        </div>

    </div>
    
  </div>

  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">

      <div class=\"flip-card-front\">
        <h2>Connecter</h2>
      </div>

      <div class=\"flip-card-back\">
        <ul>

        <li>
        <a class=\"apprentissage_critique\" href=\"/connecter/deployer_support_transmission\">
        <h4>Déployer des supports de transmission </h4>
        </a>
        </li>

        <li>
        <a class=\"apprentissage_critique\" href=\"/connecter/communication\">
        <h4>Communiquer avec un tiers et adapter son discours et sa langue à son interlocuteur</h4>
        </a>
        </li>

        </ul>
      
      </div>

    </div>

  </div>

  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">

        <div class=\"flip-card-front\">
            <h2>Programmer</h2>
        </div>

        <div class=\"flip-card-back\">
          <ul>

          <li>
          <a class=\"apprentissage_critique\" href=\"/programmer/utilisation_systeme_informatique&outil\">
          <h4>Utiliser un système informatique et ses outils</h4>
          </a>
          </li>

          <li>
          <a class=\"apprentissage_critique\" href=\"/programmer/architecture_web\">
          <h4>Connaître l’architecture et les technologies d’un site Web</h4>
          </a>
          </li>

          <li>
          <a class=\"apprentissage_critique\" href=\"/programmer/integration_environnement_propice\">
          <h4>S’intégrer dans un environnement propice au développement et au travail collaboratif</h4>
          </a>
          </li>

          </ul>
        </div>

      </div>
  </div>
</div>

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const cards = document.querySelectorAll('.flip-card');
      cards.forEach(card => {
        card.addEventListener('click', () => {
          const inner = card.querySelector('.flip-card-inner');
          inner.classList.toggle('flipped');
        });
      });
    });
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "portfolio/eportfolio.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  252 => 136,  239 => 135,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ePortfolio{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/accueil\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/pour_en_savoir_plus\">Pour en savoir plus</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/cv\">CV</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/eportfolio\">ePortfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/parcours\">Parcours</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1> ePortfolio </h1>

<div class=\"card-container\">
  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">
      <div class=\"flip-card-front\">
        <h2>Administrer</h2>
      </div>

        <div class=\"flip-card-back\">
          <ul>
          <li>
          <a class=\"apprentissage_critique\" href=\"/administrer/maitriser_loi_fondamentale_electricite\">
            <h4>Maîtriser les lois fondamentales de l’électricité</h4>
          </a>
          </li>
          <li>
          <a class=\"apprentissage_critique\" href=\"/administrer/configurer_fonction_base_reseau_local\">
            <h4>Configurer les fonctions de base du réseau local</h4>
          </a>
          </li>
          <li>
          <a class=\"apprentissage_critique\" href=\"/administrer/maitrise_systeme_exploitation\">
            <h4>Maîtriser les rôles et les principes des systèmes d’exploitation pour configurer et administrer des réseaux et des services</h4>
          </a>
          </li>
          </ul>
        </div>

    </div>
    
  </div>

  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">

      <div class=\"flip-card-front\">
        <h2>Connecter</h2>
      </div>

      <div class=\"flip-card-back\">
        <ul>

        <li>
        <a class=\"apprentissage_critique\" href=\"/connecter/deployer_support_transmission\">
        <h4>Déployer des supports de transmission </h4>
        </a>
        </li>

        <li>
        <a class=\"apprentissage_critique\" href=\"/connecter/communication\">
        <h4>Communiquer avec un tiers et adapter son discours et sa langue à son interlocuteur</h4>
        </a>
        </li>

        </ul>
      
      </div>

    </div>

  </div>

  <div class=\"flip-card\">

    <div class=\"flip-card-inner\">

        <div class=\"flip-card-front\">
            <h2>Programmer</h2>
        </div>

        <div class=\"flip-card-back\">
          <ul>

          <li>
          <a class=\"apprentissage_critique\" href=\"/programmer/utilisation_systeme_informatique&outil\">
          <h4>Utiliser un système informatique et ses outils</h4>
          </a>
          </li>

          <li>
          <a class=\"apprentissage_critique\" href=\"/programmer/architecture_web\">
          <h4>Connaître l’architecture et les technologies d’un site Web</h4>
          </a>
          </li>

          <li>
          <a class=\"apprentissage_critique\" href=\"/programmer/integration_environnement_propice\">
          <h4>S’intégrer dans un environnement propice au développement et au travail collaboratif</h4>
          </a>
          </li>

          </ul>
        </div>

      </div>
  </div>
</div>

</style>
{% endblock %}

{% block javascripts %}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const cards = document.querySelectorAll('.flip-card');
      cards.forEach(card => {
        card.addEventListener('click', () => {
          const inner = card.querySelector('.flip-card-inner');
          inner.classList.toggle('flipped');
        });
      });
    });
  </script>
{% endblock %}

", "portfolio/eportfolio.html.twig", "C:\\Users\\maxen\\Desktop\\Maxence\\IUT\\BUT1\\S2\\Portfolio\\ePortfolio\\templates\\portfolio\\eportfolio.html.twig");
    }
}
