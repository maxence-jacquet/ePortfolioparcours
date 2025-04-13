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

/* portfolio/parcours.html.twig */
class __TwigTemplate_bce3afff2ad8d86b5440157e351f1357 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/parcours.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/parcours.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/parcours.html.twig", 1);
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

        yield "Parcours";
        
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
        yield "
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

<h1 class=\"text-center my-5\">Parcours Cybersécurité</h1>

<div class=\"container\" style=\"max-width: 900px;\">

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h4 class=\"mb-3 text-info text-center\">Pourquoi je souhaite intégrer le parcours cybersécurité</h4>
    <p class=\"text-center\">Je suis passionné par la sécurité informatique. Intégrer ce parcours me permettrait de renforcer mes compétences techniques dans un domaine critique et en constante évolution.</p>
  </section>

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h3 class=\"text-center mb-4 text-success\">Compétences acquises</h3>
    <ul class=\"list-unstyled\">
      <li class=\"mb-3\">
        ✔️ <strong>Configurer les fonctions de base du réseau local </strong><br>
        <small>Configuration IP, gestion de VLAN, routage, mise en place de service (DHCP, DNS, HTTP etc...)</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et l’administration des réseaux et services fournis</strong><br>
        <small>Installations Linux/Windows, prise en main de VirtualBox/Vsphere, scripts Bash</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement </strong><br>
        <small>Analyse de signaux, mesures sur oscilloscope</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Connecter les systèmes de ToIP</strong><br>
        <small>Serveur FreePBX, configuration softphones 3CX, mise en place d'un firewall</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Utiliser un système informatique et ses outils</strong><br>
        <small>Utilisation de VisualStudio Code, VirtualBox, ligne de commande</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Lire, exécuter, corriger et modifier un programme</strong><br>
        <small>Scripts Python, début en langage C, HTML/CSS, projet symfony</small>
      </li>
    </ul>
  </section>

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h3 class=\"text-center mb-4 text-warning\">Compétences en voie d'acquisition</h3>
    <ul class=\"list-unstyled\">
      <li>🔄 Comprendre l’architecture et les fondements des systèmes numériques, les principes du codage de l’information, des communications et de l’Internet</li>
      <li>🔄 Mesurer et analyser les signaux </li>
      <li>🔄 Traduire un algorithme, dans un langage et pour un environnement donné</li>
    </ul>
  </section>

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h3 class=\"text-center mb-4 text-danger\">Améliorations</h3>
    <ul class=\"list-unstyled\">
      <li>📌 Approfondir mes compétences en cybersécurité (cours en ligne)</li>
      <li>📌 S'améliorer en réseaux (CCNA 1)</li>
      <li>📌 Rechercher une alternance</li>
    </ul>
  </section>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        // line 94
        yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
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
        return "portfolio/parcours.html.twig";
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
        return array (  210 => 94,  197 => 93,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parcours{% endblock %}

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

<h1 class=\"text-center my-5\">Parcours Cybersécurité</h1>

<div class=\"container\" style=\"max-width: 900px;\">

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h4 class=\"mb-3 text-info text-center\">Pourquoi je souhaite intégrer le parcours cybersécurité</h4>
    <p class=\"text-center\">Je suis passionné par la sécurité informatique. Intégrer ce parcours me permettrait de renforcer mes compétences techniques dans un domaine critique et en constante évolution.</p>
  </section>

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h3 class=\"text-center mb-4 text-success\">Compétences acquises</h3>
    <ul class=\"list-unstyled\">
      <li class=\"mb-3\">
        ✔️ <strong>Configurer les fonctions de base du réseau local </strong><br>
        <small>Configuration IP, gestion de VLAN, routage, mise en place de service (DHCP, DNS, HTTP etc...)</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et l’administration des réseaux et services fournis</strong><br>
        <small>Installations Linux/Windows, prise en main de VirtualBox/Vsphere, scripts Bash</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement </strong><br>
        <small>Analyse de signaux, mesures sur oscilloscope</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Connecter les systèmes de ToIP</strong><br>
        <small>Serveur FreePBX, configuration softphones 3CX, mise en place d'un firewall</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Utiliser un système informatique et ses outils</strong><br>
        <small>Utilisation de VisualStudio Code, VirtualBox, ligne de commande</small>
      </li>
      <li class=\"mb-3\">
        ✔️ <strong>Lire, exécuter, corriger et modifier un programme</strong><br>
        <small>Scripts Python, début en langage C, HTML/CSS, projet symfony</small>
      </li>
    </ul>
  </section>

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h3 class=\"text-center mb-4 text-warning\">Compétences en voie d'acquisition</h3>
    <ul class=\"list-unstyled\">
      <li>🔄 Comprendre l’architecture et les fondements des systèmes numériques, les principes du codage de l’information, des communications et de l’Internet</li>
      <li>🔄 Mesurer et analyser les signaux </li>
      <li>🔄 Traduire un algorithme, dans un langage et pour un environnement donné</li>
    </ul>
  </section>

  <section class=\"mb-5 p-4 border rounded\" style=\"background-color: #343a40; color: #f8f9fa;\">
    <h3 class=\"text-center mb-4 text-danger\">Améliorations</h3>
    <ul class=\"list-unstyled\">
      <li>📌 Approfondir mes compétences en cybersécurité (cours en ligne)</li>
      <li>📌 S'améliorer en réseaux (CCNA 1)</li>
      <li>📌 Rechercher une alternance</li>
    </ul>
  </section>

</div>

{% endblock %}

{% block javascripts %}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
{% endblock %}
", "portfolio/parcours.html.twig", "C:\\Users\\maxen\\Desktop\\Maxence\\IUT\\BUT1\\S2\\Portfolio\\ePortfolio\\templates\\portfolio\\parcours.html.twig");
    }
}
