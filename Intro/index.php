<?php
session_start();
if (!$_SESSION['USER']) {
  header('Location: ../');
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c38f3d850.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php require("../functions/favicon.php"); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    <title>Módulo 1 - JavaScript</title>

    

    <style>
      
    @font-face {
  font-family: "Avenir-Book";
  src: url(https://henry-social-resources.s3-sa-east-1.amazonaws.com/fonts/Avenir/Avenir-Book-01-995b34ab56b423abffe48e64bf8b8df1.ttf);
}

@font-face {
  font-family: "Avenir-Medium";
  src: url(https://henry-social-resources.s3-sa-east-1.amazonaws.com/fonts/Avenir/Avenir-Medium-09-7d635ea94b4460e86cd678e9e754a643.ttf);
}

@font-face {
  font-family: "Avenir-Roman";
  src: url(https://henry-social-resources.s3-sa-east-1.amazonaws.com/fonts/Avenir/Avenir-Roman-12-c6d37b26297461a78d10f169dd5cf46d.ttf);
}

@font-face {
  font-family: "Avenir-Light";
  src: url(https://henry-social-resources.s3-sa-east-1.amazonaws.com/fonts/Avenir/Avenir-Light-07-33f6570a328d84cb7d06e829a0c7ca1b.ttf);
}

@font-face {
  font-family: "Avenir-Heavy";
  src: url(https://henry-social-resources.s3.sa-east-1.amazonaws.com/fonts/Avenir/Avenir-Heavy-05-ff80b6894f8375c59a197caa24aac91c.ttf);
}

@font-face {
  font-family: "Avenir-Black";
  src: url(https://henry-social-resources.s3-sa-east-1.amazonaws.com/fonts/Avenir/Avenir-Black-03-968e784956ff9b6a05c29cc3be18cad0.ttf);
}

    .headerContainer {
    /* border: 2px dashed orange; */
    display: flex;
    justify-content: center;
    background-color: #000000;
    height: 68px;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
  }
  
  .headerContained {
    /* border: 2px dashed red; */
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: 1500px;
    font-family: "Avenir-Roman";
    font-size: 16px;
    font-display: swap;
    line-height: 22px;
    padding: 0 30px 0 30px;
    z-index: 1000;
    color: #ffffff;
    background-color: #000000;
  }
  
  .headerContained .lessonTitle {
    font-family: "Avenir-Heavy";
    font-size: 16px;
    font-display: swap;
    line-height: 22px;
    color: #ffffff;
  }
    * {
    margin: 0px;
    padding: 0px;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  
  html {
    scroll-behavior: smooth;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  
  body {
    /* border: 2px dashed; */
    margin: auto;
    color: rgba(0, 0, 0, 0.87);
    background-color: #fafafa;
    display: flex;
    justify-content: center;
  }
  
  main {
    /* border: 2px dashed red; */
    max-width: 1500px;
    margin-top: 68px;
    display: flex;
    flex-direction: column;
  }
  
  .feedback {
    position: fixed;
    background: #ffff01;
    padding: 8px 16px;
    height: 40px;
    border-radius: 8px;
    bottom: 5px;
    left: 5px;
    z-index: 1200;
  }
  
  .feedback a {
    font-family: "Avenir-Black";
    font-size: 16px;
    font-display: swap;
    line-height: 24px;
    text-decoration: none;
    color: #000000;
    display: flex;
  }
    .topnav {
  /* border: 2px dashed blue; */
  display: flex;
  justify-items: end;
  justify-content: flex-end;
  padding-top: 5px;
  overflow: hidden;
  z-index: 10;
}

.topnav .activeLink {
  color: black;
  border-bottom: 3px solid black;
  border-radius: 0;
  text-decoration: none;
  font-family: 'Avenir-Medium';
  font-weight: 900;
  font-size: 16px;
  line-height: 22px;
}

.topnav a {
  font-family: 'Avenir-Medium';
  font-size: 16px;
  line-height: 22px;
  display: flex;
  align-items: center;
  color: black;
}

.topnav a:hover {
  color: grey;
}

.topnav .icon {
  display: none;
}

    .sidebar {
    /* border: 2px dashed blue; */
    position: fixed;
    width: 240px;
    margin-left: 8px;
    padding-top: 75px;
  }
  
  .sidebar .tocTitle {
    font-family: "Avenir-Black";
    font-style: normal;
    font-weight: 900;
    font-size: 18px;
    font-display: swap;
    line-height: 25px;
    display: flex;
    color: #000000;
    padding-left: 2px;
    justify-content: flex-start;
    border-bottom: 1px solid black;
  }
  
  .sidebar .tocBox {
    /* border: 2px dashed; */
    display: flex;
    max-height: calc(100vh - 240px);
    overflow-y: auto;
    font-family: "Avenir-Heavy";
    font-size: 16px;
    font-display: swap;
    line-height: 28px;
    color: #000000;
    margin-top: 1rem;
  }
  
  .sidebar a {
    color: black;
    text-decoration: none;
  }
  
  .sidebar a:hover {
    color: rgb(88, 80, 80);
  }
  
  .sidebar a:active {
    color: rgb(255, 238, 0);
  }
  
  .sidebar ul {
    /* border: 2px dashed; */
    list-style: none;
    margin-left: -1.5rem;
  }
  
  .sidebar li li {
    font-family: "Avenir-Roman";
    font-weight: normal;
    font-size: 16px;
    font-display: swap;
    line-height: 28px;
  }
    .lesson {
  /* border: 2px dashed green; */
  font-family: 'Avenir-Roman';
  font-size: 16px;
  line-height: 18px;
  text-align: justify;
  padding: 2rem 2rem 4rem 80px;
  font-size: 1.1em;
  width: 100%;
  max-width: 98vw;
}

.lesson .hide {
  display: none;
}

.lesson :target:before {
  content: '';
  display: block;
  height: 85px;
}

.lesson .readingTime {
  font-family: 'Avenir-Book';
  font-size: 14px;
  line-height: 119.6%;
  display: flex;
  align-items: center;
  text-align: center;
  border: 1px solid #000000;
  box-sizing: border-box;
  width: 160px;
  height: 41px;
  padding: 1.1rem;
  margin-bottom: -4rem;
  margin-top: 3rem;
}

.lesson img[alt~='HenryLogo'] {
  display: none;
}

.lesson h1 {
  display: inline-block;
  font-family: 'Avenir-Black';
  font-size: 48px;
  line-height: 66px;
  color: #2e2e2e;

  border-bottom-style: solid;
  border-bottom-width: 25px;
  border-bottom-color: #ffff01;

  height: 64px;
  margin: 10px 0 3rem 0;
}

.lesson h1 + h4 {
  margin: -40px 0 3rem 0;
  font-family: 'Avenir-Black';
  font-size: 32px;
  line-height: 32px;
}

.lesson h1 + h2 {
  margin-top: 0;
}

.lesson h2 {
  font-family: 'Avenir-Black';
  font-weight: 900;
  font-size: 32px;
  line-height: 32px;
  text-align: left;
  color: #2e2e2e;
  margin-top: 3rem;
  margin-bottom: 1rem;
}

hr {
  display: none;
}

.lesson h3 {
  font-family: 'Avenir-Black';
  font-weight: 900;
  font-size: 24px;
  line-height: 24px;
  text-align: left;
  color: #2e2e2e;
  margin-top: 2rem;
  margin-bottom: 1rem;
}

.lesson h3:first-of-type  {
  display: none
}

.lesson h4 {
  font-family: 'Avenir-Black';
  font-weight: 900;
  font-size: 18px;
  line-height: 18px;
  text-align: left;
  color: #2e2e2e;
  margin-top: 2rem;
  margin-bottom: 1rem;
}

.lesson img {
  width: auto;
  max-width: 900px;
  height: auto;
  display: block;
  margin: auto;
  margin-top: 3rem;
  margin-bottom: 3rem;
  box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px,
    rgba(6, 24, 44, 0.65) 0px 4px 6px -1px,
    rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}

.lesson img[alt~='logo'] {
  box-shadow: none;
  width: 350px;
}

.lesson ul {
  list-style: square;
}

.lesson li {
  font-family: 'Avenir-Heavy';
  font-size: 16px;
  line-height: 22px;
}

.lesson a {
  font-family: 'Avenir-Black';
  font-size: 16px;
}

.lesson .iframeContainer {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
  margin-top: 2rem;
  margin-bottom: 2rem;
  box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px,
    rgba(6, 24, 44, 0.65) 0px 4px 6px -1px,
    rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}

/* Then style the iframe to fit in the container div with full height and width */
.lesson iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

    code {
  font-family: Monospace;
  font-size: 15px;
  line-height: 24px;
  background-color: rgb(231, 231, 231);
  padding: 2px 7px;
}

pre[class*="language-"],
code[class*="language-"] {
  background: none;
  padding: 0;
  border-radius: 0.2rem;
  color: #d4d4d4;
  font-weight: normal;
  font-size: 14px;
  text-shadow: none;
  font-family: Menlo, Monaco, Consolas, "Andale Mono", "Ubuntu Mono",
    "Courier New", monospace;
  margin: auto;
  width: auto;
  direction: ltr;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  line-height: 1.5;
  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;
  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

pre[class*="language-"]::selection,
code[class*="language-"]::selection,
pre[class*="language-"] *::selection,
code[class*="language-"] *::selection {
  text-shadow: none;
  background: #264f78;
}

@media print {
  pre[class*="language-"],
  code[class*="language-"] {
    text-shadow: none;
  }
}

pre[class*="language-"] {
  padding: 1em;
  margin-bottom: 2rem;
  margin-top: 2rem;
  overflow: auto;
  background: #2e2e2e;
}

:not(pre) > code[class*="language-"] {
  padding: 0.1em 0.3em;
  border-radius: 0.3em;
  color: #db4c69;
  background: #1e1e1e;
}
/*********************************************************
* Tokens
*/
.namespace {
  opacity: 0.7;
}

.token.doctype .token.doctype-tag {
  color: #569cd6;
}

.token.doctype .token.name {
  color: #9cdcfe;
}

.token.comment,
.token.prolog {
  color: #6a9955;
}

.token.punctuation,
.language-html .language-css .token.punctuation,
.language-html .language-javascript .token.punctuation {
  color: #d4d4d4;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.inserted,
.token.unit {
  color: #b5cea8;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.deleted {
  color: #ce9178;
}

.language-css .token.string.url {
  text-decoration: underline;
}

.token.operator,
.token.entity {
  color: #d4d4d4;
}

.token.operator.arrow {
  color: #569cd6;
}

.token.atrule {
  color: #ce9178;
}

.token.atrule .token.rule {
  color: #c586c0;
}

.token.atrule .token.url {
  color: #9cdcfe;
}

.token.atrule .token.url .token.function {
  color: #dcdcaa;
}

.token.atrule .token.url .token.punctuation {
  color: #d4d4d4;
}

.token.keyword {
  color: #569cd6;
}

.token.keyword.module,
.token.keyword.control-flow {
  color: #c586c0;
}

.token.function,
.token.function .token.maybe-class-name {
  color: #dcdcaa;
}

.token.regex {
  color: #d16969;
}

.token.important {
  color: #569cd6;
}

.token.italic {
  font-style: italic;
}

.token.constant {
  color: #9cdcfe;
}

.token.class-name,
.token.maybe-class-name {
  color: #4ec9b0;
}

.token.console {
  color: #9cdcfe;
}

.token.parameter {
  color: #9cdcfe;
}

.token.interpolation {
  color: #9cdcfe;
}

.token.punctuation.interpolation-punctuation {
  color: #569cd6;
}

.token.boolean {
  color: #569cd6;
}

.token.property,
.token.variable,
.token.imports .token.maybe-class-name,
.token.exports .token.maybe-class-name {
  color: #9cdcfe;
}

.token.selector {
  color: #d7ba7d;
}

.token.escape {
  color: #d7ba7d;
}

.token.tag {
  color: #569cd6;
}

.token.tag .token.punctuation {
  color: #808080;
}

.token.cdata {
  color: #808080;
}

.token.attr-name {
  color: #9cdcfe;
}

.token.attr-value,
.token.attr-value .token.punctuation {
  color: #ce9178;
}

.token.attr-value .token.punctuation.attr-equals {
  color: #d4d4d4;
}

.token.entity {
  color: #569cd6;
}

.token.namespace {
  color: #4ec9b0;
}
/*********************************************************
* Language Specific
*/

pre[class*="language-javascript"],
code[class*="language-javascript"],
pre[class*="language-jsx"],
code[class*="language-jsx"],
pre[class*="language-typescript"],
code[class*="language-typescript"],
pre[class*="language-tsx"],
code[class*="language-tsx"] {
  color: #9cdcfe;
}

pre[class*="language-css"],
code[class*="language-css"] {
  color: #ce9178;
}

pre[class*="language-html"],
code[class*="language-html"] {
  color: #d4d4d4;
}

.language-regex .token.anchor {
  color: #dcdcaa;
}

.language-html .token.punctuation {
  color: #808080;
}
/*********************************************************
* Line highlighting
*/
pre[class*="language-"] > code[class*="language-"] {
  position: relative;
  z-index: 1;
}

.line-highlight.line-highlight {
  background: #f7ebc6;
  box-shadow: inset 5px 0 0 #f7d87c;
  z-index: 0;
}

    div.footerContainer {
  /* border: 2px dashed blue; */
  background-color: #000000;
  position: absolute;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
  width: 100%;
  z-index: 20;
}

div.footerContained {
  /* border: 2px dashed red; */
  display: flex;
  justify-content: center;
  color: rgb(240, 240, 240);
  position: absolute;
  font-family: "Avenir-Black";
  font-size: 18px;
  line-height: 33px;
  width: 100%;
  max-width: 1500px;
  z-index: 20;
}

div.footerContained p {
  margin-bottom: 0;
}

    .headerResponsive {
  position: fixed;
  display: none;
  width: 100%;
  color: white;
  align-items: center;
  background: #000000;
  min-height: 48px;
  height: 40px;
  z-index: 999;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
}

.headerResponsive .leftContent {
  display: flex;
  padding-left: 12px;
  justify-content: space-between;
  margin-right: 60px;
}

.headerResponsive .menuDiv {
  align-items: center;
  align-self: center;
  margin: auto;
}

.headerResponsive .menuDiv a {
  color: inherit;
  text-decoration: none;
  display: block;
  padding: 10px;
  background: #000000;
  width: 100%;
}

.headerResponsive input[type='checkbox'],
.headerResponsive .fa-bars,
.headerResponsive .fa-times {
  position: absolute;
  box-sizing: border-box;
  right: 3px;
  top: 7px;
  width: 48px;
  height: 48px;
}

.headerResponsive .menuDiv ul {
  list-style-type: none;
  padding: 0;
}

.headerResponsive .menuDiv li {
  border-bottom: 1px solid gray;
}

.headerResponsive .menuDiv a {
  text-align: center;
}

.headerResponsive .fa-bars,
.headerResponsive .fa-times {
  font-size: 32px;
  pointer-events: none;
  text-align: center;
}

.headerResponsive .menuDiv input[type='checkbox'] {
  opacity: 0;
}

.headerResponsive .menuDiv nav {
  display: none;
}

.headerResponsive .menuDiv input:checked ~ nav {
  display: block;
}

.headerResponsive .menuDiv input:checked ~ .fa-bars {
  display: none;
}

.headerResponsive .menuDiv input:not(:checked) ~ .fa-times {
  display: none;
}

@media screen and (max-width: 1000px) {
  .sidebar {
    display: none;
  }

  .topnav ul {
    display: none;
  }

  .headerContainer {
    display: none;
    height: 40px;
  }

  main {
    margin-top: 30px;
  }

  .lesson {
    padding-left: 8px;
    padding-right: 8px;
    /* width: 100vw; */
    max-width: 100vw;
    line-height: 22px;
    text-align: left;
  }

  .rightBox {
    position: relative;
    flex-direction: row;
    margin-top: 2rem;
    margin-left: 8px;
    justify-content: left;
  }

  .quizzBox {
    border-left: none;
    border-top: 1px solid;
  }

  .homeworkBox {
    border-left: none;
    border-top: 1px solid;
  }

  .lesson img {
    max-width: 95vw;
  }

  .lesson ul {
    padding-left: 15px;
  }

  /* .lesson .readingTime {
    margin-top: 25px;
    margin-bottom: -20px;
  } */

  .readerBarDiv {
    display: none;
  }

  .feedback {
    z-index: 10;
  }

  .headerResponsive {
    display: block;
  }

  .headerResponsive .leftContent {
    padding-top: 12px;
  }
}

@media screen and (max-width: 361px) {
  .lesson h1 {
    font-size: 32px;
  }

  .lesson h1 + h4 {
    font-size: 24px;
  }

  .lesson h2 {
    font-size: 24px;
  }
}

    
    </style>

  </head>

  <body>
    <div class="headerResponsive">
      <?php
        require("../functions/logo-movile.php");
      ?>
      <div class="menuDiv">
        <input type="checkbox">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
        <nav>
        <?php
          require("../functions/navigation-movile.php");
        ?>
        </nav>
      </div>
    </div>

    <?php
      require("../functions/logo.php");
    ?>
    
    <main>
      <div class="topnav" id='myTopnav' >
        
        <ul class="nav">
      
      <li class="link">
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">Intro</span>
      </li>
<li class="link">
        <a href="../Intro_CS/" class="nav-link" role="menuitem">Intro CS</a>
      </li>
<li class="link">
        <a href="../JS_Avanzado_I/" class="nav-link" role="menuitem">JS Avanzado I</a>
      </li>
<li class="link">
        <a href="../JS_Avanzado_II/" class="nav-link" role="menuitem">JS Avanzado II</a>
      </li>
<li class="link">
        <a href="../Estructura_de_datos_I/" class="nav-link" role="menuitem">Datos I</a>
      </li>
<li class="link">
        <a href="../Estructura_de_datos_II/" class="nav-link" role="menuitem">Datos II</a>
      </li>
<li class="link">
        <a href="../Estructura_de_datos_III/" class="nav-link" role="menuitem">Datos III</a>
      </li>
<li class="link">
        <a href="../Algoritmos_I/" class="nav-link" role="menuitem">Algoritmos I</a>
      </li>
<li class="link">
        <a href="../Algoritmos_II/" class="nav-link" role="menuitem">Algoritmos II</a>
      </li>
<li class="link">
        <a href="../Software_Testing/" class="nav-link" role="menuitem">Testing</a>
      </li>
    </ul>
      </div>

      <div class='lesson'>
        <div>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<hr>
<h3 id="podes-ver-el-contenido-de-todo-el-repositorio-en-formato-web-tipeando-npm-install-y-npm-start-e-ingresando-luego-a-http%3A%2F%2Flocalhost%3A8080" tabindex="-1">Podes ver el contenido de todo el repositorio en formato web tipeando <code>npm install</code> y <code>npm start</code> e ingresando luego a <a href="http://localhost:8080">http://localhost:8080</a> <a class="anchor-link" href="#podes-ver-el-contenido-de-todo-el-repositorio-en-formato-web-tipeando-npm-install-y-npm-start-e-ingresando-luego-a-http%3A%2F%2Flocalhost%3A8080"></a></h3>
<hr>
<h1 id="m%C3%B3dulo-1" tabindex="-1">Módulo 1 <a class="anchor-link" href="#m%C3%B3dulo-1"></a></h1>
<h4 id="fundamentos-de-javascript" tabindex="-1">Fundamentos de JavaScript <a class="anchor-link" href="#fundamentos-de-javascript"></a></h4>
<div class="hide">
<ul>
<li><a href="./01-IntroToCS">Intro to Computer Science</a></li>
<li><a href="./02-JavaScriptAvanzado-I">Javascript Avanzado I</a></li>
<li><a href="./03-JavaScriptAvanzado-II">Javascript Avanzado II</a></li>
<li><a href="./04-EstructuraDeDatos-I">Estructura de Datos I</a></li>
<li><a href="./05-EstructuraDeDatos-II">Estructura de Datos II</a></li>
<li><a href="./06-EstructuraDeDatos-III">Estructura de Datos III</a></li>
<li><a href="./07-Algoritmos-I">Algoritmos I</a></li>
<li><a href="./08-Algoritmos-II">Algoritmos II</a></li>
</ul>
</div >
<h2 id="proceso-de-subida-de-homeworks" tabindex="-1">Proceso de subida de homeworks <a class="anchor-link" href="#proceso-de-subida-de-homeworks"></a></h2>
<p><strong>IMPORTANTE:</strong> Luego de completar cada una de las homeworks del día deberán ejecutar los siguientes comandos para subir sus trabajos a sus repositorios (Deben estar posicionados sobre la carpeta del repositorio):</p>
<pre class="language-bash"><code class="hljs language-bash">  <span class="token function">git</span> <span class="token function">add</span> <span class="token builtin class-name">.</span><br>  <span class="token function">git</span> commit <span class="token parameter variable">-m</span> <span class="token string">"el mensaje que ustedes quieran"</span><br>  <span class="token function">git</span> push</code></pre>
<h3 id="extra" tabindex="-1">Extra <a class="anchor-link" href="#extra"></a></h3>
<ul>
<li><a href="https://addyosmani.com/resources/essentialjsdesignpatterns/book/">Patrones de JavaScript</a></li>
<li><a href="./02-JavaScriptAvanzado-I/errores.md">Manejo de errores</a></li>
<li><a href="./02-JavaScriptAvanzado-I/OOP.md">JS orientado a Objetos</a></li>
</ul>
<h3 id="links-copados" tabindex="-1">Links copados <a class="anchor-link" href="#links-copados"></a></h3>
<blockquote>
<p><a href="http://dmitrysoshnikov.com/ecmascript/javascript-the-core/#this-value">En esta página Dmitry Soshnikov</a> explica muy a fondo varios conceptos del lenguaje, casi a nivel de la especificación técnica.</p>
</blockquote>
<ul>
<li><strong>Streams y pipes</strong>: <a href="https://github.com/substack/stream-handbook">substack</a></li>
<li><a href="https://www.youtube.com/watch?v=8aGhZQkoFbQ"><strong>Event loop</strong></a></li>
<li><a href="http://davidshariff.com/blog/javascript-inheritance-patterns/#first-article"><strong>Inheritance Patterns</strong></a></li>
</ul>
</br >
<hr>
<h2 id="%E2%9C%85-feedback" tabindex="-1"><strong>✅ FEEDBACK</strong> <a class="anchor-link" href="#%E2%9C%85-feedback"></a></h2>
<h3 id="usa-este-formulario-para-reportar-tus-observaciones-de-mejora-o-errores.-tu-feedback-es-muy-importante-para-seguir-mejorando-el-modelo-educativo." tabindex="-1">Usa este <a href="https://docs.google.com/forms/d/e/1FAIpQLSe1MybH_Y-xcp1RP0jKPLndLdJYg8cwyHkSb9MwSrEjoxyzWg/viewform"><strong>formulario</strong></a> para reportar tus observaciones de mejora o errores. Tu feedback es muy importante para seguir mejorando el modelo educativo. <a class="anchor-link" href="#usa-este-formulario-para-reportar-tus-observaciones-de-mejora-o-errores.-tu-feedback-es-muy-importante-para-seguir-mejorando-el-modelo-educativo."></a></h3>

        </div>
      </div>

    </main>

  </body>
</html>