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
    <title>Algoritmos I | Módulo 1 - JavaScript</title>
    

    

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
        <a href="../Estructura_de_datos_III/" class="nav-link" role="menuitem">Datos III</a>
      </li>
<li class="link">
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">Algoritmos I</span>
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
        <ul><li><a href="#%C2%BFqu%C3%A9-es-un-algoritmo%3F">¿Qué es un algoritmo? </a></li><li><a href="#un-algoritmo-para-salir-de-un-laberinto">Un algoritmo para salir de un laberinto </a></li><li><a href="#%C2%BFqu%C3%A9-hace-bueno-a-un-algoritmo%3F">¿Qué hace bueno a un algoritmo? </a><ul><li><a href="#%C2%BFc%C3%B3mo-medimos-la-eficienta-del-un-algoritmo%3F">¿Cómo medimos la eficienta del un algoritmo? </a></li><li><a href="#complejidad-de-un-algoritmo">Complejidad de un algoritmo </a></li><li><a href="#circunstancias">Circunstancias </a></li><li><a href="#cota-superior-asint%C3%B3tica-(-big-o-notation-%2F-notaci%C3%B3n-o-grande-)">Cota superior asintótica ( Big O Notation / Notación O grande ) </a></li><li><a href="#problemas-p-y-np">Problemas P y NP </a></li></ul></li><li><a href="#algoritmos-de-b%C3%BAsqueda">Algoritmos de búsqueda </a><ul><li><a href="#insertionsort">InsertionSort </a></li><li><a href="#selection-sort">Selection Sort </a></li><li><a href="#bubblesort">BubbleSort </a></li></ul></li><li><a href="#homework">Homework </a></li></ul>
      </nav>
          </div>
        </div>

        <div class='rightBox'>
          <div class="readingTime">
                    Tiempo de lectura 38 min
          </div>
          
            <div class='quizzBox'>
              <a href='https://quiz.soyhenry.com/evaluation/new/6053bc3f656c8d23c2e60e16' target='blank'>Quizz 📚</a>
            </div>
          

          
            <div class='homeworkBox'>
              <a href=https://github.com/soyHenry/FT-M1/tree/master/07-Algoritmos-I/homework target='blank'>Homework 📝</a>
            </div>
          
        </div>

        <div class='lesson'>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<table class="hide" width="100%" style='table-layout:fixed;'>
  <tr>
    <td>
      <a href="https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=06-Algoritmos-I">
      <img src="https://static.thenounproject.com/png/204643-200.png" width="100"/>
      <br>
      Hacé click acá para dejar tu feedback sobre esta clase.
      </a>
    </td>
      <td>
      <a href="https://quiz.soyhenry.com/evaluation/new/6053bc3f656c8d23c2e60e16">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/HSQuiz.svg/768px-HSQuiz.svg.png" width="100" height="100"/>
        <br>
        Hacé click acá completar el quizz teórico de esta lecture.
      </a>
  </td>
  </tr>
