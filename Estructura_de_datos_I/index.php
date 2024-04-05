<?php
session_start();
if (!$_SESSION['USER']) {
  header('Location: ../');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c38f3d850.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php require("../functions/favicon.php"); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Estructura de datos I | Módulo 1 - JavaScript</title>
    

    

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
    font-display: swap;
    line-height: 18px;
    text-align: justify;
    padding: 0 2rem 4rem 300px;
    width: 100%;
    max-width: 98vw;
    margin-top: 60px;
  }
  
  .lesson .hide {
    display: none;
  }
  
  .lesson :target:before {
    content: '';
    display: block;
    height: 85px;
  }
  
  .lesson img[alt~='HenryLogo'] {
    display: none;
  }
  
  .lesson h1 {
    display: inline-block;
    font-family: 'Avenir-Black';
    font-size: 48px;
    font-display: swap;
    line-height: 66px;
    color: #2e2e2e;
  
    border-bottom-style: solid;
    border-bottom-width: 25px;
    border-bottom-color: #ffff01;
  
    height: 64px;
    margin: 0px 0 50px 0;
  }
  
  .lesson h1 + h4 {
    margin: -40px 0 3rem 0;
    font-family: 'Avenir-Black';
    font-size: 32px;
    font-display: swap;
    line-height: 32px;
  }
  
  .lesson h1 + h2 {
    margin-top: 0;
  }
  
  .lesson h2 {
    font-family: 'Avenir-Black';
    font-weight: 900;
    font-size: 32px;
    font-display: swap;
    line-height: 32px;
    text-align: left;
    color: #2e2e2e;
    margin-top: 3rem;
    margin-bottom: 1rem;
  }
  
  .lesson h2#homework {
    display: inline-block;
    font-family: 'Avenir-Black';
    font-size: 48px;
    font-display: swap;
    line-height: 66px;
    color: #1fa32a;
  }
  
  .lesson h3 {
    font-family: 'Avenir-Black';
    font-weight: 900;
    font-size: 24px;
    font-display: swap;
    line-height: 24px;
    text-align: left;
    color: #2e2e2e;
    margin-top: 2rem;
    margin-bottom: 1rem;
  }
  
  .lesson h4 {
    font-family: 'Avenir-Black';
    font-weight: 900;
    font-size: 18px;
    font-display: swap;
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
  
  .lesson img[alt~='no-box'] {
    box-shadow: none;
  }
  
  .lesson ul {
    list-style: square;
  }
  
  .lesson li {
    font-family: 'Avenir-Heavy';
    font-size: 16px;
    font-display: swap;
    line-height: 22px;
  }
  
  .lesson a {
    font-family: 'Avenir-Black';
    font-size: 16px;
    font-display: swap;
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
  
  .lesson .sandboxContainer {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
    margin-top: 2rem;
    margin-bottom: 2rem;
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
  
  .lesson table {
    /* border: 1px solid black; */
    margin-bottom: 20px;
    margin-top: 40px;
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px,
      rgba(6, 24, 44, 0.65) 0px 4px 6px -1px,
      rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    text-align: center !important;
  }
  
  .lesson th {
    background-color: rgb(170, 170, 170);
    padding: 8px;
    text-align: center !important;
  }
  
  .lesson thead {
    text-align: center !important;
    border-bottom: 1px solid rgb(150, 150, 150);
  }
  
  .lesson td {
    padding: 5px;
    text-align: center !important;
  }
  
  tr + td {
    border-right: 1px solid gray !important;
  }
  
  .rightBox {
    /* border: 1px solid red; */
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: right;
    align-items: flex-end;
    width: 97vw;
    max-width: 1500px;
    margin-top: 5rem;
    /* margin-bottom: 1rem; */
  }
  
  .homeworkBox {
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    border: 1px solid #000000;
    border-top: none;
    box-sizing: border-box;
    width: 160px;
    height: 41px;
    padding: 1.1rem;
  }
  
  .homeworkBox:hover {
    background-color: rgb(230, 230, 230);
  }
  
  .homeworkBox a {
    text-decoration: none;
    font-family: 'Avenir-Black';
    font-size: 16px;
    font-display: swap;
    line-height: 119.6%;
    color: green;
  }
  
  .quizzBox {
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    border: 1px solid #000000;
    border-top: none;
    box-sizing: border-box;
    width: 160px;
    height: 41px;
    padding: 1.1rem;
  }
  
  .quizzBox:hover {
    background-color: rgb(230, 230, 230);
  }
  
  .quizzBox a {
    text-decoration: none;
    font-family: 'Avenir-Black';
    font-size: 16px;
    font-display: swap;
    line-height: 119.6%;
    color: rgb(128, 79, 0);
  }
  
  .readingTime {
    font-family: 'Avenir-Book';
    font-size: 14px;
    font-display: swap;
    line-height: 119.6%;
    display: flex;
    align-items: center;
    text-align: center;
    border: 1px solid #000000;
    box-sizing: border-box;
    width: 160px;
    height: 41px;
    padding: 1.1rem;
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
    <div class="reader-bar-start">

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
        <a href="../Intro/" class="nav-link" role="menuitem">Intro</a>
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
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">Datos I</span>
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

        <div class='sidebar'>
          <div class="tocTitle">
            Contenido de la clase
            </div>
          <div class="tocBox">
            
            <nav class="toc" >
        <ul><li><a href="#recursividad">Recursividad </a><ul><li><a href="#suma-recursiva">Suma recursiva </a></li><li><a href="#n%C3%BAmeros-naturales-(n)">Números Naturales (N) </a></li></ul></li><li><a href="#estructuras-de-datos">Estructuras de Datos </a></li><li><a href="#arreglos">Arreglos </a></li><li><a href="#sets">Sets </a></li><li><a href="#pilas-(stack)">Pilas (Stack) </a></li><li><a href="#cola-(queue)">Cola (Queue) </a></li><li><a href="#homework">Homework </a></li></ul>
      </nav>
          </div>
        </div>

        <div class='rightBox'>
          <div class="readingTime">
                    Tiempo de lectura 23 min
          </div>
          
            <div class='quizzBox'>
              <a href='https://quiz.soyhenry.com/evaluation/new/6066323c656c8d23c2e60e75' target='blank'>Quizz 📚</a>
            </div>
          

          
            <div class='homeworkBox'>
              <a href=https://github.com/soyHenry/FT-M1/tree/master/04-EstructuraDeDatos-I/homework target='blank'>Homework 📝</a>
            </div>
          
        </div>

        <div class='lesson'>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<table class="hide" width="100%" style='table-layout:fixed;'>
  <tr>
    <td>
      <a href="https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=03-EstructuraDeDatos-I">
      <img src="https://static.thenounproject.com/png/204643-200.png" width="100"/>
      <br>
      Hacé click acá para dejar tu feedback sobre esta clase.
      </a>
    </td>
      <td>
      <a href="https://quiz.soyhenry.com/evaluation/new/6066323c656c8d23c2e60e75">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/HSQuiz.svg/768px-HSQuiz.svg.png" width="100" height="100"/>
        <br>
        Hacé click acá completar el quizz teórico de esta lecture.
      </a>
  </td>
  </tr>
</table>
<h1 id="estructuras-de-datos-i" tabindex="-1">Estructuras de Datos I <a class="anchor-link" href="#estructuras-de-datos-i"></a></h1>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/array.jpg" alt="asd"></p>
<h2 id="recursividad" tabindex="-1">Recursividad <a class="anchor-link" href="#recursividad"></a></h2>
<p>Estando ante un problema una estrategia de resolución conocida es dividir los problemas en pequeñas partes mas fáciles de trabajar, esta técnica es llamada ‘<em>divide y vencerás</em>’(<em>divide and conquer</em>). Basándonos en esta estrategia se define la idea de recursividad o recurrencia, plantea la solución de un problema como la solución de pequeñas instancias del mismo problema por <em>repetición</em>.</p>
<p>Suponiendo que queremos sumar todos los números hasta un valor de corte pasado por parámetro, la función se vería algo así cierto?</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token operator">></span> <span class="token keyword">function</span> <span class="token function">sumar</span><span class="token punctuation">(</span><span class="token parameter">num</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>    <span class="token keyword">var</span> tot <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span><br>    <span class="token keyword">for</span><span class="token punctuation">(</span><span class="token keyword">var</span> i<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">;</span> i<span class="token operator">&lt;=</span>num<span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>      tot <span class="token operator">+=</span> i<span class="token punctuation">;</span><br>    <span class="token punctuation">}</span><br>    <span class="token keyword">return</span> tot<span class="token punctuation">;</span><br>  <span class="token punctuation">}</span></code></pre>
<p>Si analizamos un poco esta operación hay una linea clave que es la que hace el trabajo: <code>tot += i</code></p>
<p>En esa ultima expresión tenemos la ejecución que va a resolver el problema, la repetición de esta linea hasta que se llegue al corte es lo que nos lleva a la meta. Entonces, podríamos decir que conociendo la situación en que debería cortar, a partir de ahora llamado <strong><em>caso base</em></strong>, solo tendríamos que repetirnos, y eso es exactamente como se compone una función recursiva.</p>
<pre class="language-javascript"><code class="hljs language-javascript">  <span class="token keyword">function</span> <span class="token function">recursiva</span><span class="token punctuation">(</span><span class="token parameter">num</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>    <br>    <span class="token comment">// planteamos un caso base que cuando llegue a este retorne un valor</span><br>    <span class="token keyword">if</span><span class="token punctuation">(</span><span class="token template-string"><span class="token template-punctuation string">`</span><span class="token string">caso base</span><span class="token template-punctuation string">`</span></span><span class="token punctuation">)</span> <span class="token keyword">return</span><br><br>    <span class="token comment">// acá pondríamos que operación se tendría que repetir, puede ser tan</span><br>    <span class="token comment">// simple como puedan imaginar o increíblemente compleja</span><br>    c <span class="token operator">=</span> a <span class="token operator">+</span> b<br><br>    <span class="token comment">// una vez realizada la operación lo que queda es repetirla hasta llegar</span><br>    <span class="token comment">// al caso base, entonces necesitamos una `llamada recursiva`.</span><br>    <span class="token keyword">return</span> <span class="token function">recursiva</span><span class="token punctuation">(</span>c<span class="token punctuation">)</span><br>    <span class="token comment">// y finalmete retornaria el resultado que vayamos devolviendo</span><br>  <span class="token punctuation">}</span></code></pre>
<p>Este es un ejemplo muy básico de la estructura de una función recursiva (que no corre ni hace nada, es solo un ejemplo), que vemos que presenta los dos componentes infaltables en una recursion, el <em>caso base</em> y la <em>llamada recursiva</em>. Veamos un ejemplo real con el problema anterior.</p>
<h3 id="suma-recursiva" tabindex="-1">Suma recursiva <a class="anchor-link" href="#suma-recursiva"></a></h3>
<p>Queremos sumar todos los números hasta un corte, entonces el caso base seria  cuando llegamos a 0 si sumamos desde el número y disminuyendo (porque así se me ocurrió en esta oportunidad), y nuestra llamada recursiva debería aparecer cuando ya sumamos y queremos que pase de número.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token comment">// vamos a crear la función con la variable `num` que me pasan por parámetro </span><br><span class="token comment">// y la variable `tot` que la voy a usar en la recursion e inicializo en 0</span><br><span class="token operator">></span> <span class="token keyword">function</span> <span class="token function">sumar</span><span class="token punctuation">(</span><span class="token parameter">num<span class="token punctuation">,</span> tot <span class="token operator">=</span> <span class="token number">0</span></span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>    <span class="token comment">// si mi número es menor igual `0` dejo de contar y retorno el total</span><br>    <span class="token keyword">if</span><span class="token punctuation">(</span>num <span class="token operator">&lt;=</span> <span class="token number">0</span><span class="token punctuation">)</span> <span class="token keyword">return</span> tot<span class="token punctuation">;</span><br><br>    <span class="token comment">// si no sumo el número actual al total</span><br>    tot <span class="token operator">+=</span> num<span class="token punctuation">;</span><br>    num <span class="token operator">-=</span> <span class="token number">1</span><span class="token punctuation">;</span><br><br>    <span class="token comment">// y finalmente realizo una nueva invocación</span><br>    <span class="token keyword">return</span> <span class="token function">sumar</span><span class="token punctuation">(</span>num<span class="token punctuation">,</span> tot<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span></code></pre>
<p>¿Qué es lo que estaría pasando? Repasemos paso por paso para el ejemplo <code>sumar(4)</code>.</p>
<h5>Primer invocación</h5>
<p>1.1 - La función se ejecutaría creando su propio <strong>scope</strong> y recibiría el número 4 por parámetro.</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span>  <span class="token comment">// recien inicializado</span></code></pre>
<p>1.2 - La comparación <code>num &lt;= 0</code> da <code>false</code> como resultado, por lo que no entra al bloque</p>
<p>1.3 - <code>tot</code> suma <code>num</code> a su valor y disminuimos <code>num</code> en 1.</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">3</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span></code></pre>
<p>1.4 - antes de retornar un resultado tiene que resolver el stament <code>sumar(num, tot)</code> asique se invoca nuevamente la función.</p>
<h5>Segunda invocación</h5>
<p>2.1 - La función crea un segundo <strong>scope</strong> y recibiría dos parámetros 3 y 4</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">3</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span></code></pre>
<p>2.2 - La comparación <code>num &lt;= 0</code> da <code>false</code> como resultado, por lo que no entra al bloque</p>
<p>2.3 - <code>tot</code> suma <code>num</code> a su valor y disminuimos <code>num</code> en 1.</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">7</span><span class="token punctuation">;</span></code></pre>
<p>2.4 - antes de retornar un resultado tiene que resolver el stament <code>sumar(num, tot)</code> asique se invoca nuevamente la función.</p>
<h5>Tercer invocación</h5>
<p>3.1 - La función crea un tercer <strong>scope</strong> y recibiría dos parámetros 2 y 7</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">7</span><span class="token punctuation">;</span></code></pre>
<p>3.2 - La comparación <code>num &lt;= 0</code> da <code>false</code> como resultado, por lo que no entra al bloque</p>
<p>3.3 - <code>tot</code> suma <code>num</code> a su valor y disminuimos <code>num</code> en 1.</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">9</span><span class="token punctuation">;</span></code></pre>
<p>3.4 - antes de retornar un resultado tiene que resolver el stament <code>sumar(num, tot)</code> asique se invoca nuevamente la función.</p>
<h5>Cuarta invocación</h5>
<p>4.1 - La función crea un cuarto <strong>scope</strong> y recibiría dos parámetros 1 y 9</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">9</span><span class="token punctuation">;</span></code></pre>
<p>4.2 - La comparación <code>num &lt;= 0</code> da <code>false</code> como resultado, por lo que no entra al bloque</p>
<p>4.3 - <code>tot</code> suma <code>num</code> a su valor y disminuimos <code>num</code> en 1.</p>
<pre class="language-javascript"><code class="hljs language-javascript">Estado actual de las variables<span class="token operator">:</span><br>  num <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span><br>  tot <span class="token operator">=</span> <span class="token number">10</span><span class="token punctuation">;</span></code></pre>
<p>4.4 - antes de retornar un resultado tiene que resolver el stament <code>sumar(num, tot)</code> asique se invoca nuevamente la función.</p>
<h5>Quinta invocación (y ultima)</h5>
<p>5.1 - La función crea un quinto <strong>scope</strong> y recibiría dos parámetros 0 y 10</p>
<p>5.2 - La comparación <code>num &lt;= 0</code> da <code>true</code> como resultado, por lo que entra al bloque, entonces el quinto scope retorna un valor de 10.</p>
<p>Ese valor retornado llega como resultado del stament pendiente del scope 4 (<code>sumar(num, tot)</code>) entonces ese scope puede retornar el valor recibido.</p>
<p>Ese valor llega como resultado del stament pendiente del scope 3 (<code>sumar(num, tot)</code>) entonces ese scope puede retornar el valor recibido.</p>
<p>Y así sigue hasta que llegamos al primer scope creado, que finalmente retornara el valor <code>10</code> como resultado de toda la operación.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token operator">></span> <span class="token function">sumar</span><span class="token punctuation">(</span><span class="token number">4</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> <span class="token number">10</span></code></pre>
<p>¿Se imaginan que pasaría si no hubiésemos puesto el <code>return</code> de la ultima linea?¿Con el primer <code>return</code> en el <code>if</code> alcanzara?</p>
<p>Pruebenlo!</p>
<h3 id="n%C3%BAmeros-naturales-(n)" tabindex="-1">Números Naturales (N) <a class="anchor-link" href="#n%C3%BAmeros-naturales-(n)"></a></h3>
<p>Los números naturales se definen como todos aquellos números mayores a cero sin decimales, o en una definición más matemática :</p>
<blockquote>
<p>Definimos que 0 es un <em>Natural</em>.</p>
</blockquote>
<blockquote>
<p>Entonces un número <code>x</code> va a ser natural siempre que <code>x-1</code> sea un natural.</p>
</blockquote>
<p>Para ejemplificar digamos que <code>x = 3</code>.</p>
<p><code>x</code> es natural? va a ser natural si <code>x-1</code> es natural.</p>
<p><code>x = 2</code> es natural? va a ser natural si <code>x-1</code> es natural.</p>
<p><code>x = 1</code> es natural? va a ser natural si <code>x-1</code> es natural.</p>
<p><code>x = 0</code> es natural? Si, porque definimos que 0 era natural.</p>
<p>Si analizamos este comportamiento, tiene una característica repetitiva como estábamos trabajando en las funciones recursivas, y hay un caso base que se define primero cuando decimos que 0 es natural.</p>
<p>¿Como podríamos armar una función recursiva con estas propiedades?</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token operator">></span> <span class="token keyword">function</span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token parameter">num</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>    <span class="token comment">// planteo el caso base en el que llegamos a 0</span><br>    <span class="token keyword">if</span><span class="token punctuation">(</span>num <span class="token operator">===</span> <span class="token number">0</span><span class="token punctuation">)</span> <span class="token keyword">return</span> <span class="token boolean">true</span><br>    <span class="token comment">// si no le pregunto si `num-1` es natural</span><br>    <span class="token comment">// lógicamente este ciclo se repetirá hasta llegar a 0</span><br>    <span class="token keyword">return</span> <span class="token function">esNatural</span><span class="token punctuation">(</span>num<span class="token operator">-</span><span class="token number">1</span><span class="token punctuation">)</span><br>  <span class="token punctuation">}</span><br><br><span class="token operator">></span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token number">0</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> <span class="token boolean">true</span><br><br><span class="token operator">></span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token number">7</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> <span class="token boolean">true</span><br><br><span class="token operator">></span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token number">1.5</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> Uncaught RangeError<span class="token operator">:</span> Maximum call stack size exceeded</code></pre>
<p>¿Qué paso? <code>Maximum call stack size exceeded</code> parece que superamos la cantidad de scopes posibles que podíamos generar al stack del <code>Event Loop</code>, esto se llama un <em><strong>stack overflow</strong></em>. Eso significa o que pedimos un número muy grande que no llego a terminar de resolverlo, o que se nos escapo un caso en el que debería cortar la recursion.</p>
<p>Veamos el momento del error, <code>esNatural(1.5)</code> por conocimiento previo sabemos que 1.5 no es un número natural, pero tenemos que ver como afecta esto nuestro algoritmo.</p>
<p>Una vez que vamos invocando la función el número va a llegar a <code>0.5</code>, al no entrar al <code>if()</code> va a realizar una nueva invocación y pasar al valor <code>-0.5</code>. A partir de ahí nunca va a llegar a entrar al condicional porque restando de a 1 a un número negativo nunca puede ser igual a <code>0</code>, va a seguir invocando la función hasta el menos infinito (o hasta que supere el <em>stack</em>).</p>
<p>El caso que nos falta es devolver <code>false</code> cuando un número no es natural, que es exactamente lo que estaba pasando recién, un número que restándole de a 1 nunca llega a ser igual a 0 no es un número natural.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token operator">></span> <span class="token keyword">function</span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token parameter">num</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>    <span class="token keyword">if</span><span class="token punctuation">(</span>num <span class="token operator">===</span> <span class="token number">0</span><span class="token punctuation">)</span> <span class="token keyword">return</span> <span class="token boolean">true</span><span class="token punctuation">;</span><br>    <span class="token comment">// agrego una nueva condición para que no se pase de 0</span><br>    <span class="token keyword">if</span><span class="token punctuation">(</span>num <span class="token operator">&lt;</span> <span class="token number">0</span><span class="token punctuation">)</span> <span class="token keyword">return</span> <span class="token boolean">false</span><span class="token punctuation">;</span><br>    <span class="token keyword">return</span> <span class="token function">esNatural</span><span class="token punctuation">(</span>num<span class="token operator">-</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><br><br><span class="token operator">></span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token number">5</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> <span class="token boolean">true</span><br><br><span class="token operator">></span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token operator">-</span><span class="token number">2</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> <span class="token boolean">false</span><br><br><span class="token operator">></span> <span class="token function">esNatural</span><span class="token punctuation">(</span><span class="token number">1.5</span><span class="token punctuation">)</span><br><span class="token operator">&lt;</span> <span class="token boolean">false</span></code></pre>
<p>Una de las contras que tiene este método es lo grave que son las fallas, como vieron, por olvidarnos un caso puede que creamos que el programa funciona correctamente y cuando no encontremos con situaciones no contempladas podemos colgar todo el programa sin poder detectar el error y trabajarlo. Por eso hay que ser cuidadoso jugando con funciones recursivas, nunca se olviden de evaluar todos los casos posibles.</p>
<h2 id="estructuras-de-datos" tabindex="-1">Estructuras de Datos <a class="anchor-link" href="#estructuras-de-datos"></a></h2>
<p>Cuando hablamos a estructura de Datos nos referimos a cómo organizamos los datos cuando programamos. Básicamente, este tema trata de encontrar formas particulares de  organizar datos de tal manera que puedan ser utilizados de manera eficiente.</p>
<p>Imaginen que los datos que tenemos que manejar son libros!, y en un principio tenemos muchísimos libros desordenados por casa. Cada vez que queremos leer un libro, tardamos dos horas buscando uno por uno hasta dar con el libro. Eso no es eficiente. Entonces, ¿qué hacemos? Bueno, podemos armar una biblioteca, por ejemplo, y acomodamos los libros en orden alfabético, esto nos ahorra tiempo en buscarlos. Y, ¿qué pasa si tenemos demasiados libros y no entran en una biblioteca? Podemos tener un lugar donde depositamos los libros que menos usamos, y mantenemos una libretita donde especificamos qué libros dejamos ahí y en que depósito están.<br>
En fin, podemos organizarlos de mil maneras, pero se entiende la idea que organizando los datos vamos a ser más eficientes, no?</p>
<h2 id="arreglos" tabindex="-1">Arreglos <a class="anchor-link" href="#arreglos"></a></h2>
<p>El arreglo es una estructura de datos que ya conocían! Es tan usada, que muchos lenguajes la implementan de forma nativa, como javascript.<br>
El arreglo es una colección finita de elementos que ocupan espacios contiguos de memoria, y se pueden acceder a cada uno de ellos a través de un índice.</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/array.jpg" alt="Array"></p>
<p>Los arreglos nos sirven para guardar una colección de cosas (objetos, enteros, funciones, etc…) que tengan algo en común. Lo bueno de los arreglos es que la inserción es muy rápida, y es fácil acceder a un objeto si conocemos su índice. Pero no es tan bueno cuando tenemos que buscar un objeto en él, ya que tenemos que recorrerlo entero para encontrarlo. Borrar un elemento también es medio costoso.</p>
<h2 id="sets" tabindex="-1">Sets <a class="anchor-link" href="#sets"></a></h2>
<p>Un Set es una colección de elementos sin un orden en particular en donde <em>cada elemento puede aparecer una sola vez</em>. O sea, que es parecido a un arreglo, pero con la condición que cada elemento sea único.<br>
En javascript los sets ya están implementados, y los podemos encontrar en la clase <code>Set</code>, acá esta la <a href="https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Set">documentación</a>. Veamos un ejemplo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> arreglo <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">3</span><span class="token punctuation">,</span><span class="token number">4</span><span class="token punctuation">,</span><span class="token number">4</span><span class="token punctuation">,</span><span class="token number">5</span><span class="token punctuation">,</span><span class="token number">5</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">]</span><br><span class="token keyword">var</span> set1    <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Set</span><span class="token punctuation">(</span>arreglo<span class="token punctuation">)</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>arreglo<span class="token punctuation">)</span>   <span class="token comment">// [ 1, 2, 3, 4, 4, 5, 5, 1, 2 ]</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>set1<span class="token punctuation">)</span>      <span class="token comment">// Set { 1, 2, 3, 4, 5 }</span></code></pre>
<h2 id="pilas-(stack)" tabindex="-1">Pilas (Stack) <a class="anchor-link" href="#pilas-(stack)"></a></h2>
<p>Esta estructura de datos es básicamente una <em>pila de cosas</em>. Vieron cuando tienen que lavar los platos: primero van poniendo un plato arriba del otro (armando la pila), después empiezan a sacar desde arriba para ir limpiando. Bueno, si se fijan bien el primer plato que ponen en la pila es el último que va a ser lavado, o bien, el último que entra es el primero que va a salir. Esto se conoce como una estructura tipo <strong>LIFO</strong>: <em>Last in, first out</em>.</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/stack.jpg" alt="stack"></p>
<p>Básicamente un stack tiene dos operaciones: <code>push()</code> y <code>pop()</code>, ya que sólo podés poner y sacar elementos en un orden definido, hace que no necesitemos más operaciones.<br>
Podemos usar múltiples formas de implementar una Pila en javascript. Lo podemos hacer usando arreglos, una lista enlazada, o bien crear nuestra propia clase Pila.<br>
Veamos como hacerlo usando arreglos:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> stack <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br>stack<span class="token punctuation">.</span><span class="token function">push</span><span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>       <span class="token comment">// la pila es [1]</span><br>stack<span class="token punctuation">.</span><span class="token function">push</span><span class="token punctuation">(</span><span class="token number">10</span><span class="token punctuation">)</span><span class="token punctuation">;</span>      <span class="token comment">// la pila es ahora [1, 10]</span><br><span class="token keyword">var</span> i <span class="token operator">=</span> stack<span class="token punctuation">.</span><span class="token function">pop</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// la pila [1]</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span><span class="token punctuation">;</span>      <span class="token comment">// muestra 10</span></code></pre>
<h2 id="cola-(queue)" tabindex="-1">Cola (Queue) <a class="anchor-link" href="#cola-(queue)"></a></h2>
<p>Una cola, es una estructura en la cual el primer elemento que entra es el primer elemento que sale (como cuando hacemos una cola en el Banco :smile:). Esto es lo opuesto al comportamiento de una Pila, y se conoce como estructura tipo <strong>FIFO</strong>: <em>First in, First out</em>. La cola tiene dos métodos tambien: <code>enqueue()</code> y <code>dequeue()</code>, que sirven para encolar y ‘desencolar’ elementos.<br>
Esta estructura la vamos a usar mucho para representar problemas de la vida real. Por ejemplo, si tuviera que hacer una app que desvie llamados de clientes a operadores, podríamos hacer una cola, donde vamos metiendo los clientes que van llegando, y cuando algún operador esté libre, sacar un cliente de la cola y pasarlo.</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/cola.jpg" alt="colas"></p>
<p>Veamos como podemos implementarlo en Javascript, igual que con Pilas, se puede hacer de muchas maneras. Vamos a mostrar la más simple, con arreglos:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> queue <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br>queue<span class="token punctuation">.</span><span class="token function">push</span><span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>         <span class="token comment">// la cola es [1]</span><br>queue<span class="token punctuation">.</span><span class="token function">push</span><span class="token punctuation">(</span><span class="token number">2</span><span class="token punctuation">)</span><span class="token punctuation">;</span>         <span class="token comment">// la cola es [1, 2]</span><br><span class="token keyword">var</span> i <span class="token operator">=</span> queue<span class="token punctuation">.</span><span class="token function">shift</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// la cola es [2]</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span><span class="token punctuation">;</span>        <span class="token comment">// muestra 1</span></code></pre>
<p>Como ven, cuando construimos el set pasándole un <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Iteration_protocols#iterable">iterable</a> nos devuelve un <code>Set</code> en donde cada uno de los elementos que contiene es único!</p>
<h2 id="homework" tabindex="-1">Homework <a class="anchor-link" href="#homework"></a></h2>
<p>Completa la tarea descrita en el archivo <a href="https://github.com/soyHenry/FT-M1/blob/master/04-EstructuraDeDatos-I/homework/README.md">README</a></p>

        </div>

      </main>

      
        <div class="feedback">
          <a href='https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=03-EstructuraDeDatos-I' target="_blank">
          Dejanos tu feedback!👍
        </a>
        </div>
      

      <div class="footerContainer">
        <div class="footerContained">
          <p>Hecho con 💛 por alumnos de Henry</p>
        </div>
      </div>

      <div class="readerBarDiv">
        
  <!-- up button -->
  <div>
    <button
      id="upBtn"
      style="position:fixed; width:32px; height:32px; border-radius:50%; border:none; background-color:black; right:20px; bottom:55px; color:white; z-index:999; focus:outline-none; cursor:pointer; transition-duration:500ms; opacity:0; pointer-events:none;"
    ><i class="arrow up"></i></button>
  </div>
  
  <style>
  .arrow {
    border: solid white;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
  }

  .up {
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
  }
  </style>

  <script>
  window.addEventListener('scroll', () => {
    if (window.scrollY > 250) {
      upBtn.style.opacity = 1;
      upBtn.style.pointerEvents = 'auto';     
    }
    else {
      upBtn.style.opacity = 0;
      upBtn.style.pointerEvents = 'none';
    }
  })

  upBtn.addEventListener('click', () => {
    let start = document.querySelector('.reader-bar-start')
    start.scrollIntoView({behavior: "smooth"})
  })
  </script>

  <!-- reader bar -->
  <div id="readerBarContainer" style="height:3px;width:100%;background-color:black;position:fixed;top:66px;left:0;z-index:1099;transition:0.2s;">
    <div id="readerBar" style="height:3px;width:0;background-color:yellow;position:fixed;top:66px;left:0;z-index:1099;transition:0.2s;"></div>
  </div>

  <script>
    let winH = window.innerHeight;
    const content = document.querySelector('.reader-bar-start');

    let contentH = content.offsetHeight;
    let contentS = contentH - winH;
    let readerBar = document.getElementById('readerBar');
    window.addEventListener('load', () => {
      document.addEventListener ('scroll', updateBar);
    })
    window.addEventListener('resize', redefine)

    function redefine() {
      winH = window.innerHeight;
      contentH = content.offsetHeight;
      contentS = contentH - winH;
      updateBar();
    }

    function updateBar() {
      const pagePos = window.scrollY; 
      const updatedBar = pagePos * 100 / contentS;
      readerBar.style.width = updatedBar + "%";
    }
  </script>
  
      </div>

    </body>
  </html>