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
    <title>JavaScript Avanzado I | Módulo 1 - JavaScript</title>
    

    

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
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">JS Avanzado I</span>
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

        <div class='sidebar'>
          <div class="tocTitle">
            Contenido de la clase
            </div>
          <div class="tocBox">
            
            <nav class="toc" >
        <ul><li><a href="#single-threaded-y-sincr%C3%B3nico">Single Threaded y Sincrónico </a></li><li><a href="#syntax-parser">Syntax Parser </a></li><li><a href="#lexical-environment">Lexical Environment </a></li><li><a href="#execution-context">Execution Context </a><ul><li><a href="#global-enviroment">Global Enviroment </a></li><li><a href="#creando-el-contexto-de-ejecuci%C3%B3n-%2F-hoisting">Creando el contexto de ejecución / Hoisting </a></li></ul></li><li><a href="#execution-stack">Execution stack </a><ul><li><a href="#scope">Scope </a></li></ul></li><li><a href="#asynchronous-non-blocking">Asynchronous non blocking </a></li><li><a href="#operadores-y-tipos-de-datos-en-javascript">Operadores y Tipos de Datos en JavaScript </a></li><li><a href="#tipos-de-datos">Tipos de Datos </a><ul><li><a href="#static-typing-vs-dynamic-typing">Static Typing vs Dynamic Typing </a></li><li><a href="#tipos-de-datos-primitivos-en-javascript">Tipos de datos Primitivos en JavaScript </a></li></ul></li><li><a href="#operadores">Operadores </a></li><li><a href="#precedencia-de-operadores-y-asociatividad">Precedencia de Operadores y Asociatividad </a></li><li><a href="#coerci%C3%B3n-de-datos">Coerción de Datos </a></li><li><a href="#funciones-y-objetos">Funciones y Objetos </a><ul><li><a href="#first-class-functions">First Class Functions </a></li><li><a href="#expresi%C3%B3n">Expresión </a></li><li><a href="#statement">Statement </a></li><li><a href="#pasando-variables-por-referencia-o-por-valor">Pasando variables por referencia o por valor </a></li></ul></li><li><a href="#variable-this">Variable this </a></li><li><a href="#contexto-global-inicial">Contexto global inicial </a></li><li><a href="#en-el-contexto-de-una-funci%C3%B3n">En el contexto de una función </a><ul><li><a href="#llamadas-simples">Llamadas simples </a></li><li><a href="#c%C3%B3mo-un-m%C3%A9todo-de-un-objeto">Cómo un método de un objeto </a></li></ul></li><li><a href="#immediately-invoked-functions-expressions-(iife)s">Immediately invoked functions expressions (IIFE)s </a></li><li><a href="#homework">Homework </a></li></ul>
      </nav>
          </div>
        </div>

        <div class='rightBox'>
          <div class="readingTime">
                    Tiempo de lectura 56 min
          </div>
          
            <div class='quizzBox'>
              <a href='https://quiz.soyhenry.com/evaluation/new/6057d0a5656c8d23c2e60e3e' target='blank'>Quizz 📚</a>
            </div>
          

          
            <div class='homeworkBox'>
              <a href=https://github.com/soyHenry/FT-M1/tree/master/02-JavaScriptAvanzado-I/homework target='blank'>Homework 📝</a>
            </div>
          
        </div>

        <div class='lesson'>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<table class="hide" width="100%" style='table-layout:fixed;'>
  <tr>
   <td>
    <a href="https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=01-JavaScriptAvanzado-I">
   <img src="https://static.thenounproject.com/png/204643-200.png" width="100"/>
   <br>
   Hacé click acá para dejar tu feedback sobre esta clase.
    </a>
   </td>
      <td>
     <a href="https://quiz.soyhenry.com/evaluation/new/6057d0a5656c8d23c2e60e3e">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/HSQuiz.svg/768px-HSQuiz.svg.png" width="100" height="100"/>
      <br>
      Hacé click acá completar el quizz teórico de esta lecture.
     </a>
 </td>
  </tr>
