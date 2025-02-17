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
    <title>Estructura de datos III | Módulo 1 - JavaScript</title>
    

    

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
        <a href="../Estructura_de_datos_I/" class="nav-link" role="menuitem">Datos I</a>
      </li>
<li class="link">
        <a href="../Estructura_de_datos_II/" class="nav-link" role="menuitem">Datos II</a>
      </li>
<li class="link">
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">Datos III</span>
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
        <ul><li><a href="#arboles-(trees)">Arboles (Trees) </a><ul><li><a href="#tipos-de-arboles">Tipos de Arboles </a></li><li><a href="#%C3%A1rbol-binario">Árbol binario </a></li><li><a href="#arbol-avl">Arbol AVL </a></li></ul></li><li><a href="#heap">Heap </a></li><li><a href="#otras-estructuras-de-datos">Otras estructuras de Datos </a></li><li><a href="#tabla-resumen">Tabla Resumen </a></li><li><a href="#homework">Homework </a></li></ul>
      </nav>
          </div>
        </div>

        <div class='rightBox'>
          <div class="readingTime">
                    Tiempo de lectura 12 min
          </div>
          
            <div class='quizzBox'>
              <a href='https://quiz.soyhenry.com/evaluation/new/60745c49656c8d23c2e610b7' target='blank'>Quizz 📚</a>
            </div>
          

          
            <div class='homeworkBox'>
              <a href=https://github.com/soyHenry/FT-M1/tree/master/06-EstructuraDeDatos-III/homework target='blank'>Homework 📝</a>
            </div>
          
        </div>

        <div class='lesson'>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<table class="hide" width="100%" style='table-layout:fixed;'>
  <tr>
    <td>
      <a href="https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=05-EstructuraDeDatos-III">
      <img src="https://static.thenounproject.com/png/204643-200.png" width="100"/>
      <br>
      Hacé click acá para dejar tu feedback sobre esta clase.
      </a>
    </td>
      <td>
      <a href="https://quiz.soyhenry.com/evaluation/new/60745c49656c8d23c2e610b7">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/HSQuiz.svg/768px-HSQuiz.svg.png" width="100" height="100"/>
        <br>
        Hacé click acá completar el quizz teórico de esta lecture.
      </a>
  </td>
  </tr>