</table>
<h1 id="algoritmos-i" tabindex="-1">Algoritmos I <a class="anchor-link" href="#algoritmos-i"></a></h1>
<h2 id="%C2%BFqu%C3%A9-es-un-algoritmo%3F" tabindex="-1">¿Qué es un algoritmo? <a class="anchor-link" href="#%C2%BFqu%C3%A9-es-un-algoritmo%3F"></a></h2>
<p>Un algoritmo es un conjunto prescrito de instrucciones o reglas bien definidas, ordenadas y finitas que permite realizar una actividad mediante pasos sucesivos que no generen dudas a quien deba realizar dicha actividad.<br>
O sea, una serie de pasos a seguir para completar una tarea.</p>
<p>Por ejemplo, podés tener un algoritmo para ir desde tu casa al trabajo:</p>
<ol>
<li>Salir de casa</li>
<li>Tomar Subte</li>
<li>Tomar Bondi</li>
<li>Caminar</li>
</ol>
<p>O para hacerte el desayuno también:</p>
<ol>
<li>Buscar Pan</li>
<li>Prender tostadora</li>
<li>Esperar N segundos</li>
<li>Comer Tostada</li>
</ol>
<p>En <code>Ciencias de la computación</code> los algoritmos van a ser los pasos que la computadora tiene que <em>seguir</em> para poder completar una tarea. Conocer y encontrar buenos algoritmos y saber cuando utilizarlos es una de las prácticas fundamentales en esta ciencia.</p>
<p>Algunos ejemplos de la vida real:  ¿Cómo hace Skype para transmisir audio y video en tiempo real por internet? <em>Utilizan algoritmos de compresión de audio y video en ambos extremos de la comunicación!</em></p>
<h2 id="un-algoritmo-para-salir-de-un-laberinto" tabindex="-1">Un algoritmo para salir de un laberinto <a class="anchor-link" href="#un-algoritmo-para-salir-de-un-laberinto"></a></h2>
<p>Pensemos en un juego, la idea es salir de un laberinto (uno no muy complicado) en la menor cantidad de pasos posibles. Veamos el siguiente laberinto y pensemos como escapar:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token constant">XXXXX</span> <span class="token constant">XX</span><br><span class="token constant">X</span>      <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">XXXX</span> <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">XOX</span>  <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span><br><span class="token constant">X</span>      <span class="token constant">X</span><br><span class="token constant">XXXXXXXX</span></code></pre>
<p>Las X representan paredes que no se pueden atravesar, y la O el personaje que quiere escapar del laberinto. La salida se encuentra en la pared de arriba. El personaje solo se puede mover en linea recta, no en diagonal.</p>
<p>Como podriamos diseñar un algoritmo que nos permita calcular la menor distancia para salir del laberinto?<br>
Pensemos esta solución:</p>
<ol>
<li>Empezemos desde el casillero de salida y lo marquemos con el número cero.</li>
<li>Busquemos todos los casilleros que estén a un movimiento de la salida y lo marquemos como uno.</li>
<li>Ahora a los que están a dos movimientos.</li>
<li>Y así sucesivamente a los que estén a n+1 movimientos, hasta que hayamos completado todo el tablero.</li>
</ol>
<pre class="language-js"><code class="hljs language-js"><span class="token constant">XXXXX</span> <span class="token constant">XX</span>  <span class="token constant">XXXXX0XX</span>  <span class="token constant">XXXXX0XX</span>  <span class="token constant">XXXXX0XX</span><br><span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>    <span class="token number">1</span> <span class="token constant">X</span>  <span class="token constant">X</span>   212X<br><span class="token constant">X</span> <span class="token constant">XXXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XXXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XXXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XXXX</span> <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">XOXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XOXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XOXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XOXX</span> <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span><br><span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span><br><span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span><br><span class="token constant">XXXXXXXX</span>  <span class="token constant">XXXXXXXX</span>  <span class="token constant">XXXXXXXX</span>  <span class="token constant">XXXXXXXX</span></code></pre>
<pre class="language-js"><code class="hljs language-js"><span class="token constant">XXXXX0XX</span>  <span class="token constant">XXXXX0XX</span>  <span class="token constant">XXXXX0XX</span>  <span class="token constant">XXXXX0XX</span><br><span class="token constant">X</span>  3212X  <span class="token constant">X</span> 43212X  <span class="token constant">X543212X</span>  <span class="token constant">X543212X</span><br><span class="token constant">X</span> <span class="token constant">XXXX3X</span>  <span class="token constant">X</span> <span class="token constant">XXXX3X</span>  <span class="token constant">X</span> <span class="token constant">XXXX3X</span>  <span class="token constant">X6XXXX3X</span><br><span class="token constant">X</span> <span class="token constant">XOXX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">XOXX4X</span>  <span class="token constant">X</span> <span class="token constant">XOXX4X</span>  <span class="token constant">X</span> <span class="token constant">XOXX4X</span><br><span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX</span> <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX5X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">XX5X</span><br><span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span>  <span class="token constant">X</span>  <span class="token constant">X</span> <span class="token constant">X</span> <span class="token constant">X</span> 6X<br><span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span>  <span class="token constant">X</span>      <span class="token constant">X</span><br><span class="token constant">XXXXXXXX</span>  <span class="token constant">XXXXXXXX</span>  <span class="token constant">XXXXXXXX</span>  <span class="token constant">XXXXXXXX</span></code></pre>
<pre class="language-js"><code class="hljs language-js"><span class="token constant">XXXXX0XX</span>  <br><span class="token constant">X543212X</span>  <br><span class="token constant">X6XXXX3X</span>  <br><span class="token constant">X7XOXX4X</span>  <br><span class="token constant">X8XCXX5X</span>  <br><span class="token constant">X9XBX76X</span>  <br><span class="token constant">XABA987X</span>  <br><span class="token constant">XXXXXXXX</span>  </code></pre>
<p>Ahora que tenemos un <em>mapa</em> del laberinto, tenemos que mejorar el algoritmo para que el personaje camine siguiendo el mapa:</p>
<ol>
<li>Desde el punto donde está el personaje, buscar el casillero adyacente con menor distancia.</li>
<li>Avanzar hacia ese casillero.</li>
<li>Repetir hasta llegar a la meta (distancia cero).</li>
</ol>
<p>Listo! hemos creado un algoritmo capaz que salir de un laberinto!</p>
<p><em>Le encuentran algún problema a cómo está definido el algortimo? Podría fallar en este ejemplo? Lo podrían implementar en javascript?</em></p>
<h2 id="%C2%BFqu%C3%A9-hace-bueno-a-un-algoritmo%3F" tabindex="-1">¿Qué hace bueno a un algoritmo? <a class="anchor-link" href="#%C2%BFqu%C3%A9-hace-bueno-a-un-algoritmo%3F"></a></h2>
<ol>
<li>Resuelve un problema: Este es el objetivo principal del algoritmo, fue diseñado para eso. Si no cumple el objetivo, no sirve para nada :S.</li>
<li>Debe ser comprensible: El mejor algoritmo del mundo no te va a servir si es demasiado complicado de implementar.</li>
<li>Hacerlo eficientemente: No sólo queremos tener la respuesta perfecta (o la más cercana), si no que también queremos que lo haga usando la menor cantidad de recursos posibles.</li>
</ol>
<p>De hecho estas dos condiciones a veces van en contra: encontrar la solución perfecta atenta contra el tiempo que va a tardar, y hacerlo rápido atenta contra la precisión de la respuesta. Vamos a tener que saber qué usamos en cada caso!</p>
<h3 id="%C2%BFc%C3%B3mo-medimos-la-eficienta-del-un-algoritmo%3F" tabindex="-1">¿Cómo medimos la eficienta del un algoritmo? <a class="anchor-link" href="#%C2%BFc%C3%B3mo-medimos-la-eficienta-del-un-algoritmo%3F"></a></h3>
<p>Lo más fácil y rápido de hacer es contar cuanto tiempo le lleva al algoritmo encontrar la respuesta que buscamos. Pero eso nos diría la eficiencia de ese algoritmo sólamente para la computadora que corrió , con los datos que tenia y en el lenguaje que se haya implementado, no?<br>
Entonces… como hacemos para <em>comparar</em> la eficiencia de distintos algoritmos?<br>
Para eso se hace un análisis conocido como <code>Asymptotic Analysis</code>, vamos a entender el concepto con un juego.</p>
<h4 id="adivinando-un-n%C3%BAmero" tabindex="-1">Adivinando un número <a class="anchor-link" href="#adivinando-un-n%C3%BAmero"></a></h4>
<p>Hagamos un pequeño juego para ver cómo distintos approachs a un mismo problema pueden tener distintas eficiencias, de hecho, para jugar vamos a crear un <em>algoritmo</em> mental que vamos a seguir hasta ganar el juego.</p>
<p>Vamos a elegir aleatoriamente un numero entre una lista de números del 1 a 16. La persona que adivine ese número en la menor cantidad de pasos será el ganador. En cada caso, el que conoce el número dirá si el número adivinado es mayor o menor que el objetivo.</p>
<p>Empezemos a jugar. Cada uno va a intentar adivinar y nos va a contar qué técnica utilizó para agrandar sus chances de ganar.</p>
<h4 id="b%C3%BAsqueda-linear" tabindex="-1">Búsqueda Linear <a class="anchor-link" href="#b%C3%BAsqueda-linear"></a></h4>
<p>Digamos que no queriamos pensar mucho, y decidimos atacar el problema con lo que se conoce como <strong>Fuerza Bruta</strong>, es decir, intentar de a una cada una de las soluciones posibles hasta dar con el resultado. En ese caso podríamos decidir empezar desde el 1 o el 16, e ir probando uno por uno hasta dar con el número. Ahora intentemos calcular de antemano cuantas veces tendríamos que adivinar para ganar, bueno dependiendo de nuestra suerte podriamos ganar en un paso (El número ganador es el 1 o el 16 y empezamos por ese extremo), o si la suerte no está de nuestro lado, el peor caso sería de 16 (el número es 1 o 16, pero empezamos por el extremo opuesto). Entonces podemos ganar el juego en una cantidad de veces que esté entre 1 y 16, no? De hecho si jugaramos muchas veces (como el que elige el número lo hace de forma aleatoria y están igualmente distribuidas las probabilidades) nos vamos a dar cuenta que <strong>en promedio</strong> vamos a ganar el juego en 8 veces.</p>
<p>Ahora, como podriamos hacer para bajar la cantidad de veces que en promedio necesitamos? Bueno, como el que sabe el número nos dice si el número que elegimos es mayor o menor, podemos hacer uso de eso para optimizar nuestro juego. Tenemos que pensar lo siguiente: ¿Qué número tengo que elegir para obligar al que sabe el número a que descarte la mayor cantidad de números <strong>EN PROMEDIO</strong>?  Si pensamos en el número mas cercano al medio, estamos en lo correcto. Al quedar la mayor cantidad de número a la derecha y a la izquierda del número central, aprovecharemos al máximo la información que nos da el que sabe el número.<br>
Ahora pensemos el mejor y el peor caso. De nuevo, si tenemos mucha suerte, y el número ganador es el central, vamos a ganar en una sólo jugada!<br>
Ahora, en el peor de los casos vamos a ir dividiendo la lista en dos, hasta qué sólo quede un sólo número: el ganador!<br>
Por ejemplo:</p>
<p>Aleatoriamente el número que salió es el <strong>9</strong></p>
<pre class="language-js"><code class="hljs language-js"><span class="token number">1</span><span class="token operator">-</span><span class="token number">2</span><span class="token operator">-</span><span class="token number">3</span><span class="token operator">-</span><span class="token number">4</span><span class="token operator">-</span><span class="token number">5</span><span class="token operator">-</span><span class="token number">6</span><span class="token operator">-</span><span class="token number">7</span><span class="token operator">-</span><span class="token number">8</span><span class="token operator">-</span><span class="token number">9</span><span class="token operator">-</span><span class="token number">10</span> <span class="token operator">&lt;</span><span class="token operator">-</span> elegimos el <span class="token number">5</span>  <span class="token operator">/</span> <span class="token number">10</span> posibilidades<br><br><span class="token operator">~</span><span class="token operator">~</span><span class="token number">1</span><span class="token operator">-</span><span class="token number">2</span><span class="token operator">-</span><span class="token number">3</span><span class="token operator">-</span><span class="token number">4</span><span class="token operator">-</span><span class="token number">5</span><span class="token operator">-</span><span class="token operator">~</span><span class="token operator">~</span><span class="token number">6</span><span class="token operator">-</span><span class="token number">7</span><span class="token operator">-</span><span class="token number">8</span><span class="token operator">-</span><span class="token number">9</span><span class="token operator">-</span><span class="token number">10</span> <span class="token operator">&lt;</span><span class="token operator">-</span> elegimos el <span class="token number">8</span>  <span class="token operator">/</span> <span class="token number">5</span> posibilidades<br><br><span class="token operator">~</span><span class="token operator">~</span><span class="token number">1</span><span class="token operator">-</span><span class="token number">2</span><span class="token operator">-</span><span class="token number">3</span><span class="token operator">-</span><span class="token number">4</span><span class="token operator">-</span><span class="token number">5</span><span class="token operator">-</span><span class="token number">6</span><span class="token operator">-</span><span class="token number">7</span><span class="token operator">-</span><span class="token number">8</span><span class="token operator">~</span><span class="token operator">~</span><span class="token operator">-</span><span class="token number">9</span><span class="token operator">-</span><span class="token number">10</span> <span class="token operator">&lt;</span><span class="token operator">-</span> elegimos el <span class="token number">10</span> <span class="token operator">/</span> <span class="token number">2</span> posibilidades<br><br><span class="token operator">~</span><span class="token operator">~</span><span class="token number">1</span><span class="token operator">-</span><span class="token number">2</span><span class="token operator">-</span><span class="token number">3</span><span class="token operator">-</span><span class="token number">4</span><span class="token operator">-</span><span class="token number">5</span><span class="token operator">-</span><span class="token number">6</span><span class="token operator">-</span><span class="token number">7</span><span class="token operator">-</span><span class="token number">8</span><span class="token operator">-</span><span class="token operator">~</span><span class="token operator">~</span><span class="token number">9</span><span class="token operator">~</span><span class="token operator">~</span><span class="token operator">-</span><span class="token number">10</span><span class="token operator">~</span><span class="token operator">~</span> <span class="token operator">&lt;</span><span class="token operator">-</span> El número era el <span class="token number">9</span><span class="token operator">!</span> <span class="token operator">/</span> <span class="token number">1</span> posibilidad</code></pre>
<p>En cada paso vamos a ir dividiendo la lista en dos, hasta que nos quedamos con una lista de sólo un número, en tal caso estamos seguros que es el número ganador. Para averiguar la cantidad máxima de pasos necesario vamos a necesitar un poco de matemáticas:</p>
<p>Sabemos que el número máximo de veces que vamos a necesitar sale de la cantidad de veces que podemos dividir la lista en dos hasta que el resultado sea uno, no? Lo podemos escribir en forma matemática así:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token number">1</span> <span class="token operator">=</span> <span class="token constant">N</span> <span class="token operator">/</span> 2x <span class="token comment">// N es el largo de la lista y x el número que buscamos</span></code></pre>
<p>Para despejar la potencia usamos logaritmo:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token function">log2</span><span class="token punctuation">(</span>2x<span class="token punctuation">)</span>    <span class="token operator">=</span> log2 <span class="token constant">N</span><br>x <span class="token operator">*</span> <span class="token function">log2</span><span class="token punctuation">(</span><span class="token number">2</span><span class="token punctuation">)</span> <span class="token operator">=</span> log2 <span class="token constant">N</span><br>x <span class="token operator">*</span> <span class="token number">1</span>         <span class="token operator">=</span> log2 <span class="token constant">N</span></code></pre>
<p>Por lo tanto, el número que necesitamos es el log en base dos de N, como N era 16 en nuestro ejemplo, el número máximo de pasos será de 4.</p>
<p>Al ser 1 y 4 los casos extremos <strong>en promedio</strong> vamos a necesitar tan sólo de dos jugadas hasta adivinar el número. Sorprendente, no? Pasamos de necesitar 8 pasos en promedio a dos! Eso es eficiencia!</p>
<p>Este algoritmo de búsqueda se conoce como <strong>Binary Seach</strong> y se dice que tiene una complejidad de logaritmo de N, en cambio la fuerza bruta tiene complejidad N.</p>
<p><strong>¿Cuantos pasos cómo máximo necesitan para encontrar un número en una lista de 300 números? ¿Y en una de 1000?</strong></p>
<h3 id="complejidad-de-un-algoritmo" tabindex="-1">Complejidad de un algoritmo <a class="anchor-link" href="#complejidad-de-un-algoritmo"></a></h3>
<p>En general nos interesa conocer qué tan <em>complejos</em> son los algoritmos, o en realidad, lo contrario: que tan <strong>eficiente</strong> es un algoritmo.<br>
Hay muchos aspectos que afectan la complejidad de un algoritmo:</p>
<ul>
<li>Tiempo</li>
<li>Espacio</li>
<li>Otros recursos:
<ul>
<li>Red</li>
<li>Gráficos</li>
<li>Hardware (Impresoras, Cpus, Sensores, etc…)</li>
</ul>
</li>
</ul>
<p>La mas común, y en la que nos vamos a concentrar mayormento es la complejidad de tiempo, es decir la <em>velocidad</em> algoritmo, o cuanto tarda en correr. Otro tipo de complejidad importante es el espacio, o sea la cantidad de memoria (RAM o disco) que necesitamos para poder corer un algoritmo. De hecho, a veces cambiamos la complejidad de tiempo por la de memoria, un algoritmo va a consumir más espacio en memoria, pero va a correr más rápido (Hash tables!).<br>
Otros algoritmos pueden requerir otros recursos, como por ejemplo algún algoritmo que se ejecute distribuido por la red, en ese caso el algoritmo se verá limitado por la velocidad y tamaño de la misma. Otro usarán otros tipos de recursos.</p>
<h3 id="circunstancias" tabindex="-1">Circunstancias <a class="anchor-link" href="#circunstancias"></a></h3>
<p>Como nos podemos imaginar, un mismo algoritmo puede tardar mucho o poco según el caso y los datos que se usan como input. Por ejemplo, un algoritmo para ordenar puede tardar muy poco si los datos que tienen que ordernar ya vienen ordenados! O puede tardar muchísimo si vienen ordenado en el orden inverso del que queremos, por ejemplo.<br>
Entonces, para cada algoritmo podemos considerar su complejidad en las siguientes circunstancias:</p>
<ul>
<li>Todos los casos</li>
<li>Mejor Caso</li>
<li>Caso Promedio</li>
<li>Peor Caso   &lt;- Si no tenemos idea de como pueden venir los datos, debemos ver este caso.</li>
<li>Caso Esperado  &lt;- Si conocemos el dominio del problema y sabemos con algún grado de certeza como van a venir los datos, nos concentramos en este caso.</li>
</ul>
<p>Ahora… ¿Por qué nos importa medir la complejidad de los algoritmos? Básicamente nos va a servir a:</p>
<ol>
<li>Predecir el comportamiento: hay casos donde algo puede tardar tanto que no tenemos el lujo del prueba y error, tenemos que conocer de antemano si un algoritmo va a terminar en un tiempo adecuado para el problema.</li>
<li>Compararlos: Según el problema vamos a tener que decidir cuál es el mejor algoritmo para usar, tampoco podemos ponernos a probar uno por uno.</li>
</ol>
<h3 id="cota-superior-asint%C3%B3tica-(-big-o-notation-%2F-notaci%C3%B3n-o-grande-)" tabindex="-1">Cota superior asintótica ( Big O Notation / Notación O grande ) <a class="anchor-link" href="#cota-superior-asint%C3%B3tica-(-big-o-notation-%2F-notaci%C3%B3n-o-grande-)"></a></h3>
<p>Vamos a usar una función que sirve de cota superior  de otra función cuando el argumento tiende a infinito.</p>
<p><img src="../_src/assets/07-Algoritmos-I/asintotica.png" alt="asintotica"></p>
<p>Una función f(x) pertenece a O(g(x)) cuando existe una constante positiva c tal que a partir de un valor x0, f(x) no sobrepasa a cg(x). Quiere decir que la función f es inferior a g a partir de un valor dado salvo por un factor constante.</p>
<p><img src="../_src/assets/07-Algoritmos-I/chemestrydog.jpg" alt="ChemestryDog"></p>
<p>No se preocupen! es mucho más simple que eso. La notación <em>O grande</em> intenta analizar la complejidad de los algoritmos según crece el número de entradas ( <em>n</em> ) que tiene que analizar, en general es el tamaño del dataset que usa como entrada. Y lo que busca es una función que crezca de una forma con respecto a <em>n</em> ( # de entradas ) tal que nuestro algoritmo nunca crezca más rápido que esa función, aunque si puede crecer más lento. Básicamente, estamos buscando algo para poder decir: mirá este algoritmo nunca va a tardar más que esto, capaz tarda menos, pero más no.<br>
Esto nos va a servir mucho, porque vamos a poder decidir si un algoritmo es bueno o no en función de la cantidad de datos que vamos a analizar, por ejemplo: si tuvieramos que ordenar dos números, seguramente cualquier algoritmo que usemos lo va terminar en un par de milisegundos, si tenemos que ordenar 10 o 100 tambien… pero si tenemos que ordernar 1.000.000 de números ya cambia la cosa, habrá algoritmos que los ordenen en segundos y otros que pueden llegar a tardar horas! En fin, según el problema vamos a poder decidir que necesitamos.</p>
<h4 id="c%C3%B3mo-calculamos-la-o-grande-de-un-algoritmo%3F" tabindex="-1">Cómo calculamos la O grande de un algoritmo? <a class="anchor-link" href="#c%C3%B3mo-calculamos-la-o-grande-de-un-algoritmo%3F"></a></h4>
<p>Sigamos esta lista de pasos para entender rápidamente cuál es la función superior o sea la O() de un algoritmo:</p>
<ol>
<li>Si un algoritmo hace f(n) pasos para encontrar el resultado, entonces decimos que ese algoritmo es O( f(n) ).</li>
<li>Si un algoritmo hace f(n) pasos seguido por g(n), entonces es O( f(n) + g(n) ).</li>
<li>Si f(n) &gt; g(n), podes simplificar diciendo que O( f(n) + f(n) ) = O( f(n) ).( también podes obviar constantes)</li>
<li>Si el algoritmo hace g(n) pasos por cada f(n) pasos, entonces este algoritmo es O( f(n) x g(n)).</li>
<li>Ignorar constantes multiples: O( Cxf(n) ) = O( f(Cxn) ) = O( f(n) )</li>
</ol>
<h5>Ejemplos</h5>
<p>Regla tres: Si una función es más grande que la otra podés <em>‘redondear’</em> y tomar la función más grande. Miren este caso:</p>
<p><img src="../_src/assets/07-Algoritmos-I/nnn.png" alt="nnn"></p>
<p>Fijensé cúan importante es N cuando el tamaño crece (que es justamente el caso que nos interesa).</p>
<p>Encontrar un máximo en un arreglo:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token keyword">var</span> max <span class="token operator">=</span> array<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">var</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;=</span> array<span class="token punctuation">.</span>length<span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">if</span><span class="token punctuation">(</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span> <span class="token operator">></span> max<span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  max <span class="token operator">=</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>max<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token comment">// O ( N ) </span></code></pre>
<p>Máximo y Mínimo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> max <span class="token operator">=</span> array<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">var</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;=</span> array<span class="token punctuation">.</span>length<span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">if</span><span class="token punctuation">(</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span> <span class="token operator">></span> max<span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  max <span class="token operator">=</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br><span class="token keyword">var</span> min <span class="token operator">=</span> array<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">var</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;=</span> array<span class="token punctuation">.</span>length<span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">if</span><span class="token punctuation">(</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span> <span class="token operator">&lt;</span> max<span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  min <span class="token operator">=</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>max<span class="token punctuation">)</span><span class="token punctuation">;</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>min<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span> <span class="token comment">// O( N + N) = O(2N)</span></code></pre>
<p>Mejorando un algoritmo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> max <span class="token operator">=</span> array<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br><span class="token keyword">var</span> min <span class="token operator">=</span> array<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">var</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;=</span> array<span class="token punctuation">.</span>length<span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">if</span><span class="token punctuation">(</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span> <span class="token operator">></span> max<span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  max <span class="token operator">=</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><br> <span class="token keyword">if</span><span class="token punctuation">(</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span> <span class="token operator">&lt;</span> min<span class="token punctuation">)</span><span class="token punctuation">{</span><br>  min <span class="token operator">=</span> array<span class="token punctuation">[</span>i<span class="token punctuation">]</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>max<span class="token punctuation">)</span><span class="token punctuation">;</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>min<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span> <span class="token comment">// O( N ) = O(N)</span></code></pre>
<p>Buscar elementos iguales en un arreglo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">var</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;=</span> array<span class="token punctuation">.</span>length<span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">var</span> j <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> j <span class="token operator">&lt;=</span> array<span class="token punctuation">.</span>length<span class="token punctuation">;</span> j<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>   <span class="token keyword">if</span><span class="token punctuation">(</span>array<span class="token punctuation">[</span>i<span class="token punctuation">]</span> <span class="token operator">===</span> array<span class="token punctuation">[</span>j<span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>    <span class="token keyword">return</span> <span class="token boolean">true</span><span class="token punctuation">;</span><br>   <span class="token punctuation">}</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span><span class="token comment">// O( N x N) = O (n²)</span></code></pre>
<h4 id="ejemplos-de-funciones-t%C3%ADpicas" tabindex="-1">Ejemplos de Funciones Típicas <a class="anchor-link" href="#ejemplos-de-funciones-t%C3%ADpicas"></a></h4>
<h5>O(1)</h5>
<p>Una operación simple es O(1), o sea que siempre tarda lo mismo.<br>
Por ejemplo</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> max <span class="token operator">=</span> <span class="token number">10</span><span class="token punctuation">;</span></code></pre>
<p>Ojo, no importa si tuviesen un millón de declaraciones de variables, como siempre tarda lo mismo en correr el algoritmo sigue siendo O(1). No importa que tarde más cuando haya más declaraciones, importa que no tarde más para mayor cantidad de entradas.</p>
<h5>O(n)</h5>
<p>Generalmente hace una acción por cada entrada.</p>
<p>Ej:</p>
<pre class="language-javascript"><code class="hljs language-javascript">array<span class="token punctuation">.</span><span class="token function">forEach</span><span class="token punctuation">(</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">elem</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>elem <span class="token operator">*</span> <span class="token number">2</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span></code></pre>
<h5>O(n²)</h5>
<p>Para por cada entrada, recorre todas las entradas de nuevo.</p>
<p>Ej:</p>
<pre class="language-javascript"><code class="hljs language-javascript">array<span class="token punctuation">.</span><span class="token function">forEach</span><span class="token punctuation">(</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">elem</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> array<span class="token punctuation">.</span><span class="token function">forEach</span><span class="token punctuation">(</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">elemdos</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>elem <span class="token operator">*</span> elemdos<span class="token punctuation">)</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><span class="token punctuation">)</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span></code></pre>
<h5>O(nc) N elevado a la c</h5>
<p>Es el concepto general del anterior, por cada entrada el algoritmo recorre todas las demás entradas c veces.</p>
<h5>Otros O</h5>
<p>Tambien podemos encontrar algoritmo que sean O de la raiz de N, ó O de N elevado a un medio.</p>
<h5>O ( log N )</h5>
<p>Es el caso del juego de búsqueda que hicimos! se aplica en problemas donde en cada paso tenemos que recorrer la mitad de las entradas que quedan.</p>
<h5>O ( N! ) El horror, hermano</h5>
<p><img src="../_src/assets/07-Algoritmos-I/cat.jpg" alt="cat"></p>
<p>N factorial, quiere decir: N <em>N-1</em> N-2 <em>N-3</em> … * 1 .<br>
Por ejemplo: 4! = 4*3*2*1 = 24</p>
<p>Esta complejidad en general aparece en algoritmos que acomodan items, porque hay n! formas de acomodar N items.<br>
Por ejemplo, si tengo los número 1,2 y 3. Puede haber 3! combinaciones distintas:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">3</span><span class="token punctuation">)</span><br><span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">3</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">)</span><br><span class="token punctuation">(</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">3</span><span class="token punctuation">)</span><br><span class="token punctuation">(</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">3</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">)</span><br><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">)</span><br><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">)</span></code></pre>
<h4 id="comparaci%C3%B3n-gr%C3%A1fica" tabindex="-1">Comparación Gráfica <a class="anchor-link" href="#comparaci%C3%B3n-gr%C3%A1fica"></a></h4>
<p><img src="../_src/assets/07-Algoritmos-I/bigo.png" alt="Big-o"></p>
<p>En la imagen de arriba podemos ver una comparación gráfica de las distintas complejidades de los algoritmos.</p>
<p>Si tuvieramos una compu es capaz de ejecutar 1.000.000 instrucciones por segundo (un poco optimista para las compus de hoy) , veamos cuanto tiempo tardarían algoritmos de distinta complejidad  en terminar de correr con un N de entrada de 1000.</p>
<p><img src="../_src/assets/07-Algoritmos-I/tablatiempo.png" alt="tablaTiempo"></p>
<p>Sorprendente, no? Miren <a href="https://es.wikipedia.org/wiki/Torres_de_Han%C3%B3i#Historia">esto</a></p>
<p>Ahora pensemos el problema al reves. ¿Qué cantidad de datos podría procesar cada algoritmo en un segundo?:</p>
<p><img src="../_src/assets/07-Algoritmos-I/tablasegundo.png" alt="tablaSegundo"></p>
<p>Al primero podemos tirarle la cantidad de datos que quisieramos! (de hecho tendriamos un problema de memoria, más que de tiempo).<br>
A los últimos los vamos a poder usar sólamente con entradas que sean muy pequeñas… si no, vamos a tener que esperar mucho tiempo…</p>
<h3 id="problemas-p-y-np" tabindex="-1">Problemas P y NP <a class="anchor-link" href="#problemas-p-y-np"></a></h3>
<p><strong>P - Tiempo polinómico</strong>: Si la cantidad de operaciones que necesita un algoritmo para terminar es un polinomio (no importa si es muy grande), decimos que el algoritmo termina en tiempo polinómico. Además, si para llegar al resultado realiza una cierta cantidad de pasos, y siempre va a realizar los mismos, podemos decir que el algoritmo es <strong>deterministico</strong>. Esto es bueno, quiere decir que podemos calcular cuanto va a tardar a priori.</p>
<p><strong>NP - Tiempo polinómico no deterministico</strong>: Estos algoritmos, no son <em>deterministicos</em>, esto se debe a que encontrar la solución real nos puede llegar a tomar <em>muchísimo</em> timepo! Entonces para resolverlos, lo que hacemos es ir probando algunas soluciones, o descartando las soluciones que sabemos que no son soluciones.<br>
A este lo vamos a entender con un ejemplo:<br>
Imaginen que nos dan un set de número y nos preguntan si algún subset del set suma 0:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token punctuation">{</span><span class="token operator">-</span><span class="token number">10</span><span class="token punctuation">,</span> <span class="token number">60</span><span class="token punctuation">,</span> <span class="token number">95</span><span class="token punctuation">,</span> <span class="token number">25</span><span class="token punctuation">,</span> <span class="token operator">-</span><span class="token number">70</span><span class="token punctuation">,</span> <span class="token operator">-</span><span class="token number">50</span><span class="token punctuation">}</span><br>solucion <span class="token number">1</span><span class="token operator">:</span> <span class="token operator">-</span><span class="token number">10</span> <span class="token operator">+</span> <span class="token operator">-</span><span class="token number">50</span> <span class="token operator">+</span> <span class="token number">60</span> <span class="token operator">=</span> <span class="token number">0</span></code></pre>
<p>En este caso, fue fácil descubrir un subset, pero si el set hubiese sido más grande nos hubiese costado mucho poder afirmar que existe o no un subset que sume cero, de hecho la complejidad de este algoritmo seria de O(2n). Lo importante es que podemos determinar si una solución es correcta o no usando de forma <em>determinítica</em> (haciendo la suma), por lo tanto podriamos crear un algoritmo no determinístico, que eliga al azar una seria de números y los sume para ver si dan cero. De esta forma, podríamos encontrar <em>algunas</em> soluciones, pero nunca vamos a estar seguros de haber encontrado <strong>todas</strong>.</p>
<p>Ahora, piensen que en algún momento alguien puede descubrir (o inventar ) un algoritmo que resuelta este problema en tiempo deterministico, de ahí viene la pregunta filosofica que se hacen los matemáticos computacionales:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token constant">P</span> <span class="token operator">=</span> <span class="token constant">NP</span> <span class="token operator">?</span></code></pre>
<h2 id="algoritmos-de-b%C3%BAsqueda" tabindex="-1">Algoritmos de búsqueda <a class="anchor-link" href="#algoritmos-de-b%C3%BAsqueda"></a></h2>
<p>Buscar algo en un conjunto de cosas es una tarea con la que nos encontramos todo el tiempo cuando progamamos, por lo tanto, no nos sorprende que los algoritmos más usados (y por lo tanto más estudiados ) son los algoritmos de búsqueda. Es importante conocer estos algoritmos ya que para crearlos se usarón técnicas que también nos van a servir para resolver otro problemas y también vemos como aprovechan ciertas estructuras de datos.</p>
<p>También nos sirve conocer varios métodos de algoritmos, ya que cada uno se comporta distinto según tenga que ordenar números, textos u objetos. También cambia el comportamiento según la naturaleza del conjunto a ordenar, ya que este puede venir parcialmente ordenado, bastante ordenado, o capaz ordenado de una manera totalmente aleatoria; esto puede afectar mucho el tiempo de ejecución de algunos algoritmos.</p>
<p>Veamos algunos algoritmos:</p>
<h3 id="insertionsort" tabindex="-1">InsertionSort <a class="anchor-link" href="#insertionsort"></a></h3>
<p>Este es tal vez uno de los más simples, y consiste básicamente en extraer el elemento del conjunto y agregarlo en la posición que le corresponde según el ordenamiento que estemos usando. Para hacerlo el algoritmo tiene que ir viendo cada uno de los elementos que ya están y compararlo con el extraido, hasta encontrar la posición que corresponde.</p>
<p><img src="../_src/assets/07-Algoritmos-I/insertion.gif" alt="insertionSort"></p>
<p>Siendo así, y analizando el peor caso (sería que cada elemento que saquemos vaya al final de la lista): para el primero necesitariamos N pasos, para el segundo N-1, para el tercero N-2 y así sucesivamente. Esto es una suma triangular, y se puede demostrar que el resultado es <code>n * (n+1) /2</code></p>
<pre class="language-js"><code class="hljs language-js">       n<span class="token operator">+</span><span class="token number">1</span><br>#   <span class="token operator">|</span> #     ###   ####<br>##  <span class="token operator">|</span> ##  <span class="token operator">+</span>  ## <span class="token operator">=</span> #### n  <span class="token comment">// La cantidad de puntos es n * (n+1)</span><br>### <span class="token operator">|</span> ###     #   ####    <span class="token comment">// Y los que teniamos al comienzo es la mitad de eso</span></code></pre>
<p>O sea que para el peor caso este algoritmo tiene una complejidad de <code>O(n²)</code>. Y en el mejor de los casos, donde ya estaban ordenados los elementos, tiene que recorrer todos los elementos una vez, por lo tanto en el mejor caso tiene complejidad <code>O(n)</code>.</p>
<p><img src="../_src/assets/07-Algoritmos-I/insertionbest.gif" alt="insertionBest"></p>
<p>O sea este algoritmo nos puede servir en el caso que sepamos que los datos pueden venir <em>casi</em> ordenados!</p>
<h3 id="selection-sort" tabindex="-1">Selection Sort <a class="anchor-link" href="#selection-sort"></a></h3>
<p>Selection Sort intenta ordenar por posición, es decir empieza en la posicion mínima y busca el elemento que corresponde a ese lugar. Básicamente, empieza buscando el primer mínimo (si ordenamos en forma creciente ) y lo pone en la primera posición, luego para la segunda posición vuelve a buscar el mínimo pero dentro de los elementos que quedan, así sucesivamente hasta que no quedan elementos por ordenar.</p>
<p><img src="../_src/assets/07-Algoritmos-I/selection.gif" alt="selectionSort"></p>
<p>O sea que para cada elemento de la lista, tenemos que recorrer n-1 elementos restantes. Por lo tanto, la primera vez vamos a recorrer <code>n</code> elementos, la segunda vez <code>n-1</code> y así. O sea que estamos en un caso muy parecido al insertionSort; o sea que la complejidad de Selection Sort es también <code>O( n )</code>. Este algoritmo es independiente de cómo vengan ordenado los datos, ya que siempre tiene que recorrer los mismos elementos. Lo bueno de este algoritmo, además de ser muy simple y fácil de implementar, es que no necesita mucha memoria para correr.</p>
<h3 id="bubblesort" tabindex="-1">BubbleSort <a class="anchor-link" href="#bubblesort"></a></h3>
<p>Este algoritmo es muy simple:</p>
<ol>
<li>Recorré los elementos: si dos items adyacentes estan desordenados, hacé un swap.</li>
<li>Si terminas un recorrido sin hacer un swap, ya está ordenado.</li>
</ol>
<p><img src="../_src/assets/07-Algoritmos-I/bubblesort.gif" alt="BubbleSort"></p>
<p>Como verán la perfomance cambia drásticamente según el orden original de los datos. De hecho, en el mejor caso, el algoritmo terminá en <code>O (n)</code>. Aunque si estuvieran en el orden inverso, va a tener que recorrer el arreglo n veces por cada elemento, llegando así a tener una complejidad <code>O(N²)</code>. Es bueno conocerlo, ya que nos puede servir en casos donde los datos no vienen tan desordenados, ya que este algoritmo los ordenará más rápidos que los demás.</p>
<h2 id="homework" tabindex="-1">Homework <a class="anchor-link" href="#homework"></a></h2>
<p>Completa la tarea descrita en el archivo <a href="https://github.com/soyHenry/FT-M1/blob/master/07-Algoritmos-I/homework/README.md">README</a></p>

        </div>

      </main>

      
        <div class="feedback">
          <a href='https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=06-Algoritmos-I' target="_blank">
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