</table>
<h1 id="javascript" tabindex="-1">JavaScript <a class="anchor-link" href="#javascript"></a></h1>
<h4 id="avanzado-i" tabindex="-1">Avanzado I <a class="anchor-link" href="#avanzado-i"></a></h4>
<p>Empecemos con algunos fundamentos:</p>
<h2 id="single-threaded-y-sincr%C3%B3nico" tabindex="-1">Single Threaded y Sincrónico <a class="anchor-link" href="#single-threaded-y-sincr%C3%B3nico"></a></h2>
<p>En ciencias de la computación un thread (o hilo de ejecución) es la secuencia de instrucciones más pequeña que puede ser manejada por un <em>planificar de recursos</em> (él que se encarga de repartir el tiempo disponible de los recursos del sistema entre todos los procesos) del Sistema Operativo.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/mthread.gif" alt="Threaded"></p>
<p>JavaScript es <strong>Single Threaded</strong> y sincrónico, es decir que sólo puede hacer un sólo comando o instruccion en cada momento y que lo hace en orden, empieza la instrucción siguiente cuando termina la anterior. Esto puede sonar confuso, porque vemos que, en el browser por ejemplo suceden muchas cosas al <em>mismo tiempo</em> o bien, cuando tiramos una función asincrónica y esta se realiza mientras nosotros hacemos otras cosas, etc… esto sucede porque en general usamos javascript en conjunto con otros <strong>procesos</strong>, que pueden ser o no single threaded y en conjunto nos da la sensación que está ocurriendo todo al mismo tiempo, aunque es muy probable que no sea así.</p>
<blockquote>
<p>Los procesadores son tan rápidos que nos dan la sensación de paralelismo en tareas cuando en realidad se hacen en serie.</p>
</blockquote>
<h2 id="syntax-parser" tabindex="-1">Syntax Parser <a class="anchor-link" href="#syntax-parser"></a></h2>
<p>Un programa que lee tu código y determina qué hace y si su sintaxis es válida. Si todo está bien se generá código legible por la computadora que luego es ejecutado como instrucciones. Lo importante de esto, es que el intérprete  además puede agregar ciertos comportamientos extras, vamos a ver algunas de esas cosas extras que el intérprete maneja por nosotros.</p>
<h2 id="lexical-environment" tabindex="-1">Lexical Environment <a class="anchor-link" href="#lexical-environment"></a></h2>
<p>El lexical environment tiene que ver con <em>dónde</em> están declarados ciertos statements o expresiones en tu código. Es decir, el comportamiento de JavaScript puede cambiar según dónde hayas escrito el código.</p>
<pre class="language-js"><code class="hljs language-js"><span class="token keyword">function</span> <span class="token function">hola</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  <span class="token keyword">var</span> foo <span class="token operator">=</span> <span class="token string">'Hola!'</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">var</span> bar <span class="token operator">=</span> <span class="token string">'Chao'</span><span class="token punctuation">;</span></code></pre>
<p>Por ejemplo, para el intérprete las dos declaraciones de variable del arriba tendrán significados muy distintos. Si bien la operación es igual en los dos (asignación) al estar en lugares distintos (una dentro de una función y la otra no) el intérprete las parseará de forma distinta.</p>
<blockquote>
<p>En otros lenguajes puede que el lexical environment no cambie el comportamiento de la ejecución del código.</p>
</blockquote>
<h2 id="execution-context" tabindex="-1">Execution Context <a class="anchor-link" href="#execution-context"></a></h2>
<p>El contexto de ejecución contiene información sobre <em>qué</em> código se está ejecutando en cada momento. Además de mantener el código que tiene que ejecutar, también mantiene más información sobre desde dónde se invocó ese código, en qué lexical enviroment está, etc…</p>
<h3 id="global-enviroment" tabindex="-1">Global Enviroment <a class="anchor-link" href="#global-enviroment"></a></h3>
<p>Cada vez que ejecutamos algo en JavaScript <strong>se corre dentro de un contexto de ejecución</strong>. Como todo el código corre en un contexto, si no especificamos ese contexto (veremos cómo se hace despues) entonces el código se va a ejecutar en el <strong>contexto global</strong>, que es el contexto de base que nos crea automáticamente el interprete.</p>
<blockquote>
<p>Básicamente, vamos a decir que es <strong>global</strong> cualquier bloque de código que no esté declarado dentro de una función.</p>
</blockquote>
<p>Además de ejecutar el código que le pasemos, también crea un <strong>objeto global</strong> y además crea una variable llamada <strong>this</strong>. Por ejemplo, si usamos el engine de javaScript de Chrome ( este es el intérprete ), y vamos a la consola vamos a ver que el <em>objeto global</em> que mencionamos el es objeto <code>window</code> y que la variable <code>this</code> hace referencia a ese objeto. Esos objetos los generó el interprete cuando creó el ambiente de ejecución. Si abro otra pestaña voy a tener otro objeto <code>window</code> similar, ya que es otro contexto de ejecución.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/context.jpg" alt="no-box"></p>
<blockquote>
<p>Si corremos JavaScript en otro ambiente que no sea el browser, por ejemplo con NodeJs o con otros engines, es muy probable que el objeto global no sea <code>window</code> y sea otro. Pero siempre hay UN objeto global.</p>
</blockquote>
<p>En JavaScript, cuando declaramos variables y funciones en el contexto global, estos se guardan en el objeto global. Si declaramos variables y funciones en la consola de desarrollador, vamos a ver que estás aparecerán dentro de <code>window</code> que es el objeto global.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/globalObject.png" alt="Objeto Global"></p>
<p>Por último, el contexto de ejecución tambien mantiene una referencia a otros contextos de ejecución (desde donde fue creado). Como ahora hablamos del contexto global, esta referencia contiene el valor <code>null</code>, ya que no hay otro contexto que haya invocado a este.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/executionContext.png" alt="Execution Context"></p>
<h3 id="creando-el-contexto-de-ejecuci%C3%B3n-%2F-hoisting" tabindex="-1">Creando el contexto de ejecución / Hoisting <a class="anchor-link" href="#creando-el-contexto-de-ejecuci%C3%B3n-%2F-hoisting"></a></h3>
<p>Veamos como el intérprete crea el contexto de ejecución global. Cuando el interprete lee un bloque de código realiza un proceso llamado <code>hoisting</code>. Básicamente lee todo el código buscando declaraciones de variables y funciones, y reserva un espacio en memoria para ellas.</p>
<p>Probá ejecutar lo siguiente en JavaScript:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token function">bar</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>foo<span class="token punctuation">)</span><span class="token punctuation">;</span><br><br><span class="token keyword">var</span> foo <span class="token operator">=</span> <span class="token string">'Hola, me declaro'</span><span class="token punctuation">;</span><br><span class="token keyword">function</span> <span class="token function">bar</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'Soy una función'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span></code></pre>
<p>En otros lenguajes, si intentaramos invocar una función o una variable que está definida <em>‘más abajo’</em> seguramente tendríamos un error. Pero JavaScript, al realizar el proceso de <code>hoisting</code>, ya tiene reservado el espacio para esas variable y funciones, por lo tanto no se genera un error. Notesé que a la función la pudo ejecutar, esto quiere decir que durante el hoisting guardó su contenido también, no sólo reservó el espacio. Pero con el caso de la variable, sólo reservo el espacio, ya que cuando hacemos el <code>console.log</code> vemos que contiene <code>undefined</code>.</p>
<blockquote>
<p>Podemos pensar el Hoisting como que el interprete ‘<em>mueve</em>’ las declaraciones a la parte de már arriba de nuestro código. Sólo lo hace con las declaraciones y no con las inicializaciones.</p>
</blockquote>
<p>Para entender por qué el interprete hace esto, tenemos que saber cómo se crea el contexto de ejecución. Esto se hace en dos fases. La primera es la fase de creación (creation phase). En esta fase el interprete genera el <em>objeto global</em>, asigna la variable <em>this</em> y las referencias a otro contexto de ejecución (Outer Context), y además reserva el espacio para todas las variables y funciones que vaya a utilizar ese contexto, justamente en este último paso es donde se genera el proceso de <code>hoisting</code>.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/fasecreacion.png" alt="Fase Creacion"></p>
<blockquote>
<p>El hosting es el primer ejemplo de las <em>cosas extras</em> que hace el interprete sin que nosotros se lo pidamos. Si no las conocemos, nos puede pasar que veamos comportamientos extraños y no sepamos de donde vienen (como que podamos usar funciones que no hemos declarado antes de invocarlas!!)</p>
</blockquote>
<p>La segunda fase es la <em>fase de ejecucción</em>, en esta fase, ya tenemos todo lo que se creo en la primera fase, y ahora sí el intérprete <strong>ejecuta</strong> nuestro código, línea por línea!.</p>
<p>Este proceso de crear contextos de ejecución sucede siempre al principio cuando se crea el contexto global, ahora vamos a ver que también sucede cada vez que invocamos una función en nuestro código, como se pueden imaginar, en un script cualquiera, es muy probable que se creen varios contextos de ejecución (muchas invocaciones a funciones), estos contextos se van a ir <em>apilando</em> en la <strong>pila de ejecución o execution stack</strong>.</p>
<h2 id="execution-stack" tabindex="-1">Execution stack <a class="anchor-link" href="#execution-stack"></a></h2>
<p>Para ilustar cómo se van creando y cómo se apilan los contextos veamos el siguiente código:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">b</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'B!'</span><span class="token punctuation">)</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span><br><br><span class="token keyword">function</span> <span class="token function">a</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  <span class="token comment">// invoca a la función b</span><br>  <span class="token function">b</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span><br><br><span class="token comment">//invocamos a</span><br><span class="token function">a</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Veamos que ocurre cuando corremos este script: Como sabemos, lo primero que pasa es la creción del contexto global y el proceso de <em>hoisting</em>, entonces la función <code>a</code> y <code>b</code> van a estar en memoria. Una vez que termina eso, empieza la fase de ejecución, en esa fase es que el interprete va a recorrer línea por línea el script. En nuestro ejemplo hay una única línea para ejecutar (las otras las leyó durante el <em>hoisting</em>) que es la línea donde invocamos a <code>a()</code>.</p>
<p>Lo que sucede ahora, es que se crea un <em>nuevo contexto de ejecución</em> que se va a poner arriba del contexto de ejecución global (creando la pila). Básicamente, el contexto que esté arriba de la pila, es el que se está ejecutando en ese momento ( o cuando le den tiempo de procesador a JavaScript). Cuando se creó ese contexto nuevo, pasó lo mismo que cuando creamos el global, el intérprete generó la variable <code>this</code> y pusó las referencias al <code>outer context</code> (en este caso el outer context es el contexto global), después de hacer todo eso, el intérprete va a ejecutar línea por línea el código del nuevo contexto, es decir, <em>el código de la función <code>a</code>. Ahora, dentro de <code>a</code> hay una sóla línea de código, y en esa línea se invoca a <code>b</code>. Si! como se imaginan, el intérprete va a crear un_nuevo</em> contexto de ejecución para la función <code>b</code> (haciendo de nuevo los pasos previamente mencionados), y poniendolo en la cima de la pila.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/executionStack.png" alt="ExecutionStack"></p>
<blockquote>
<p>Cada invocación a una función crea un contexto de ejecución nuevo, que pasa por las dos fases de creación antes mencionadas. Cuando se termina de ejecutar, se <em>destruye</em> y se saca de la pila de ejecución para seguir con los que quedan.</p>
</blockquote>
<h3 id="scope" tabindex="-1">Scope <a class="anchor-link" href="#scope"></a></h3>
<p>Ahora que sabemos que existen los contextos de ejecución, podemos entender más fácilmente que ocurre con las variables que creamos dentro de las funciones que invocamos. Cada contexto maneja sus propias variables, y son independientes de los demás. Justamente por eso, podemos usar los mismos nombres de variables dentro de funciones que creamos sin que <em>pisen</em> las demás.<br>
También sabemos que podemos acceder a una variable declarada en el contexto global dentro de una función. Esto se debe a que JavaScript primero busca una variable dentro del contexto que se está ejecutando, si no la encuentra ahí, usa la referencia al <code>outer context</code> para buscarla dentro de ese contexto. Gracias a esto vamos a poder acceder a variables que estén afuera de nuestro contexto (siempre y cuando no hayamos declarado una nueva con el mismo nombre!!).</p>
<p>Veamos en el código siguiente el comportamiento de las variables:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> global <span class="token operator">=</span> <span class="token string">'Hola!'</span><span class="token punctuation">;</span><br><br><span class="token keyword">function</span> <span class="token function">a</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  <span class="token comment">// como no hay una variable llamada global en este contexto,</span><br>  <span class="token comment">// busca en el outer que es el global</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>global<span class="token punctuation">)</span><span class="token punctuation">;</span> <br>  global <span class="token operator">=</span> <span class="token string">'Hello!'</span><span class="token punctuation">;</span> <span class="token comment">// cambia la variable del contexto global</span><br><span class="token punctuation">}</span><br><br><span class="token keyword">function</span> <span class="token function">b</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token comment">// declaramos una variable global en nuestro contexto</span><br>  <span class="token comment">// esta es independiente </span><br>  <span class="token keyword">var</span> global <span class="token operator">=</span> <span class="token string">'Chao'</span><span class="token punctuation">;</span> <br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>global<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token function">a</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 'Hola!'</span><br><span class="token function">b</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 'Chao'</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>global<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 'Hello'</span></code></pre>
<p>Para esto vamos a introducir el término <code>scope</code>, este es <strong>el set de variable, objeto y funciones al que tenemos acceso en determinado contexto</strong>. En el ejemplo anterior, la variable <code>global</code> está definida en dos <code>scopes</code> distintos, uno es el <code>scope global</code> y el otro es el <code>scope</code> de la función <code>b</code>, esto quiere decir que, a pesar de tener el mismo nombre, estas dos variables son distintas.</p>
<p>Justamente, cuando JavaScript no encuentra una variable en su scope, lo que hace es buscar en otros scopes (de contextos que esten en la referencia de <code>outer contexts</code>). A esta búsqueda en distintos scope se la conoce como <strong>the scope chain</strong>, ya que el intérprete busca en cadena scope por scope por el nombre de la variable, hasta llegar al scope global. Noten que el <code>outer enviroment</code> no es necesariamente el contexto que esté debajo en la pila de ejecucción, ni tampoco el contexto en donde se invocó la función, si no <strong>es el contexto en donde se definió la función!</strong> (Se acuerdan que dijimos que en javascript el <em>lexical enviroment</em> era importante?).</p>
<blockquote>
<p>Si el intérprete llega el scope Global sin encontrar la variable, entonces va a tirar un error.</p>
</blockquote>
<p>Prueben el siguiente código y miren comó cambió todo cuando declaramos la funcion <code>a</code> <strong>dentro</strong> de la función <code>b</code>:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> global <span class="token operator">=</span> <span class="token string">'Hola!'</span><span class="token punctuation">;</span><br><br><span class="token keyword">function</span> <span class="token function">b</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">var</span> global <span class="token operator">=</span> <span class="token string">'Chao'</span><span class="token punctuation">;</span> <br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>global<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// Chao</span><br> <span class="token keyword">function</span> <span class="token function">a</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  <span class="token comment">// como no hay una variable llamada global en este contexto,</span><br>  <span class="token comment">// busca en el outer que es scope de b;</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>global<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">//Chao </span><br>  global <span class="token operator">=</span> <span class="token string">'Hello!'</span><span class="token punctuation">;</span> <span class="token comment">// cambia la variable del contexto de b()</span><br> <span class="token punctuation">}</span>  <br> <span class="token function">a</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token comment">//a(); Ya no puedo llamar a a desde el scope global, acá no existe.</span><br><span class="token function">b</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>global<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 'Hola!'</span></code></pre>
<h2 id="asynchronous-non-blocking" tabindex="-1">Asynchronous non blocking <a class="anchor-link" href="#asynchronous-non-blocking"></a></h2>
<p>Ahora que sabemos un poco más sobre cómo hace JavaScript para ejecutar el código, veamos que pasa cuando usamos una función asincrónica a la que le pasamos un callback.</p>
<blockquote>
<p><strong>Callback</strong>: Le llamamos así a una función que le pasamos como argumento a otra función, para que sea invocada en esta ultima, en general cuando se cumpla una condición o termine de realizar algo (leer un archivo, escribir en una base de datos, traer datos de internet, etc…) .</p>
</blockquote>
<p>Cuando decimos código <em>Asincrónico</em> quiere que su ejecución o su completitud está diferida en el tiempo. Por ejemplo, cuando declaramos un evento, el código o la función callback se va a ejecutar cuando suceda ese evento y no cuando el intérprete lee esas líneas, o cuando hacemos un request tipo <em>AJAX</em> y esperamos que llegue la respuesta, etc… En todos estos casos, el engine JavaScript sigue haciendo o ejecutando otras líneas de código, y esto nos puede dar la <em>sensación</em> que estamos haciendo más de una cosa a la vez. Pero al principio dijimos que javascript es sincrónico y que ejecuta <em>una sóla cosa a la vez</em>, veamos cómo logra darnos esa <a href="https://www.youtube.com/watch?v=nJXVIjxRq_A"><em>sensación</em></a>.</p>
<p>Para entender esto, tenemos que ver un poco la imagen grande. Cuando hablamos del engine Javascript tenemos que comprender que nunca actuá sólo, siempre va a estar acompañado por otros componentes de software. El Engine de JavaScript tiene formas de comunicarse con estos otros componentes. Por ejemplo, el componente encargado de <em>renderizar</em> las páginas, o el componente encargado de hacer <em>http requests</em> (en general estos están programados en C o C++). Lo que sucede entonces, es que JavaScript le <strong>pide</strong> cosas a los demás componentes y les pide que le <strong>avise</strong> cuando terminen de hacer esas cosas. Por lo tanto, los demás componentes del browser se encargán de hacer ese trabajo y cuando sucede un evento o terminan una tarea le <em>avisan</em> al engine, este interrumpe su proceso normal y mete el callback en el execution stack para realizarla.</p>
<p>Para lograr este comportamiento, el engine JavaScript tiene lo que se conoce como <strong>Event Queue</strong>, que es una cola que inicialmente está vacía y es en donde el browser (o quien se encarge de realizar las tareas) va a ir poniendo los avisos notificando que se terminó de ejecutar tal tarea. Ahora el engine JavaScript intercala cosas que tienen que ejecutar de su <em>execution stack</em> con cosas que tiene que hacer del <strong>event queue</strong>, de esta forma nos da la sensación que hay cosas que se hacen en paralelo. Cuando en realidad estamos delegando las tareas a otros componentes.</p>
<blockquote>
<p>Para entender exactamente como trabaja el <em>Event queue</em> en conjunto con los demás componentes miren <a href="https://www.youtube.com/watch?v=8aGhZQkoFbQ">este video</a>, en donde está perfectamente explicado.</p>
</blockquote>
<h2 id="operadores-y-tipos-de-datos-en-javascript" tabindex="-1">Operadores y Tipos de Datos en JavaScript <a class="anchor-link" href="#operadores-y-tipos-de-datos-en-javascript"></a></h2>
<p>Antes de avanzar repasemos algunos conceptos de programación.</p>
<h2 id="tipos-de-datos" tabindex="-1">Tipos de Datos <a class="anchor-link" href="#tipos-de-datos"></a></h2>
<h3 id="static-typing-vs-dynamic-typing" tabindex="-1">Static Typing vs Dynamic Typing <a class="anchor-link" href="#static-typing-vs-dynamic-typing"></a></h3>
<p>Todos los lenguajes de programación tienen características distintas que los caracterizan. Una de ellas es la forma con la que trabajan con variables y tipos de datos. JavaScript en particular tiene lo que se conoce como <code>tipado dinámico</code> o <code>dynamic typing</code>. Esto quiere decir que no tenemos que decirle al intérprete que tipo de datos contiene una variable, él lo calcula por si mismo. En otros lenguajes, al declarar una variable tenemos que avisarle qué tipos de datos vamos a guardar en ella (<code>static typing</code> o <code>tipado estático</code>). Otra cosa importante, es que JavaScript nos permite <strong>cambiar</strong> el tipo de datos que guardamos en una variable, por ejemplo, podemos tener una variable con un número y luego guardar una string en la misma variable, en otros lenguajes hacer esto nos resultaría en un error.</p>
<blockquote>
<p>Cuando queremos convertir algo de un tipo de datos a otro, usamos el termino <em>castear</em>.</p>
</blockquote>
<h3 id="tipos-de-datos-primitivos-en-javascript" tabindex="-1">Tipos de datos Primitivos en JavaScript <a class="anchor-link" href="#tipos-de-datos-primitivos-en-javascript"></a></h3>
<p>Un tipo de datos Primitivo, son tipos de datos básicos que vienen previamente definidos con el lenguaje. Usando estos tipos de datos primitivos vamos a poder crear tipos de datos más complejos.<br>
En Javascript hay seis tipos de datos primitivos:</p>
<ul>
<li><strong>undefined</strong>: Este representa que algo no está definido, como por ejemplo cuando declaramos una variable y no le asignamos nada, toma el valor <code>undefined</code> por defecto.</li>
<li><strong>null</strong>: Este tambien representa que algo no existe. Lo vamos a usar para decir que una variable está vacía o no tiene nada adentro. (No es lo mismo decir que una variable no está definida, a que NO tiene nada adentro. En el segundo caso <em>sabemos</em> que no tiene nada.)</li>
<li><strong>Boolean</strong>: true o false.</li>
<li><strong>Number</strong>: Este tipo de datos representa un número real. En JavaScript todos los números son representados como tipo flotantes.</li>
<li><strong>String</strong> : Una secuencia de caractéres.</li>
<li><strong>Symbol</strong>: Este tipo de datos es nuevo, está en el nuevo standart ES6. Por ahora lo ignoraremos.</li>
</ul>
<h2 id="operadores" tabindex="-1">Operadores <a class="anchor-link" href="#operadores"></a></h2>
<p>Un operador no es otra cosa que una función, pero al ser funciones básicas para el Engine y que se utilizan muchos, se escriben de una forma particular y que en general es corta y simple. Generalmente, los operadores toman dos parámetros y retornan un resultado.<br>
Por ejemplo: Para el intérprete al ver el signo <code>+</code>, sabe que tiene que ejecutar la función suma (que tiene internamente definida), y toma como parámetros los términos que estén a la izquierda y la derecha del operador. De hecho, es equivalente a tener una función que se llame <code>suma</code> y que reciba dos parámetros:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> a <span class="token operator">=</span> <span class="token number">2</span> <span class="token operator">+</span> <span class="token number">3</span><span class="token punctuation">;</span> <span class="token comment">// 5</span><br><br><span class="token keyword">function</span> <span class="token function">suma</span><span class="token punctuation">(</span><span class="token parameter">a<span class="token punctuation">,</span>b</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">return</span> a <span class="token operator">+</span> b<span class="token punctuation">;</span> <br> <span class="token comment">// usamos el mismo operador como ejemplo</span><br> <span class="token comment">// Si no deberiamos hacer sumas binarias!</span><br><span class="token punctuation">}</span><br><span class="token keyword">var</span> a <span class="token operator">=</span> <span class="token function">suma</span><span class="token punctuation">(</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">3</span><span class="token punctuation">)</span> <span class="token comment">// 5</span></code></pre>
<p>De hecho, esa forma de escribir tiene un nombre particular, se llama notación notación <code>infix</code> o <code>infija</code>, en ella se escribe el operador entre los operandos. Pero también existen otro tipos de notación como la <code>postfix</code> o <code>postfija</code> y la <code>prefix</code> o <code>prefija</code>. En estas última el operador va a la derecha de los operandos o a la izquierda respectivamente.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/notaciones.png" alt="Notaciones"></p>
<p>En fin, lo importante a tener en cuenta es que los operadores <em>son</em> funciones.</p>
<h2 id="precedencia-de-operadores-y-asociatividad" tabindex="-1">Precedencia de Operadores y Asociatividad <a class="anchor-link" href="#precedencia-de-operadores-y-asociatividad"></a></h2>
<p>Esto parece aburrido, pero nos va a ayudar a saber cómo piensa el intérprete y bajo que reglas actua.</p>
<p>La <em>precedencia de operadores</em> es básicamente el orden en que se van a llamar las funciones de los operadores. Estás funciones son llamadas en <em>orden de precedencia</em> (las que tienen <strong>mayor</strong> precedencia se ejecutan primero).  O sea que si tenemos más de un operador, el intérprete va a llamar al operador de mayor precendencia primero y después va a seguir con los demás.</p>
<p>La <em>Asociatividad de operadores</em> es el orden en el que se ejecutan los operadores cuando tienen la misma precedencia, es decir, de izquierda a derecha o de derecha a izquierda.</p>
<blockquote>
<p>Podemos ver la documentación completa sobre Precedencia y Asociatividad de los operadores de JavaScript <a href="https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Operators/Operator_Precedence#Table">acá</a></p>
</blockquote>
<p>Por ejemplo: <code>console.log( 3 + 4 * 5)</code> Para resolver esa expresión y saber qué resultado nos va a mostrar el intérprete deberíamos conocer en qué orden ejecuta las operaciones. Al ver la tabla del link de arriba, vemos que la multiplicación tiene una precedencia de 14, y la suma de 13. Por lo tanto el intérprete primero va a ejecutar la multiplicación y luego la suma con el resultado de lo anterior -&gt; <code>console.log( 3 + 20 )</code> -&gt; <code>console.log(23)</code>.</p>
<blockquote>
<p>Cuando invocamos una función en Javascript, los argumentos son evaluados primeros (se conoce como <a href=""><strong>non-lazy</strong> evaluation</a>), está definido en la <a href="http://es5.github.io/#x11.2.3">especificación</a>.<br>
No confundir el orden de ejecución con asociatividad y precedencia, <a href="http://stackoverflow.com/questions/13849906/operator-precedence-and-associativity-with-math-floormath-random">ver esta pregunta de StackOverflow</a>.</p>
</blockquote>
<p>Ahora si tuvieramos la misma precedencia entraría en juego la asociatividad, veamos un ejemplo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> a <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">,</span> b <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">,</span> c <span class="token operator">=</span> <span class="token number">3</span><span class="token punctuation">;</span><br><br>a <span class="token operator">=</span> b <span class="token operator">=</span> c<span class="token punctuation">;</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>a<span class="token punctuation">,</span> b<span class="token punctuation">,</span> c<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Qué veriamos en el console.log? Para eso tenemos que revisar la tabla por la asociatividad del operador de asignación <code>=</code>. Este tiene una precedencia de 3 y una asociatividad de <code>right-to-left</code>, es decir que las operaciones se realizan primero de derecha a izquierda. En este caso, primero se realiza <code>b = c</code> y luego <code>a = b</code> (en realidad al resultado de <code>b = c</code>, que retorna el valor que se está asignando). Por lo tanto al final de todo, todas las variable van a tener el valor <code>3</code>. Si la asociatividad hubiese al revés, todos las variables tendrían el valor <code>1</code>.</p>
<h2 id="coerci%C3%B3n-de-datos" tabindex="-1">Coerción de Datos <a class="anchor-link" href="#coerci%C3%B3n-de-datos"></a></h2>
<p>Ahora, como JavaScript tiene <code>dynamic typing</code>, a veces el intérprete sólo cambia el tipo de datos de un valor a otro. Esto es conocido como <strong>Coercion</strong>. Por ejemplo, si hacemos <code>var a = 1 + 'hola'</code>, el resultado va a ser <code>1hola</code>. Lo que ocurrió es que el número <code>1</code> fue convertido a un string, y luego se realizó la operación de concatenado entre el <code>1</code> y el string <code>hola</code>. Lo importante es que nosotros nunca le pedimos a javascript que nos haga la conversión, el decidió hacerlo sólo (en otros lenguajes nos devolvería un error si quisieramos hacer lo mismo!).</p>
<blockquote>
<p>Cuando usamos el operador <code>===</code> le estamos diciendo al intérprete que <strong>NO</strong> convierta los operadores antes de hacer la comparación.</p>
</blockquote>
<p>A veces es obvio lo que JavaScript va a hacer cuando convierte una valor a otro, como por ejemplo, cuando convierte un número a un string. Pero a veces no es intuitivo. Con la función <code>Number()</code> podemos convertir valores a números, veamos algunos ejemplos:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><br><span class="token function">Number</span><span class="token punctuation">(</span><span class="token string">'3'</span><span class="token punctuation">)</span> <span class="token comment">// devuelve el número 3. Obvio!</span><br><span class="token function">Number</span><span class="token punctuation">(</span><span class="token boolean">false</span><span class="token punctuation">)</span> <span class="token comment">// devuelve el número 0. mini Obvio.</span><br><span class="token function">Number</span><span class="token punctuation">(</span><span class="token boolean">true</span><span class="token punctuation">)</span>  <span class="token comment">// devuelve el número 1. menos mini Obvio.</span><br><span class="token function">Number</span><span class="token punctuation">(</span><span class="token keyword">undefined</span><span class="token punctuation">)</span> <span class="token comment">// devuelve `NaN`. No era obvio, pero tiene sentido.</span><br><span class="token function">Number</span><span class="token punctuation">(</span><span class="token keyword">null</span><span class="token punctuation">)</span> <span class="token comment">// devuelve el nuḿero 0. WTFFFF!!! porqueeEE no debería ser `NaN`??</span></code></pre>
<p>Tampoco es obvio cuando dejamos que el intérprete haga conversiones cuando comparamos por igualdad, de hecho hay una <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Equality_comparisons_and_sameness#A_model_for_understanding_equality_comparisons">tabla</a> donde podemos ver qué cosas son iguales y cuáles no cuando usamos coercion.</p>
<blockquote>
<p>Podríamos decir que el valor <code>NaN</code> es un tipo primitivo de JavaScript. Este aparece cuando Js intenta convertir algo a un número, pero no puede hacerlo. Literalmente significa <code>Not a Number</code>.</p>
</blockquote>
<p>Ahora sabiendo todo esto, qué cosa sucede en esta expresión <code>console.log(3 &lt; 2 &lt; 1)</code>. Por qué el resultado es <code>true</code>? Viendo las asociatividades y la coerción que está sucediendo deberíamos poder explicarlo.</p>
<blockquote>
<p>Prueben ver a qué convierten las cosas, para booleanos podemos usar Boolean(), para strings String().</p>
</blockquote>
<h2 id="funciones-y-objetos" tabindex="-1">Funciones y Objetos <a class="anchor-link" href="#funciones-y-objetos"></a></h2>
<h3 id="first-class-functions" tabindex="-1">First Class Functions <a class="anchor-link" href="#first-class-functions"></a></h3>
<p>Algo muy importante de JavaScript es que las funciones son de tipo <code>first class</code>, esto quiere decir que las funciones pueden ser tratadas igual que cualquier otro tipo de valor. Es decir, que podemos pasar una funcion como argumento, podemos asignar una función a una variable, podemos guardarla en un arreglo, etc…<br>
Esta es una de las features de JavaScript que lo hace muy poderoso, hay otros lenguajes que pueden hacer lo mismo, pero el más popular es JavaScript.<br>
De hecho, las funciones en JavaScript son un tipo especial de objetos. Este objeto, además de poder tener cualquier propiedades adentro (como cualquier objeto) tiene dos propiedades especiales: La primera es el nombre (<code>name</code>), que contiene el nombre de la función, esta propiedad es opcional ( funciones anónimas ). La segunda propiedad se llama <code>code</code> (código) y en ella se guarda el código que escribiste para la función.</p>
<p><img src="../_src/assets/02-JavaScriptAvanzado-I/function.png" alt="Funcion"></p>
<p>En el código de abajo, declaramos una función y luego le agregamos una propiedad llamada <code>saludo</code> a ella. Como la función es un objeto, entonces podemos hacer esto sin problemas.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><br><span class="token keyword">function</span> <span class="token function">hola</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'hola'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br>hola<span class="token punctuation">.</span>saludo <span class="token operator">=</span> <span class="token string">'Buen Día'</span><span class="token punctuation">;</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>hola<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>También vemos que al hacer el console.log de la función, el intérprete nos devuelve el código que tiene adentro la función en una string. Esto es justamente la propiedad <code>code</code> que tienen todas las funciones.</p>
<h3 id="expresi%C3%B3n" tabindex="-1">Expresión <a class="anchor-link" href="#expresi%C3%B3n"></a></h3>
<p>Una Expresión es una unidad de código que evaluá a un valor. Por ejemplo, <code>a = 3</code>, es una expresión que devuelve el número <code>3</code>. <code>1 + 2</code> también es una expresión que retorna <code>3</code>. Las expresiones pueden ser escritas en cualquier lugar donde se espera un valor, por ejemplo: <code>console.log( 1 + 2);</code>.</p>
<h3 id="statement" tabindex="-1">Statement <a class="anchor-link" href="#statement"></a></h3>
<p>Los Statements, no producen un valor directamente, si no que <em>hacen algo</em>, generalmente tienen adentro expresiones. Según el statement que usemos vamos a tener un comportamiento distinto, ejemplos de statements son <code>if</code>, <code>while</code>, <code>for</code>, etc…</p>
<p>En javascript, en términos de funciones podemos tener ambos <code>functions statements</code> y <code>functions expressions</code>, veamos la diferencia de ambos.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">saludo</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'hola'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span></code></pre>
<p>El de arriba es un <code>function statement</code>, cuando esto es ejecutado por el intérprete no retorna nada, pero sí hace algo: reserva un espacio en memoria para la función que definimos.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">saludo</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token string">'Hola!'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token comment">//hola;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span></code></pre>
<p>En este segundo caso, estamos usando una <code>function expression</code>, en la cual estamos creando un objeto de tipo función (anónima) y además la estamos guardando en una variable llamada <code>saludo</code>. Justamente, la variable saludo va a apuntar a una dirección de memoria que contiene el objeto de tipo función que creamos anónimamente en una expresión (esa expresión retornó el objeto que se <em>guardó</em> en la variable.). Cuando declaramos una función anónima y la pasamos como argumento, también estamos haciendo una <code>function expression</code>.</p>
<h3 id="pasando-variables-por-referencia-o-por-valor" tabindex="-1">Pasando variables por referencia o por valor <a class="anchor-link" href="#pasando-variables-por-referencia-o-por-valor"></a></h3>
<p>Hay dos formas de pasar variables en cualquier lenguaje de programación, en algunos podemos elegir la forma nosotros pero en JavaScript el intérprete elige la forma él mismo.</p>
<p>Las dos formas son, por valor o por referencia. Veamos la siguiente animación:</p>
<p><img src="http://i.stack.imgur.com/QdcG2.gif" alt="ValueReference"></p>
<p>Cuando pasamos algo por referencia, estamos pasando una <em>referencia</em> o un puntero al objeto. Por lo tanto, cualquier cambio que hagamos a esa referencia, se va a ver reflejado en el objeto original. En el ejemplo, pasamos una referencia a la taza y en nuestra función la llenamos de café. Al ser una referencia al objeto <code>cup</code>, vemos que se ve reflejado el cambio en ella (se llena de café) ya que son el <strong>mismo</strong> objeto!.</p>
<p>En cambio, cuando pasamos algo por valor, estamos pasando el elemento por sí mismo, o una copia de él. En el ejemplo de la tasa, pasamos la tasa por valor, es decir que pasamos una tasa nueva, que existe por si misma (no es una referencia, si no la tasa misma). Por eso, cuando llenamos esa tasa de café, la otra se mantiene igual, ya que son dos <em>objetos distintos</em>.</p>
<p>En lenguajes como <em>C++</em> el programador puede decidir si enviar el objeto en sí (por valor) o enviar una referencia al objeto (por referencia). En JavaScript, según qué cosa estemos pasando, el intérprete decide si es por valor o referencia. Básicamente, si pasamos un valor primitivo (números, strings, etc… ) estos se pasan por <em>valor</em>, pero si pasamos un objeto (cualquier objeto, incluso funciones) este se pasa <em>por referencia</em>. Podemos probar este comportamiento:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> a <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">,</span> b <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">;</span><br><br>a <span class="token operator">=</span> b<span class="token punctuation">;</span><br>b <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>a<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token comment">// Como se pasó el valor de `b` y no la referencia,</span><br><span class="token comment">// cuando cambiamos b no impacta en el valor de a. </span></code></pre>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> a<span class="token punctuation">;</span><br><span class="token keyword">var</span> b <span class="token operator">=</span> <span class="token punctuation">{</span> <span class="token literal-property property">nombre</span> <span class="token operator">:</span> <span class="token string">'hola'</span><span class="token punctuation">}</span><span class="token punctuation">;</span><br><br>a <span class="token operator">=</span> b <span class="token punctuation">;</span><br><br>b<span class="token punctuation">.</span>nombre <span class="token operator">=</span> <span class="token string">'Chao'</span><span class="token punctuation">;</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>a<span class="token punctuation">.</span>nombre<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 'Chao'</span><br><span class="token comment">// Cuando se hizo la asignación se pasó la referencia de b, por lo tanto</span><br><span class="token comment">// cuando cambiamos la propiedad nombre de b, se ve reflejado en a</span><br><span class="token comment">// porque ambas variables "apuntan" al mismo objeto en memoria</span></code></pre>
<h2 id="variable-this" tabindex="-1">Variable <code>this</code> <a class="anchor-link" href="#variable-this"></a></h2>
<p>Habiamos dicho que cuando se crea el <code>execution context</code>, el interprete reserva el espacio de memoria para las variables (hoisting), guarda la referencia al <code>outer enviroment</code> y además setea la variable <code>this</code>. Esta variable va a apuntar a distintos objetos dependiendo en cómo fue invocada la función. Esto puede causar algunas confusiones. Veamos algunos escenarios:</p>
<h2 id="contexto-global-inicial" tabindex="-1">Contexto global inicial <a class="anchor-link" href="#contexto-global-inicial"></a></h2>
<p>Este es el caso cuando ejecutamos código en el contexto global (afuera de cualquier función). En este caso <code>this</code> hace referencia al objeto <code>global</code>, en el caso del browser hace referencia a <code>window</code>.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token comment">// En el browser esto es verdad:</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">this</span> <span class="token operator">===</span> window<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// true</span><br><br><span class="token keyword">this</span><span class="token punctuation">.</span>a <span class="token operator">=</span> <span class="token number">37</span><span class="token punctuation">;</span><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>window<span class="token punctuation">.</span>a<span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// 37</span></code></pre>
<h2 id="en-el-contexto-de-una-funci%C3%B3n" tabindex="-1">En el contexto de una función <a class="anchor-link" href="#en-el-contexto-de-una-funci%C3%B3n"></a></h2>
<p>Cuando estamos dentro de una función, el valor de <code>this</code> va a depender de <em>cómo sea invocada la función</em>.</p>
<h3 id="llamadas-simples" tabindex="-1">Llamadas simples <a class="anchor-link" href="#llamadas-simples"></a></h3>
<p>En este caso, el interprete le da a <code>this</code> una referencia al objeto <code>global</code>.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">function</span> <span class="token function">f1</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">return</span> <span class="token keyword">this</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token function">f1</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">===</span> window<span class="token punctuation">;</span> <span class="token comment">// global object</span></code></pre>
<blockquote>
<p>Si usamos el modo <code>strict</code> de Javascript, el ejemplo de arriba va a devolver <code>undefined</code>, ya que no le deja al interprete <em>asumir</em> que <code>this</code> es el objeto global.</p>
</blockquote>
<h3 id="c%C3%B3mo-un-m%C3%A9todo-de-un-objeto" tabindex="-1">Cómo un método de un objeto <a class="anchor-link" href="#c%C3%B3mo-un-m%C3%A9todo-de-un-objeto"></a></h3>
<p>Cuando usamos el keyword <code>this</code> dentro de una función que es un método de un objeto, <code>this</code> toma hace referencia al objeto sobre el cúal se llamó el método:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> o <span class="token operator">=</span> <span class="token punctuation">{</span><br>  <span class="token literal-property property">prop</span><span class="token operator">:</span> <span class="token number">37</span><span class="token punctuation">,</span><br>  <span class="token function-variable function">f</span><span class="token operator">:</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>    <span class="token keyword">return</span> <span class="token keyword">this</span><span class="token punctuation">.</span>prop<span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><br><span class="token punctuation">}</span><span class="token punctuation">;</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>o<span class="token punctuation">.</span><span class="token function">f</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// logs 37</span><br><span class="token comment">// this hace referencia a `o`</span></code></pre>
<p>En este caso, <em>no depende</em> donde hayamos definido la función, lo único que importa es que la función haya sido invocada como método de un objeto. Por ejemplo, si definimos la función afuera:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> o <span class="token operator">=</span> <span class="token punctuation">{</span><span class="token literal-property property">prop</span><span class="token operator">:</span> <span class="token number">37</span><span class="token punctuation">}</span><span class="token punctuation">;</span><br><br><span class="token comment">// declaramos la función</span><br><span class="token keyword">function</span> <span class="token function">loguea</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  <span class="token keyword">return</span> <span class="token keyword">this</span><span class="token punctuation">.</span>prop<span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br><span class="token comment">//agregamos la función como método del objeto `o`</span><br>o<span class="token punctuation">.</span>f <span class="token operator">=</span> loguea<span class="token punctuation">;</span><br><br>console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>o<span class="token punctuation">.</span><span class="token function">f</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment">// logs 37</span><br><span class="token comment">// el resultado es le mismo!</span></code></pre>
<p>De todos modos, hay que tener cuidado con el keyword <code>this</code>, ya que pueden aparecer casos donde es contraintuitivo ( Como varias cosas de JavaScript ). Veamos el siguiente ejemplo:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> obj <span class="token operator">=</span> <span class="token punctuation">{</span><br> <span class="token literal-property property">nombre</span><span class="token operator">:</span> <span class="token string">'Objeto'</span><span class="token punctuation">,</span><br> <span class="token function-variable function">log</span>   <span class="token operator">:</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">this</span><span class="token punctuation">.</span>nombre <span class="token operator">=</span> <span class="token string">'Cambiado'</span><span class="token punctuation">;</span> <span class="token comment">// this se refiere a este objeto, a `obj`</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">this</span><span class="token punctuation">)</span>  <span class="token comment">// obj</span><br><br>  <span class="token keyword">var</span> <span class="token function-variable function">cambia</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span> <span class="token parameter">str</span> <span class="token punctuation">)</span><span class="token punctuation">{</span><br>   <span class="token keyword">this</span><span class="token punctuation">.</span>nombre <span class="token operator">=</span> str<span class="token punctuation">;</span>  <span class="token comment">// Uno esperaria que this sea `obj`</span><br>  <span class="token punctuation">}</span><br><br>  <span class="token function">cambia</span><span class="token punctuation">(</span><span class="token string">'Hoola!!'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">this</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span></code></pre>
<p>Si ejecutamos el código de arriba, vamos a notar que después de ejecutar el código, la propiedad <code>nombre</code> de <code>obj</code> contiene el valor <code>Cambiado</code> y no <code>'Hoola!!'</code>. Esto se debe a que el keyword <code>this</code> dentro de la función cambia <strong>NO hace referencia a <code>obj</code></strong>, si no que hace referencia al objeto global. De hecho, si buscamos dentro del objeto global la variable <code>nombre</code>, vamos a encontrar con el valor <code>'Hoola!!'</code> que seteamos con la función <code>cambia</code>. Esto quiere decir que no importa en donde estuvo declarada la función, si no <strong>cómo la invocamos</strong>.</p>
<p>Este comportamiento es considerado como un <code>bug</code> por mucha gente. Siempre hay que tener en mente, que JavaScript en sí es un programa codeado por personas, y que este mismo puede <em>tener bugs</em> como cualquier otro pedazo de código!.</p>
<blockquote>
<p>Prácticamente, no podemos saber a ciencia cierta que valor va a tomar el keyword hasta el momento de ejecución de una función. Porque depende fuertemente de cómo haya sido ejecutada.</p>
</blockquote>
<p>Para resolver este tipo de problemas existe un patrón muy común, y se basa en guardar la referencia al objeto que está en <code>this</code> antes de entrar a una función donde no sé a ciencia cierta que valor puede tomar <code>this</code>:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> obj <span class="token operator">=</span> <span class="token punctuation">{</span><br> <span class="token literal-property property">nombre</span><span class="token operator">:</span> <span class="token string">'Objeto'</span><span class="token punctuation">,</span><br> <span class="token function-variable function">log</span>   <span class="token operator">:</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br>  <span class="token keyword">this</span><span class="token punctuation">.</span>nombre <span class="token operator">=</span> <span class="token string">'Cambiado'</span><span class="token punctuation">;</span> <span class="token comment">// this se refiere a este objeto, a `obj`</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">this</span><span class="token punctuation">)</span>  <span class="token comment">// obj</span><br><br>  <span class="token keyword">var</span> that <span class="token operator">=</span> <span class="token keyword">this</span><span class="token punctuation">;</span> <span class="token comment">// Guardo la referencia a this</span><br><br>  <span class="token keyword">var</span> <span class="token function-variable function">cambia</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span> <span class="token parameter">str</span> <span class="token punctuation">)</span><span class="token punctuation">{</span><br>   that<span class="token punctuation">.</span>nombre <span class="token operator">=</span> str<span class="token punctuation">;</span>  <span class="token comment">// Uso la referencia dentro de esta funcion</span><br>  <span class="token punctuation">}</span><br><br>  <span class="token function">cambia</span><span class="token punctuation">(</span><span class="token string">'Hoola!!'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span><span class="token keyword">this</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br> <span class="token punctuation">}</span><br><span class="token punctuation">}</span></code></pre>
<p>De esta forma, <code>that</code> (puede tener cualquier nombre) va a apuntar al objeto <code>obj</code> (<code>this</code> apuntaba a ese objeto cuando hicimos la asignación). Ahora si, podemos usar <code>that</code> en vez de <code>this</code> y estar seguros qué es lo que va a tener adentro.</p>
<h2 id="immediately-invoked-functions-expressions-(iife)s" tabindex="-1">Immediately invoked functions expressions (IIFE)s <a class="anchor-link" href="#immediately-invoked-functions-expressions-(iife)s"></a></h2>
<p>Vamos a ver un concepto ampliamente usado por los desarrolladores de JavaScript, y ver cómo nos puede servir. Ya vimos la diferencia entre una <code>function statement</code> y una <code>function expression</code>. Tambien sabemos que las funciones son objetos, y que podemos invocarlas usando el operador <code>()</code>. Por lo tanto podemos hacer los siguiente:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">hola</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">return</span> <span class="token string">'hola'</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token comment">// ACA ESTOY INVOCANDO LA FUNCIÓN!.</span></code></pre>
<p>Lo que hicimos fue <em>invocar la función inmediatamente despues de escribir la expresión</em>, de ahi viene el nombre de IIFE.</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token keyword">var</span> <span class="token function-variable function">hola</span> <span class="token operator">=</span> <span class="token keyword">function</span><span class="token punctuation">(</span> <span class="token parameter">nombre</span> <span class="token punctuation">)</span><span class="token punctuation">{</span><br> <span class="token keyword">return</span> <span class="token string">'Hola '</span> <span class="token operator">+</span> nombre<span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">(</span><span class="token string">'Toni'</span><span class="token punctuation">)</span></code></pre>
<p>Podemos usar todo lo que sabemos de funciones con las IIFE, en el ejemplo de arriba la función recibe un parámetro, que se lo pasamos cuando la invocamos inmediatamente. Luego de ejecutar eso, la variable <code>hola</code> va a contener la string <code>Hola Toni</code>.</p>
<p>También podemos declarar funciones anónimas en una <code>function expression</code> y <strong>ejecutarla</strong> sin tener que guardarla en ningún lugar, la ejecutamos como si fuera cualquier expresión, para eso voy a tener que envolver la declaración de la función con <code>()</code> (de hecho lo hacemos para <em>engañar al syntax parser</em>):</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token punctuation">(</span><span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">nombre</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>nombre<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">(</span><span class="token string">'Toni'</span><span class="token punctuation">)</span><span class="token punctuation">)</span> <span class="token comment">// IIFE</span></code></pre>
<p>Este es el clásico ejemplo de una <em>IIFE</em>, este patrón lo vas a ver en casi todos las librerías y frameworks que hay hoy. Ya que nos permite ejecutar código <em>sobre la marcha</em>. Además, cuando llega a esa linea, y ejecuta esa función, el interprete invoca la función y por lo tanto crea un nuevo <em>contexto de ejecución</em> para ese código. Por lo tanto, las variables que declare adentro, van a estar viviendo en ese nuevo <em>contexto</em> y no en el <strong>contexto global</strong>. Esto último es lo más importante de este patrón, ya que nos crea un nuevo <em>namespace</em> sólo para nosotros y estamos seguros que no vamos a colisionar con variables que fueron declaradas en el contexto global por otras personas (Justamente por esto, los frameworks y librerías utilizan fuertemente este patrón).</p>
<p>A veces es necesario acceder al objeto global dentro de nuestra función. Lo que podemos hacer, es pasar una referencia al objeto global cuando invocamos nuestra función:</p>
<pre class="language-javascript"><code class="hljs language-javascript"><span class="token punctuation">(</span><span class="token keyword">function</span><span class="token punctuation">(</span><span class="token parameter">global<span class="token punctuation">,</span> nombre</span><span class="token punctuation">)</span><span class="token punctuation">{</span><br> console<span class="token punctuation">.</span><span class="token function">log</span><span class="token punctuation">(</span>nombre<span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">(</span>window<span class="token punctuation">,</span> <span class="token string">'Toni'</span><span class="token punctuation">)</span><span class="token punctuation">)</span> <span class="token comment">// IIFE</span></code></pre>
<p>De esta forma, tenemos acceso al objeto global y estamos protegidos de cualquier accidente. Nuestro código está a salvo!</p>
<h2 id="homework" tabindex="-1">Homework <a class="anchor-link" href="#homework"></a></h2>
<p>Completa la tarea descrita en el archivo <a href="https://github.com/soyHenry/FT-M1/tree/master/02-JavaScriptAvanzado-I/homework">README</a></p>

        </div>

      </main>

      
        <div class="feedback">
          <a href='https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=01-JavaScriptAvanzado-I' target="_blank">
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