</table>
<h1 id="estructuras-de-datos-iii" tabindex="-1">Estructuras de Datos III <a class="anchor-link" href="#estructuras-de-datos-iii"></a></h1>
<h2 id="arboles-(trees)" tabindex="-1">Arboles (Trees) <a class="anchor-link" href="#arboles-(trees)"></a></h2>
<p>Los árboles son estructuras de datos que consiste en una serie de nodos conectados entre ellos y que se asemeja a un árbol (al revés). Cuando hablemos de árboles vamos a usar la siguiente terminología:</p>
<ul>
<li><strong>Raíz</strong> - El nodo superior del árbol.</li>
<li><strong>Padre</strong> - Nodo con hijos.</li>
<li><strong>Hijo</strong> - Nodo descendiente de otro nodo.</li>
<li><strong>Hermanos</strong> - Nodos que comparten el mismo padre.</li>
<li><strong>Hojas</strong> - Nodos sin hijos.</li>
<li><strong>Nivel</strong> - El nivel de un nodo está definido por el número de conexiones entre el nodo y la raíz.</li>
<li><strong>Camino</strong> - Una secuencia de nodos por los que tenemos que pasar para llegar de un nodo a otro.</li>
</ul>
<p>Para que una estructura de nodos sea un árbol tiene que ser dirigido (o sea que se pueda ir de un nodo al hijo, pero no al revés, como en las listas enlazadas), no tiene que tener ciclos ( o sea que no exista un camino para llegar de un nodo al mismo nodo sin pasar dos veces por otro nodo.), tiene que ser conexo, es decir que no haya nodos ‘sueltos’, y además dos nodos cualesquiera tienen que estar conectados <em>sólo</em> por un único camino.</p>
<p>El siguiente no es un árbol porque tiene nodos no <em>conexos</em>:</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/notatree2.png" alt="no-box"></p>
<p>Este otro no es un árbol porque tiene un ciclo:</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/notatree1.png" alt="no-box"></p>
<p>Esta estructura es ampliamente usada, de hecho todos ustedes ya vienen trabajando hace mucho con una estructura de tipo árbol, ¿sabén de que les estoy hablando?</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/dom_tree.gif" alt="Dom"></p>
<p>Sí, el DOM. La forma que usa el browser para mantener una representación del HTML en su cerebro es la de un árbol.</p>
<h3 id="tipos-de-arboles" tabindex="-1">Tipos de Arboles <a class="anchor-link" href="#tipos-de-arboles"></a></h3>
<p>En realidad, la definición de árbol es muy general, por ejemplo, una lista enlazada ES un árbol, cuyo root es la cabeza y cada nodo tiene un sólo hijo; es un caso <em>particular</em> de un árbol. Es más, un árbol es un caso particular de un <em>grafo</em>.<br>
También podemos definir al árbol de forma recursiva, ya que si lo pensamos, cada nodo ES un árbol, o sea que un árbol está formado por árboles; pero estos temas ya se vuelven muy filosóficos.<br>
Veamos algunos tipos de árboles que vamos a usar.</p>
<h3 id="%C3%A1rbol-binario" tabindex="-1">Árbol binario <a class="anchor-link" href="#%C3%A1rbol-binario"></a></h3>
<p>Este es un árbol particular que tiene como característica que la cantidad de hijos que puede tener un nodo está restringida a dos (por eso se llama árbol binario).</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/binaryTree.png" alt="no-box"></p>
<p>Un árbol de este estilo puede estar <em>balanceado</em> o no: vamos a decir que un árbol es <em>balanceado</em> cuando la cantidad de nodos que haya a la izquierda del root sea igual (o no difiera en más de una unidad) a la cantidad de nodos en la parte izquierda.</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/Balanced_vs_unbalanced_BST.png" alt="BalancedUnBalanced"></p>
<p>Lo bueno de estos árboles, es que si se encuentra <em>balanceado</em>, necesitamos no más de <em>log n</em> pasos para llegar a cualquier nodo! Esto los hace excelente estructuras de datos para guardar información que luego vamos a tener que buscar.</p>
<p>Veamos una manera rápida de implementar un árbol binario en Javascript usando arreglos. Básicamente lo que vamos a hacer es ir guardando cada nodo con sus hijos en una posición particular. Empezamos poniendo el nodo root como primer elemento del arreglo. Luego vamos a poner su hijo izquierdo en la posición 1 y el derecho en la 2. El hijo izquierdo de 1 iria en la posición 3 y el derecho en la 4. Los hijos de 2 irian en 5 y 6, respectivamente. En esta imagen se va a entender mejor:</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/binaryArray.png" alt="BinaryArray"></p>
<p>Ahora, si lo pensamos cada hijo de un nodo está en la posición ubicado en <code>i*2+1</code> y <code>i*2+2</code> siendo <code>i</code> el índice del arreglo. Por lo tanto podemos implementar este árbol usando lo siguiente:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token function">izquierdo</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span> <span class="token operator">=</span> <span class="token number">2</span><span class="token operator">*</span>i <span class="token operator">+</span> <span class="token number">1</span> <span class="token comment">// el hijo izquierdo del nodo que está en i</span><br><span class="token function">derecho</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span> <span class="token operator">=</span> <span class="token number">2</span><span class="token operator">*</span>i <span class="token operator">+</span> <span class="token number">2</span>   <span class="token comment">// el hijo derecho del nodo que está en i</span></code></pre>
<h3 id="arbol-avl" tabindex="-1">Arbol AVL <a class="anchor-link" href="#arbol-avl"></a></h3>
<p>Los árboles AVL (por sus inventores  Georgy Adelson-Velsky y Evgenii Landis) es un árbol binario de búsqueda, pero que mantiene todo el tiempo al árbol <em>balanceado</em>. Básicamente lo que hace es, cada vez que se inserta o saca un nodo controla que todos los nodos estén balanceados. Y si no lo están reacomoda el árbol de tal forma que queden balanceados.</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/avl.gif" alt="avl"></p>
<p>Lo malo de este árbol, es que las operaciones de insertar y sacar son muchos más caras que las de cualquier otra estructura. Pero nos da la posibilidad de estar <strong>seguros</strong> que nunca vamos a tardar más de log n pasos en buscar un elemento. Según la naturaleza del problema que tengamos, nos va a convenir este método o no.</p>
<h2 id="heap" tabindex="-1">Heap <a class="anchor-link" href="#heap"></a></h2>
<p>Un heap es un árbol binario, con las condiciónes que cada nodo tiene que contener un valor igual o mayor que los de sus hijos y que sea completo, es decir que todas las hojas estén en el último nivel del árbol (o uno menos) y además que esté completo desde la izquierda.</p>
<p><img src="../_src/assets/04-EstructuraDeDatos-I/heap.png" alt="no-box"></p>
<p>Cuando se construye un heap al agregar cada valor, tenemos que buscar la posición que les corresponde. O sea, que en cada paso vamos a tener que ir reacomodando el árbol para que siga siendo un <em>heap</em>.</p>
<h2 id="otras-estructuras-de-datos" tabindex="-1">Otras estructuras de Datos <a class="anchor-link" href="#otras-estructuras-de-datos"></a></h2>
<p>Obviamente, existen muchas más estructuras de datos, estas son las más generales y las que todo ing. de software debe conocer. De todos modos, la mejor estructura de datos la vas a elegir según el problema que quieras resolver y después de investigar cuál es la que más te sirve.</p>
<h2 id="tabla-resumen" tabindex="-1">Tabla Resumen <a class="anchor-link" href="#tabla-resumen"></a></h2>
<p>Felicitaciones! has terminado la saga de estructura de datos (I - La amenaza recursiva, II - El ataque de las listas, III - La venganza de los trees).</p>
<p>Les dejo una tablita con ventajas y desventajas de las estructuras que hemos visto, para saber cuando utilizarlas y cuando no.</p>
<table>
<thead>
<tr>
<th>Estuctura</th>
<th style="text-align:center">Ventajas</th>
<th style="text-align:right">Desventajas</th>
</tr>
</thead>
<tbody>
<tr>
<td>Arreglo</td>
<td style="text-align:center">Rápida inserción, acceso muy rápido si conocemos el index.</td>
<td style="text-align:right">Búsqueda Lenta, borrado lento.</td>
</tr>
<tr>
<td>Arreglo Ordenado</td>
<td style="text-align:center">Mejor búsqueda que el arreglo normal</td>
<td style="text-align:right">idem arreglo</td>
</tr>
<tr>
<td>Pila</td>
<td style="text-align:center">Asegura LIFO</td>
<td style="text-align:right">Acceso lento a los demás items</td>
</tr>
<tr>
<td>Cola</td>
<td style="text-align:center">Asegura FIFO</td>
<td style="text-align:right">Acceso lento a los demás items</td>
</tr>
<tr>
<td>Lista Enlazada</td>
<td style="text-align:center">Rápida inserción, rapido borrado</td>
<td style="text-align:right">Búsqueda Lenta</td>
</tr>
<tr>
<td>Árbol Binario</td>
<td style="text-align:center">Muy rápido si está balanceado</td>
<td style="text-align:right">Algoritmo de borrar es complejo, hay que balancear</td>
</tr>
<tr>
<td>Árbol Red-black</td>
<td style="text-align:center">Rápido y siempre está balanceado</td>
<td style="text-align:right">Es Complejo</td>
</tr>
<tr>
<td>Árbol 2-3-4</td>
<td style="text-align:center">Muy bueno para guardar datos</td>
<td style="text-align:right">Es Complejo</td>
</tr>
<tr>
<td>Hash</td>
<td style="text-align:center">Muy rápido si conocemos el key. Insercion rapida</td>
<td style="text-align:right">Borrado lento, buscado lento, consume mucha memoria</td>
</tr>
<tr>
<td>Heap</td>
<td style="text-align:center">Rápida inserción, borrado y acceso al item mas grande</td>
<td style="text-align:right">Acceso lento a los demás items</td>
</tr>
</tbody>
</table>
<h2 id="homework" tabindex="-1">Homework <a class="anchor-link" href="#homework"></a></h2>
<p>Completa la tarea descrita en el archivo <a href="https://github.com/soyHenry/FT-M1/blob/master/06-EstructuraDeDatos-III/homework/README.md">README</a></p>

        </div>

      </main>

      
        <div class="feedback">
          <a href='https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=05-EstructuraDeDatos-III' target="_blank">
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