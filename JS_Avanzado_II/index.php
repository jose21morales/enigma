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
    <title>JavaScript Avanzado II | Módulo 1 - JavaScript</title>
    

    

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
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">JS Avanzado II</span>
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

        <div class='sidebar'>
          <div class="tocTitle">
            Contenido de la clase
            </div>
          <div class="tocBox">
            
            <nav class="toc" >
        <ul><li><a href="#closures">Closures </a><ul><li><a href="#ejemplo-closures">Ejemplo Closures </a></li><li><a href="#function-factory">Function Factory </a></li><li><a href="#closures-and-callbacks">Closures and Callbacks </a></li></ul></li><li><a href="#call%2C-apply-and-bind">Call, Apply and Bind </a></li><li><a href="#homework">Homework </a></li></ul>
      </nav>
          </div>
        </div>

        <div class='rightBox'>
          <div class="readingTime">
                    Tiempo de lectura 21 min
          </div>
          
            <div class='quizzBox'>
              <a href='https://quiz.soyhenry.com/evaluation/new/60662c1a656c8d23c2e60e66' target='blank'>Quizz 📚</a>
            </div>
          

          
            <div class='homeworkBox'>
              <a href=https://github.com/soyHenry/FT-M1/tree/master/03-JavaScriptAvanzado-II/homework target='blank'>Homework 📝</a>
            </div>
          
        </div>

        <div class='lesson'>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<table class="hide" width="100%" style='table-layout:fixed;'>
  <tr>
    <td>
      <a href="https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=02-JavaScriptAvanzado-II">
      <img src="https://static.thenounproject.com/png/204643-200.png" width="100"/>
      <br>
      Hacé click acá para dejar tu feedback sobre esta clase.
      </a>
    </td>
      <td>
      <a href="https://quiz.soyhenry.com/evaluation/new/60662c1a656c8d23c2e60e66">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/HSQuiz.svg/768px-HSQuiz.svg.png" width="100" height="100"/>
        <br>
        Hacé click acá completar el quizz teórico de esta lecture.
      </a>
  </td>
  </tr>
</table>
<h1 id="javascript" tabindex="-1">JavaScript <a class="anchor-link" href="#javascript"></a></h1>
<h4 id="avanzado-ii" tabindex="-1">Avanzado II <a class="anchor-link" href="#avanzado-ii"></a></h4>
<h2 id="closures" tabindex="-1">Closures <a class="anchor-link" href="#closures"></a></h2>
<p>Otro tema importante en JavaScript es <code>closures</code>. Veamos a que se refieren con un ejemplo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">saludar</span><span class="token punctuation">(</span> <span class="token parameter">saludo</span> <span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">return</span> <span class="token keyword">function</span><span class="token punctuation">(</span> <span class="token parameter">nombre</span> <span class="token punctuation">)</span><span class="token punctuation">{</span><br>    console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>saludo <span class="token operator">+</span> <span class="token string">' '</span> <span class="token operator">+</span> nombre<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> saludarHola <span class="token operator">=</span> <span class="token function">saludar</span><span class="token punctuation">(</span><span class="token string">'Hola'</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// Esto devuelve una función</span><br><br><span class="token function">saludarHola</span><span class="token punctuation">(</span><span class="token string">'Toni'</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 'Hola Toni'</span></code></pre>
<p>Veamos paso a paso lo que va a ocurrir cuando ejecutemos este código. Primero se creará el <code>contexto de ejecución global</code>, en esta etapa el interprete guardará espacio para la declaración de la función <code>saludar</code>. Luego, cuando se encuentra con la invocación a la función <code>saludar</code>, va a crear un nuevo contexto, y como vemos dentro de ese contexto la variable saludo va a tomar el valor que le pasamos por parámetro:<code>'Hola'</code>. El stack quedaría cómo está representado en la primera parte de la figura de abajo.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/Closure.png" alt="Closure"></p>
<p>Luego de terminar de ejecutar y retornar una funcion (la que estamos guardando en <code>saludarHola</code>), ese contexto es <em>destruido</em>. Pero que pasa con la variable <code>saludo</code>?. Bueno, el interprete saca el contexto del stack, pero deja en algún lugar de memoria las variables que se usaron adentro (hay un  proceso dentro de JavaScript que se llama <code>garbage collection</code> que eventualmente las va limpiando si no las usamos. ). Por lo tanto, esa variable todavía va a estar en memoria (Segunda parte de la imagen).<br>
Por último ejecutamos la función <code>saludarHola</code> y pasamos como parámetro el string <code>'Hola'</code>. Por lo tanto se crea un nuevo contexto de ejecucción, con la variable mencionada. Ahora, cómo adentro de la función <code>saludarHola</code> hacemos referencia a la variable <code>saludo</code>, el interprete intenta buscarla en su scope; Cómo <code>saludo</code> <strong>no está definida en ese contexto</strong>, el interprete sale a buscarla siguiente la <code>scope chain</code> y a pesar que el contexto ya no existe, <strong>la referencia al ambiente exterior y a sus variables todavía existe</strong>, a este fenómeno es que le llamamos <em>CLOSURE</em>. En el ejemplo, el <em>closure</em> está definido por el rectángulo punteado de rojo. Las <em>closures</em> no son algo que se escriban, o qué se le indique al interprete, simplemente son una <em>feature</em> del lenguaje, simplemente ocurren. Nosotros no tenemos que pensar ni ocuparnos de mantener variables en memoria según el contexto de ejecucción en el que estemos, el interprete se encargará de esto siempre. Los <em>Closures</em> nos van a permitir armar algunos patrones interesantes.</p>
<h3 id="ejemplo-closures" tabindex="-1">Ejemplo Closures <a class="anchor-link" href="#ejemplo-closures"></a></h3>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">creaFuncion</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">var</span> arreglo <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br><br>  <span class="token keyword">for</span> <span class="token punctuation">(</span> <span class="token keyword">var</span> i<span class="token operator">=</span><span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;</span> <span class="token number">3</span><span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>    arreglo<span class="token punctuation">.</span><span class="token function">push</span><span class="token punctuation">(</span><br>      <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>        console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span><span class="token punctuation">;</span><br>      <span class="token punctuation">}</span><br>    <span class="token punctuation">)</span><br>  <span class="token punctuation">}</span><br>  <span class="token keyword">return</span> arreglo<span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> arr <span class="token operator">=</span> <span class="token function">creaFuncion</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><br>arr<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// 3 sale un 3, qué esperaban ustedes??</span><br>arr<span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">]</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// 3</span><br>arr<span class="token punctuation">[</span><span class="token number">2</span><span class="token punctuation">]</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// 3</span></code></pre>
<p>¿Porqué el console log da todos <code>3</code>?</p>
<p>Para entenderlo veamos cómo se van creando los contextos de ejecución y donde van quedando los objetos que creamos.<br>
En un primer momento se creará el contexto global, donde van estar definida la función <code>creaFuncion</code> y también el arreglo <code>arr</code>.</p>
<p>En un segundo momento, se va a crear el contexto de la función <code>creaFuncion</code> que fue ejecutada. Dentro de ella, se reserva espacio para un arreglo llamado <code>arreglo</code>, y para la variable <code>i</code>.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/closure2.png" alt="Closure dos"></p>
<p>Cuando el interprete llega a la línea del <code>return</code>, se <em>destruye</em> el contexto de ejecucción de <code>creaFuncion</code> y volvemos al contexto global. La siguiente ejecución que se produce es la de <code>arr[0]()</code>. Cabe notar que la variable <code>arr</code> <em>apunta</em> o <em>hace referencia</em> al arreglo <code>arreglo</code> que <em>vive</em> en el contexto de <code>creaFuncion</code>, esto sucede porque los arreglos son <em>objetos</em> y estos se pasan por referencia y no por valor. Como vemos, se crea el contexto de ejecución para esa función (<code>arr[0]</code>). Dentro de esta hay una referencia a la variable <code>i</code> , que también <em>vivia</em> en el contexto de <code>creaFuncion</code>, ya destruido. Como el interprete no encuentra otra variable <code>i</code> dentro del nuevo contexto, sale a buscarla en sus referencias y ,como sabemos, la va a encontrar en el <em>closure</em> que envuelve estas variables. Luego, ejecuta las siguientes funciones <code>arr[1]()</code> y <code>arr[2]()</code>, y en ambos casos sucede lo mismo. Justamente por eso, en cada console log, se imprimi el valor que tiene la variable <code>i</code>, que es <code>3</code> (el valor que quedó cuando se terminó el lazo dentro de <code>creaFuncion</code>).</p>
<p>Si quisieramos que cada función guardase el valor de <code>i</code>, deberíamos crear un <em>execution content</em> donde se cree una variable nueva en cada iteración. Para eso vamos a usar una <em>IIFE</em> a la cuál le vamos a pasar como parámetro <code>i</code>. Como estamos ejecutando la función, se va a a crear un contexto nuevo por cada ejecución, y por ende van a exisiter tres variables <code>j</code> (cada una en un contexto distinto) que contendrán los valores recibidos por parámetro (<em>1, 2 y 3</em>).</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">creaFuncion</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">var</span> arreglo <span class="token operator">=</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">;</span><br>  <span class="token keyword">for</span> <span class="token punctuation">(</span> <span class="token keyword">var</span> i<span class="token operator">=</span><span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;</span> <span class="token number">3</span><span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>    arreglo<span class="token punctuation">.</span><span class="token function">push</span><span class="token punctuation">(</span><br>      <span class="token punctuation">(</span><span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">j</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>        <span class="token keyword">return</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>j<span class="token punctuation">)</span><span class="token punctuation">;</span><span class="token punctuation">}</span><br>      <span class="token punctuation">}</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span><span class="token punctuation">)</span><br>    <span class="token punctuation">)</span><br>  <span class="token punctuation">}</span><br>  <span class="token keyword">return</span> arreglo<span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> arr <span class="token operator">=</span> <span class="token function">creaFuncion</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><br>arr<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// 1</span><br>arr<span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">]</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// 2</span><br>arr<span class="token punctuation">[</span><span class="token number">2</span><span class="token punctuation">]</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// 3</span></code></pre>
<h3 id="function-factory" tabindex="-1">Function Factory <a class="anchor-link" href="#function-factory"></a></h3>
<p>Vamos a ver un patrón para crear funciones, muy usado en el desarrollo de frameworks, y que existe gracias a los <em>closures</em>.</p>
<p>Veamos el siguiente código, primero definimos una función que va retornar otra función (esta sería nuestra <em>fábrica de funciones</em>), esta recibe como parámetro el lenguaje del saludo, y retorna una función que salude (console loguee) en el idioma recibido.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">hacerSaludo</span><span class="token punctuation">(</span> <span class="token parameter">lenguaje</span> <span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">return</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>    <span class="token keyword">if</span> <span class="token punctuation">(</span> lenguaje <span class="token operator">===</span> <span class="token string">'en'</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>      console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'Hi!'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>    <span class="token punctuation">}</span><br><br>    <span class="token keyword">if</span> <span class="token punctuation">(</span> lenguaje <span class="token operator">===</span> <span class="token string">'es'</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>      console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'Hola!'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>    <span class="token punctuation">}</span><br>  <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> saludoIngles <span class="token operator">=</span> <span class="token function">hacerSaludo</span><span class="token punctuation">(</span><span class="token string">'en'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token keyword">var</span> saludoEspaniol <span class="token operator">=</span> <span class="token function">hacerSaludo</span><span class="token punctuation">(</span><span class="token string">'es'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Si pensamos que ocurre cuando ejecutamos esas líneas, vamos a ver que se crearon dos closures. Uno para cada ejecución de la función <code>hacerSaludo</code>, en un closure la variable <code>lenguaje</code> contiene <code>es</code> y en el otro contiene <code>en</code>. Entonces, cuando invoquemos las funciones <code>saludoIngles</code> o <code>saludoEspaniol</code>, el intérprete va a salir a buscar la referencia a esa variable fuera del contexto de ejecución y la va a encontrar en el closure correspondiente.</p>
<p>O sea, que estamos usando el concepto de <strong>closure</strong> para setear un parámetro para que viva sólo dentro de una función, además nadie puede ingresar al valor de <code>lenguaje</code>, esto agrega un poco de seguridad a nuestro código.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/functionFactory.png" alt="FunctionFactory"></p>
<blockquote>
<p>Cada vez que invocamos una función se genera un execution context para esa ejecución. Si invocamos muchas veces la misma función ocurre lo mismo.</p>
</blockquote>
<h3 id="closures-and-callbacks" tabindex="-1">Closures and Callbacks <a class="anchor-link" href="#closures-and-callbacks"></a></h3>
<p>Ahora que sabemos lo que son los <em>closures</em>, si pensamos en todo lo que hicimos algunas vez con JavaScript, es muy probable que nos demos cuenta que ya lo veniamos usando (tal vez sin saberlo).</p>
<p>Por ejemplo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">saludarMasTarde</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">var</span> saludo <span class="token operator">=</span> <span class="token string">'Hola'</span><span class="token punctuation">;</span><br><br>  <span class="token function">setTimeout</span><span class="token punctuation">(</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>    console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>saludo<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">,</span><span class="token number">3000</span><span class="token punctuation">)</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span><br><br><span class="token function">saludarMasTarde</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>En el ejemplo de arriba, cuando inocamos a <code>saludarMasTarde</code> estamos creando un execution context, en el que invocamos a la función <code>setTimeout</code> y donde definimos la variable <code>saludo</code>. Ese execution context es destruido, pero <code>setTimeout</code> contiene una referencia a <code>saludo</code>. Closure, Maybe?<br>
Lo que realmente ocurre es que cuando pasan los tres segundos (esto lo hace algún componente externo al interprete), se lanza un evento diciendo que hay que ejecutar el callback, que es justamente una <code>function expression</code>. Entonces se crea un execution context para esa función, y dentro de ella se usa <code>saludo</code>, pero no está en ese contexto, entonces el interprete sale a buscarla afuera, y la encuentra en el <code>closure</code>!</p>
<p>O sea que se hicieron algo parecido a esto (tal vez usando eventos), entonces ya usaron <em>functions expressions</em> y muy probablemente <em>closures</em> tambien!</p>
<h2 id="call%2C-apply-and-bind" tabindex="-1">Call, Apply and Bind <a class="anchor-link" href="#call%2C-apply-and-bind"></a></h2>
<p>Cuando vimos el keyword <code>this</code>, dijimos que el interprete era el que manejaba el valor de este. Bueno, esto no es del todo cierto, hay una serie de variables que nos van a permitir poder setear nosotros el keyword <code>this</code>.</p>
<p>Como en JavaScript las funciones son un tipo objeto especial (vimos que tenian algunas propiedades especiales como <code>code</code> y <code>name</code>), estas también contienen métodos propios. Todas las funciones tienen acceso a los métodos:</p>
<ul>
<li>call()</li>
<li>bind()</li>
<li>apply()</li>
</ul>
<p>Justamente invocando estos métodos vamos a poder tener control sobre el keyword <code>this</code>. Veamos algunos ejemplos:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><br><span class="token keyword">var</span> persona <span class="token operator">=</span> <span class="token punctuation">{</span><br>  <span class="token literal-property property">nombre</span><span class="token operator">:</span> <span class="token string">'Franco'</span><span class="token punctuation">,</span><br>  <span class="token literal-property property">apellido</span><span class="token operator">:</span> <span class="token string">'Chequer'</span><span class="token punctuation">,</span><br><br>  <span class="token function-variable function">getNombre</span><span class="token operator">:</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>    <span class="token keyword">var</span> nombreCompleto <span class="token operator">=</span> <span class="token keyword">this</span><span class="token punctuation">.</span>nombre <span class="token operator">+</span> <span class="token string">' '</span> <span class="token operator">+</span> <span class="token keyword">this</span><span class="token punctuation">.</span>apellido<span class="token punctuation">;</span><br>    <span class="token keyword">return</span> nombreCompleto<span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> <span class="token function-variable function">logNombre</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">this</span><span class="token punctuation">.</span><span class="token function">getNombre</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span></code></pre>
<p>En este ejemplo, vamos a usar el keyword <code>this</code> para invocar el método del objeto persona. Como verán, el código de arriba produce un error, ya que cuando ejecutamos <code>logNombre()</code>, el <code>this</code> que está adentro hace referencia al objeto global, y ese objeto no tiene un método <code>getNombre</code>.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><br><span class="token keyword">var</span> logNombrePersona <span class="token operator">=</span> <span class="token function">logNombre</span><span class="token punctuation">.</span><span class="token function">bind</span><span class="token punctuation">(</span>persona<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token function">logNombrePersona</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>La función <code>bind()</code> devuelve una <strong>copia</strong> de la función, la cúal tiene internamente asociado el keyword <code>this</code> al objeto que le pasemos por parámtro. Si la llamamos sobre <code>logNombre</code> y le pasamos <code>persona</code> como argumento, vamos a ver que al ejecutar la <em>nueva</em> función <code>logNombrePersona()</code> se va a loguear correctamente el nombre de <code>persona</code>.</p>
<p>Si usamos <code>bind()</code> entonces la nueva función queda <strong>siempre</strong> ligada al objeto que pasamos cómo argumento. O sea que si quisieramos usarla para otro objeto, tendríamos que crear una nueva <em>copia</em> de la función y <em>bindiarle</em> un nuevo objeto.<br>
Si ese es el caso, podríamos usar <code>call()</code>, veamos cómo funciona:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token function">logNombre</span><span class="token punctuation">.</span><span class="token function">call</span><span class="token punctuation">(</span>persona<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>En este caso, estamos invocando la función original <code>logNombre</code>, pero con <code>call</code> le estamos indicando a qué objeto tiene que hacer referencia <code>this</code> dentro de esa función.</p>
<p>El primer argumento de <code>call</code> es el objeto a usar cómo <code>this</code>. Despues de este puedo pasar otros argumentos, que serán pasados a la función que estamos invocando. Por ejemplo, si nuestra función recibiera argumentos, usariamos <code>call</code> de la siguiente manera:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">logNombre</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">arg1<span class="token punctuation">,</span> arg2</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>arg1 <span class="token operator">+</span><span class="token string">' '</span><span class="token operator">+</span> <span class="token keyword">this</span><span class="token punctuation">.</span><span class="token function">getNombre</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">+</span><span class="token string">' '</span><span class="token operator">+</span> arg2<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token function">logNombre</span><span class="token punctuation">.</span><span class="token function">call</span><span class="token punctuation">(</span>persona<span class="token punctuation">,</span> <span class="token string">'Hola'</span><span class="token punctuation">,</span> <span class="token string">', Cómo estas?'</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">//Hola Franco Chequer , Cómo estas?</span></code></pre>
<p>De hecho, la función <code>apply</code> es casi igual a <code>call</code>, excepto que recibe los argumentos de distinta manera. <code>apply</code> necesita dos arguemntos, el primero es el objeto a bindear con <code>this</code> (igual que <code>call</code>) y el segundo parámetro es un arreglo, en este arreglo pasamos los argumentos que va a usar la función que invocamos. Por ejemplo, para obtener el mismo comportamiento que arriba, pero con <code>apply</code>:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">logNombre</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">arg1<span class="token punctuation">,</span> arg2</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>arg1 <span class="token operator">+</span><span class="token string">' '</span><span class="token operator">+</span> <span class="token keyword">this</span><span class="token punctuation">.</span><span class="token function">getNombre</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">+</span><span class="token string">' '</span><span class="token operator">+</span> arg2<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token function">logNombre</span><span class="token punctuation">.</span><span class="token function">apply</span><span class="token punctuation">(</span>persona<span class="token punctuation">,</span> <span class="token punctuation">[</span><span class="token string">'Hola'</span><span class="token punctuation">,</span> <span class="token string">', Cómo estas?'</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">//Hola Franco Chequer , Cómo estas?</span></code></pre>
<p>Un arreglo puede ser más fácil de pasar cuando no sabemos a priori cuantos argumentos le voy a pasar.</p>
<blockquote>
<p>Vamos a usar <code>call</code> o <code>apply</code> según nos convenga para resolver el problema que necesitemos.</p>
</blockquote>
<p>Vamos a usar estos métodos muchas veces cuando programemos, tal vez ahora no se imaginen un caso puntual, pero los habrá! se los aseguro!<br>
Veamos un simple ejemplo donde podríamos usarlos, esto se conoce cómo <strong>function borrowing</strong> (tomando prestadas funciones). Vamos a crear una segunda <em>persona</em>, pero que no tenga el método <code>getNombre</code> como la primera:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> persona2 <span class="token operator">=</span> <span class="token punctuation">{</span><br>  <span class="token literal-property property">nombre</span><span class="token operator">:</span> <span class="token string">'Manu'</span><span class="token punctuation">,</span><br>  <span class="token literal-property property">apellido</span><span class="token operator">:</span> <span class="token string">'Barna'</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span></code></pre>
<p>Ahora, vamos a pedirle prestado el método <code>getNombre</code> a la primera <em>persona</em> y la vamos a usar con la nueva.</p>
<pre class="language-javascript"><code class="hljs language-javascript">persona<span class="token punctuation">.</span><span class="token function">getNombre</span><span class="token punctuation">.</span><span class="token function">call</span><span class="token punctuation">(</span>persona2<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">//'Manu Barna'</span></code></pre>
<p>Con esto pudimos invocar un método de un objeto, pero usándolo con otro!</p>
<p>Veamos otro mini patron: <em>function currying</em>, este involucra <code>bind</code>.<br>
Como <code>bind</code> crea una nueva función, si le pasamos parámetros, estos quedan <strong>fijos</strong> en la nueva función. En el ejemplo no vamos a bindiar <code>this</code> con nada, pero si unos parámetros.<br>
Digamos que tenemos una función que multiplica dos números recibidos por parámetro. Y nos gustaría construir una función que multiplique un número recibido por argumento por dos. Para esto podríamos usar <code>bind</code> y le pasamos cómo primer parámetro <code>this</code> (en este caso <code>this</code> hace referencia al contexto global), y como segundo parámetro un <code>2</code>. Guardamos el resultado en una nueva variable:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">multiplica</span><span class="token punctuation">(</span><span class="token parameter">a<span class="token punctuation">,</span> b</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">return</span> a <span class="token operator">*</span> b<span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> multiplicaPorDos <span class="token operator">=</span> <span class="token function">multiplica</span><span class="token punctuation">.</span><span class="token function">bind</span><span class="token punctuation">(</span><span class="token keyword">this</span><span class="token punctuation">,</span> <span class="token number">2</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>De esta forma, tenemos una nueva función donde el parámetro <code>a</code> es siempre <code>2</code>, gracias a <code>bind</code>. Nótese, que dentro de <code>multiplicaPorDos</code>, <code>this</code> sigue haciendo referencia al objeto global, porque cuando lo bindeamos le pasamos ese parámetro.</p>
<blockquote>
<p>Function Currying se refiere a crear una copia de una función pero con algunos argumentos preseteados. En JavaScript lo hacemos con <code>bind</code>.</p>
</blockquote>
<h2 id="homework" tabindex="-1">Homework <a class="anchor-link" href="#homework"></a></h2>
<p>Completa la tarea descrita en el archivo <a href="https://github.com/soyHenry/FT-M1/blob/master/03-JavaScriptAvanzado-II/homework/README.md">README</a></p>

        </div>

      </main>

      
        <div class="feedback">
          <a href='https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=02-JavaScriptAvanzado-II' target="_blank">
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