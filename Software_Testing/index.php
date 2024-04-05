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
    <title>Software Testing | Módulo 1 - JavaScript</title>
    

    

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
        <a href="../Algoritmos_I/" class="nav-link" role="menuitem">Algoritmos I</a>
      </li>
<li class="link">
        <a href="../Algoritmos_II/" class="nav-link" role="menuitem">Algoritmos II</a>
      </li>
<li class="link">
        <span class="nav-link activeLink" tabindex="-1" aria-current="true">Testing</span>
      </li>
    </ul>
        </div>

        <div class='sidebar'>
          <div class="tocTitle">
            Contenido de la clase
            </div>
          <div class="tocBox">
            
            <nav class="toc" >
        <ul><li><a href="#qu%C3%A9-cosas-testear%3F-cuantos-tests-hacer%3F">Qué cosas testear? Cuantos tests hacer? </a></li><li><a href="#unit-testing">Unit Testing </a><ul><li><a href="#ventajas">Ventajas </a></li></ul></li><li><a href="#integration-test">Integration Test </a></li><li><a href="#end-to-end-tests">End to End Tests </a></li><li><a href="#test-driven-development">Test Driven Development </a></li><li><a href="#testing-frameworks">Testing Frameworks </a></li><li><a href="#jest">JEST </a><ul><li><a href="#configuraci%C3%B3n">Configuración </a></li><li><a href="#ejemplo-(est%C3%A1-dentro-de-la-carpeta-demo)">Ejemplo (Está dentro de la carpeta demo) </a></li><li><a href="#matchers">Matchers </a></li><li><a href="#running-options">Running Options </a></li></ul></li><li><a href="#homework">Homework </a></li></ul>
      </nav>
          </div>
        </div>

        <div class='rightBox'>
          <div class="readingTime">
                    Tiempo de lectura 24 min
          </div>
          

          
            <div class='homeworkBox'>
              <a href=https://github.com/soyHenry/FT-M1/tree/master/EXTRA-Testing/homework target='blank'>Homework 📝</a>
            </div>
          
        </div>

        <div class='lesson'>
          
          <p><img src="https://d31uz8lwfmyn8g.cloudfront.net/Assets/logo-henry-white-lg.png" alt="HenryLogo"></p>
<table class="hide" width="100%" style='table-layout:fixed;'>
  <tr>
    <td>
      <a href="https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=EXTRA-Testing">
        <img src="https://static.thenounproject.com/png/204643-200.png" width="100"/>
        <br>
        Hacé click acá para dejar tu feedback sobre esta clase.
      </a>
    </td>
  </tr>
</table>
<h1 id="software-testing" tabindex="-1">Software Testing <a class="anchor-link" href="#software-testing"></a></h1>
<p>Cuando pensamos en testing en software, pensamos en algo que nos de garantías de que la aplicación que estamos construyendo funcione bien. Además de que funcionen bien en nuestra compu, nos vamos a asegurar que cuando lo deployemos (veremos esto más adelante), también funcionen en el destino o que si fallan algunos tests directamente no lleguen las nuevas actualizaciones al servidor de producción, por ejemplo.<br>
Tambien podemos hacer del testing una <em>filosofía de vida</em> cómo veremos más abajo, pero en general testear bien nuestra aplicación nos da más que sólo garantías, nos proveen una documentación viva de nuestro código.</p>
<h2 id="qu%C3%A9-cosas-testear%3F-cuantos-tests-hacer%3F" tabindex="-1">Qué cosas testear? Cuantos tests hacer? <a class="anchor-link" href="#qu%C3%A9-cosas-testear%3F-cuantos-tests-hacer%3F"></a></h2>
<p>Las respuestas a estas preguntas van a variar según el proyecto que estén haciendo y sus necesidades, pero en general pueden seguir las <strong>guidelines</strong> seteadas en la siguiente <em>pirámide</em>:</p>
<p><img src="../_src/assets/EXTRA-Testing/piramide.png" alt="Piramide"></p>
<p>En la pirámide vemos los tipos de pruebas y la cantidad de ellas que debemos hacer en nuestra aplicación. En general la mayoría de los tests que hagamos va a ser de tipo <strong>unit tests</strong>, en segundo lugar <strong>Integration Tests</strong> y por último <strong>End-to_End</strong>. Veremos cada uno de estos tipos de tests en detalle.</p>
<h2 id="unit-testing" tabindex="-1">Unit Testing <a class="anchor-link" href="#unit-testing"></a></h2>
<p>Un test unitario o <em>unit test</em> es un pedazo de código automático que invoca a una <strong>unidad de trabajo</strong> del sistema y chequea que el resultado de esa unidad sea el esperado.<br>
Una <strong>unidad de trabajo</strong> es cualquier función lógica del sistema que no pueda ser separada en piezas más pequeñas y que puede ser invocada por alguna otra interfaz. Esta unidad puede ser sólo un método, o el comportamiento de una clase entera, o el comportamiento de varias clases interactuando entre ellas para lograr un próposito, que puede ser verificado.</p>
<p>La presencia de <em>tests unitarios</em> habla de que el software fue construido (de alguna manera) de forma <em>modular</em>. Cuando escuches que alguien dice que <em>el software debería ser más <strong>testeable</strong></em> se refiere a esto.</p>
<p>Un buen test unitario debería ser:</p>
<ul>
<li>Completamente automatizable</li>
<li>Poder ejecutarse en cualquier orden en conjunto con otroso tests.</li>
<li><strong>Siempre</strong> retorna el mismo resultado, no importa cuantas veces lo corra.</li>
<li>Es rápido</li>
<li>Testea un solo concepto lógico del sistema</li>
<li>Es fácil de entender al leerlo</li>
<li>Es fácil de mantener</li>
</ul>
<blockquote>
<p>Si cuando estamos escribiendo los tests nos damos cuenta que tenemos que crear muchos <a href="http://stackoverflow.com/questions/2665812/what-is-mocking">mockups</a>, es una señal que nuestro diseño no es muy modular, y que tal vez se puede mejorar.</p>
</blockquote>
<h3 id="ventajas" tabindex="-1">Ventajas <a class="anchor-link" href="#ventajas"></a></h3>
<p>Obviamente, armar todos los tests y correrlos (y pasarlos todos!) nos puede poner un overhead en nuestro proyecto.</p>
<p><img src="../_src/assets/EXTRA-Testing/testOverhead.jpg" alt="Test Overhead"></p>
<p>Si el proyecto es chico, entonces podemos probar todo a mano y darnos cuenta rápido si un cambio afecta o no a las demás partes de la aplicación, pero a medida que el proyecto va a creciendo, se hace más complicado probar todo manualmente y más time-consuming. En esos casos hacer Units Tests automáticos nos va a brindar los siguientes beneficios:</p>
<ul>
<li>Nos va a permitir hacer cambios grandes en el código rápidamente. Cuando los hacemos, corremos los tests de nuevo y vemos rápidamente si todo funciona bien o no. Nos puede salvar varias horas de debugeo.</li>
<li>Nos da un límite para decidir cuando una funcionalidad está terminada o no. Si pasa el test, entonces pasamos a la siguiente feature.</li>
<li>Tenés feedback inmediato de tu código, podés ver examente donde está fallando y hasta usar eso para continuar trabajando donde dejaste la última vez.</li>
<li>Si ya tenés experiencia armando tests, vas a poder codear más rápido, ya que tenés en la cabeza exactamente qué queres lograr antes de empezar a codear.</li>
<li>Si tenés buenos tests definidos, estás muy cerca de tener una buena documentación, ya que en los tests implicitamente estás diciendo qué debería hacer cada cosa.</li>
<li>Te va a ayudar a reutilizar tu código en otro proyecto. Cuando empezas un proyecto nuevo, llevá tu código y tus tests, refactorizá el código en el nuevo proyecto hasta que los tests pasen de nuevo! :smile:</li>
</ul>
<h2 id="integration-test" tabindex="-1">Integration Test <a class="anchor-link" href="#integration-test"></a></h2>
<p>Estos tests prueban el funcionamiento de distintas unidades combinadas, por ejemplo la interacción entre un módulo y sus dependencias.</p>
<h2 id="end-to-end-tests" tabindex="-1">End to End Tests <a class="anchor-link" href="#end-to-end-tests"></a></h2>
<p>Estos tests sirven para probar la aplicación en su totalidad, es decir, usarla como si fueras el usuario final y probar si todo está funcionando bien. Por ejemplo, si estuvieramos trabajando en un eCommerce, probariamos si podemos loaguearnos, buscar un producto, agregarlo al carrito, y comprarlo!</p>
<h2 id="test-driven-development" tabindex="-1">Test Driven Development <a class="anchor-link" href="#test-driven-development"></a></h2>
<p>Test Driven Development (TDD) es una técnica para construir software que se basa en escribir tests. Básicamente consiste en el siguiente ciclo:</p>
<p><img src="../_src/assets/EXTRA-Testing/TDD.png" alt="TDD"></p>
<ul>
<li><strong>Agregá un test nuevo</strong>: En TDD, para cada nueva feature vas a escribir un nuevo test, para hacerlo el desarrollador está obligado a conocer en detalle las especificaciones y requerimientos de esa feature. Esto es clave y es el gran diferenciador entre escribir el <em>test</em> <strong>después</strong> que hayas escrito el código, de esta forma tenés todo definido antes de empezar por la primera línea de código.</li>
<li><strong>Corré todos los test y fijate si el nuevo falla</strong>: Si ya teniamos otros tests, antes de empezar a codear nos fijamos si realmente el nuevo test NO pasa. En caso contrario estariamos implementando funcionalidad que ya está definida o funcionalidad que no sirve, o tal vez el test esté mal escrito.</li>
<li><strong>Escribí el código</strong>: Ahora sí, empezamos a escribir código de tal manera que logremos que el test pase. En esta etapa no importa la elegancia del código, sólo queremos pasar el test!</li>
<li><strong>Corré los tests</strong>: Si todos los test corren, incluido el nuevo, el desarrollador está seguro que el nuevo código cumple con los requerimientos de la funcionalidad y además que los nuevos cambios no rompen ninguna otra feature ya existente. Si no pasan, hay que volver al punto 4!</li>
<li><strong>Refactoreá el código</strong>: Una vez que hayamos pasado el test, vamos a refactorear el código para que sean lo más legibles y performantes posibles, y que mantengan la convención de nombres y patrones que todo el proyecto.</li>
<li><strong>Repetí</strong>: Ahora pasamos a un nuevo test, es decir vamos a agregar un nuevo feature o funcionalidad y vamos a empezar desde el primer paso!</li>
</ul>
<p>Como siempre, existen variaciones sobre este <em>standart</em>, de hecho hay dos grandes concepciones, la de codear primero y escribir los test despues, o al reves. Si escribimos los  <em>units tests</em> primero y una vez que terminamos empezamos a codear el nuevo feature  nos aseguramos que entendemos bien el problema antes de empezar a codear la solución.</p>
<h2 id="testing-frameworks" tabindex="-1">Testing Frameworks <a class="anchor-link" href="#testing-frameworks"></a></h2>
<p>Existen muchas herramientas que nos van a ayudar a automatizar la creación, ejecución y control de los tests unitarios. De hecho, exiten herramientas que sirven como ‘ambientes’ de prueba, y con ellas vamos a poder armar el workflow de tests (agrupar tests, ejecutar los tests automáticamente antes de hacer un deployment, etc…) y tambien existen librerías de <em>Aserción</em> (assertion), que nos van a servir para comprobar si el output esperado de una función condice con el output real.</p>
<blockquote>
<p>En programación una <em>aserción</em> o <em>assertion</em> es un predicado (expresión que devuelve verdadero o falso), incluido en un programa y que generalmente compara el resultado o el estado esperado de algo contra el real en el momento de ejecución.</p>
</blockquote>
<p>Hay muchos tipos de frameworks de pruebas y también librerías de assertion, nosotros vamos a usar <code>Jest</code>.</p>
<h2 id="jest" tabindex="-1"><a href="https://jestjs.io/">JEST</a> <a class="anchor-link" href="#jest"></a></h2>
<p>JEST es un framework de testing de fácil uso pero a la vez con muchisimas posibilidades. Viene con una librería de assertion integrada por lo que no tendremos que configurar ninguna.</p>
<h3 id="configuraci%C3%B3n" tabindex="-1">Configuración <a class="anchor-link" href="#configuraci%C3%B3n"></a></h3>
<p>Para comenzar a utilizar JEST basta con:</p>
<ul>
<li>
<p>Instalar la dependencia: <code>npm install --save-dev jest</code></p>
</li>
<li>
<p>Ejecutar <code>jest</code> o sino agregar script al package.json:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token string-property property">"scripts"</span><span class="token operator">:</span> <span class="token punctuation">{</span><br>  <span class="token string-property property">"test"</span><span class="token operator">:</span> <span class="token string">"jest"</span><br><span class="token punctuation">}</span></code></pre>
</li>
</ul>
<p>Luego ejecutamos <code>npm test</code> y ya estaríamos corriendo los tests, como inicialmente no vamos a tener ninguno por consola nos dirá que no ha encontrado tests. En breve explicaremos como armar nuestro primer archivo de test pero antes, el comando jest admite muchas opciones o flags entre los cuales vamos a mencionar los siguientes:</p>
<ul>
<li>Correr solo los archivos de tests que matcheen con determinado patron dentro de su nombre: <code>jest test-pattern</code></li>
<li>Correr un determinado archivo de test mediante su path: <code>jest path/to/test.js</code></li>
<li>Correr solo UN test mediante su nombre (Ya veremos como definir nombre para los tests): <code>jest -t name-spec</code></li>
<li>Correr en modo ‘watcher’: <code>jest --watch</code> o <code>jest --watchAll</code> (El primero solo correra los tests que fueron afectados por alguna modificación desde la última vez que hicimos cambio en el código)</li>
<li>Agregar un resumen de cada archivo de test: <code>jest --verbose</code> (En el caso de ser un único archivo automáticamente lo hace sin necesidad del flag)</li>
</ul>
<h3 id="ejemplo-(est%C3%A1-dentro-de-la-carpeta-demo)" tabindex="-1">Ejemplo (Está dentro de la carpeta demo) <a class="anchor-link" href="#ejemplo-(est%C3%A1-dentro-de-la-carpeta-demo)"></a></h3>
<p>Estos archivos ya se encuentran creados dentro de la carpeta demo pero si quieren hacerlo de cero en otro lado para practicar pueden hacerlo.</p>
<p>Crearemos un archivo <code>sum.js</code> y dentro de él una función <code>sum</code> que la exportaremos para poder utilizarla luego en el archivo de tests:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token keyword">function</span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token parameter">a<span class="token punctuation">,</span> b</span><span class="token punctuation">)</span> <span class="token punctuation">{</span><br>  <span class="token keyword">return</span> a <span class="token operator">+</span> b<span class="token punctuation">;</span><br><span class="token punctuation">}</span><br><br>module<span class="token punctuation">.</span>exports <span class="token operator">=</span> sum<span class="token punctuation">;</span></code></pre>
<p>Luego crearemos otro archivo, <code>sum.test.js</code> donde definiremos los tests que luego ejecutará JEST:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token keyword">const</span> sum <span class="token operator">=</span> <span class="token function">require</span><span class="token punctuation">(</span><span class="token string">'./sum'</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><br><span class="token comment">// it === test</span><br><span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should return 8 if adding 3 and 5'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>  <span class="token function">expect</span><span class="token punctuation">(</span><span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span> <span class="token number">5</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toBe</span><span class="token punctuation">(</span><span class="token number">8</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><br><span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should return 15 if adding 7 and 8'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>  <span class="token function">expect</span><span class="token punctuation">(</span><span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">7</span><span class="token punctuation">,</span> <span class="token number">8</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toBe</span><span class="token punctuation">(</span><span class="token number">15</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Si ahora ejecutamos <code>npm test</code> (Configurar previamente el package.json como mostramos antes) debería ejecutarse los tests.</p>
<p><img src="../_src/assets/EXTRA-Testing/demo-test.png" alt="Demo Test"></p>
<p>Si analizamos la estructura del ejemplo anterior usamos algunas palabras que hasta hoy no conociamos, como por ejemplo <code>it</code>, <code>expect</code> y <code>toBe</code>.</p>
<p>Entendamos para que sirve cada uno de ellas:</p>
<ul>
<li><code>it</code> o <code>test</code>: nos permiten definir un nuevo test</li>
<li><code>expect</code>: función de JEST que va a devolver un “expectatio” object sobre el cual luego podremos invocar algunos <code>matchers</code>. Explicado más sencillo es lo que estamos ejecutando para probar, por ejemplo <code>sum(3,5)</code> arriba estariamos probando la función que creamos pasandole esos dos parámetros y sobre la respuesta vemos si se cumple la condición que queremos o no.</li>
<li><code>toBe</code>: es un matcher propio de JEST (no es el único de hecho ahora vamos a ver otros) que nos permite hacer una comparación exacta, en este ejemplo entre lo que devolvió la funcion <code>sum(3,5)</code> y el valor numérico 8. Si coinciden el test va a pasar y sino no.</li>
</ul>
<h3 id="matchers" tabindex="-1">Matchers <a class="anchor-link" href="#matchers"></a></h3>
<p>JEST tiene distintos matchers para realizar distintas validaciones sobre las funcionalidades que queremos probar:</p>
<ul>
<li><code>toBe</code>: igualdad exacta</li>
<li><code>toEqual</code>: verificación recursiva de cada propiedad del objeto o elemento del arreglo</li>
<li><code>toBeNull</code>: verifica que el valor sea null</li>
<li><code>toBeUndefined</code>: verifica que el valor sea undefined</li>
<li><code>toBeDefined</code>: verifica que el valor sea distinto de undefined</li>
<li><code>toBeTruthy</code>: verifica que el valor de veracidad sea verdadero sin necesariamente ser literalmente <code>true</code></li>
<li><code>toBeFalse</code>: verifica que el valor de veracidad sea falso sin necesariamente ser literalmente <code>false</code></li>
<li><code>toBeGreaterThan</code>: verifica que el valor sea mayor al de referencia</li>
<li><code>toBeGreaterThanOrEqual</code>: verifica que el valor sea mayor o igual al de referencia</li>
<li><code>toBeLessThan</code>: verifica que el valor sea menor al de referencia</li>
<li><code>toBeLessThanOrEqual</code>: verifica que el valor sea menor o igual al de referencia</li>
<li><code>toBeCloseTo</code>: verifica que el número este a pocos decimales de diferencia del valor de referencia</li>
<li><code>toMatch</code>: compara contra una expresión regular</li>
<li><code>toContain</code>: verifica si dentro de un arreglo existe determinado elemento</li>
<li><code>toThrow</code>: verifica si la función arroja un error</li>
</ul>
<p>No son los únicos, existen más que pueden consultar en la <a href="https://jestjs.io/docs/expect">documentación oficial de JEST</a>.<br>
Adicionalmente algunos de estos matchers mencionados arriba se encuentran en la demo <code>matchers.test.js</code> para que puedan ver como utilizarlos con ejemplos.</p>
<h3 id="running-options" tabindex="-1">Running Options <a class="anchor-link" href="#running-options"></a></h3>
<h4 id="describe" tabindex="-1">describe <a class="anchor-link" href="#describe"></a></h4>
<p>Podemos también agrupar tests en “categorías” utilizando la palabra <code>describe</code>, por ejemplo siguiendo el ejemplo anterior de la suma podríamos tener casos con numeros enteros, otros con números decimales y otro con inputs inválidos:</p>
<p><img src="../_src/assets/EXTRA-Testing/describe-demo.png" alt="Describe Demo"></p>
<p>Es posible armar también subcategorias poniendo describes dentro de otros describes.</p>
<h4 id="skip-tests" tabindex="-1">Skip Tests <a class="anchor-link" href="#skip-tests"></a></h4>
<p>En el caso de que algunos tests no queramos que se ejecuten podemos saltearlos de forma individual colocando <code>xit</code> en vez de <code>it</code> cuando son definidos en el archivo de tests o sino podemos incluso saltear todo un <code>describe</code> completo colocando <code>xdescribe</code>.</p>
<p>Por ejemplo en el archivo <code>sum-describe.test.js</code> de la carpeta demo podríamos modificar alguns tests para que no se ejecuten:</p>
<pre class="language-js"><code class="hljs language-js"><span class="token function">describe</span><span class="token punctuation">(</span><span class="token string">'Decimal numbers'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>  <span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should return 8.33 if adding 3.32 and 5.01'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">3.32</span><span class="token punctuation">,</span> <span class="token number">5.01</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toBe</span><span class="token punctuation">(</span><span class="token number">8.33</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <br>  <span class="token function">xit</span><span class="token punctuation">(</span><span class="token string">'should return 15.82 if adding 7.72 and 8.1'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">7.72</span><span class="token punctuation">,</span> <span class="token number">8.1</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toBe</span><span class="token punctuation">(</span><span class="token number">15.82</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><br><span class="token function">xdescribe</span><span class="token punctuation">(</span><span class="token string">'Invalid inputs'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>  <span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should throw an TypeError if first parameter is not a number'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token string">'Franco'</span><span class="token punctuation">,</span> <span class="token number">5</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toThrow</span><span class="token punctuation">(</span>TypeError<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <br>  <span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should throw an TypeError if second parameter is not a number'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span> <span class="token boolean">true</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toThrow</span><span class="token punctuation">(</span>TypeError<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Si observamos ahora la ejecución del comando <code>npm test sum-describe</code> veremos que el segundo test del describe de ‘Decimal numbers’ y todo el describe de ‘Invalid inputs’ no se van a ejecutar:</p>
<p><img src="../_src/assets/EXTRA-Testing/skip.png" alt="Skip"></p>
<h4 id="only" tabindex="-1">only <a class="anchor-link" href="#only"></a></h4>
<p>Hay casos en los que solamente queremos probar un tests para evitar que la consola se nos llene de código que no nos estaría interesando en ese momento, para esto JEST tien también una opcion <code>only</code> para ejecutar únicamente un test de toda la suite de tests. Volviendo al ejemplo anterior, si solo quisieramos ejecutar el test <code>should throw an TypeError if first parameter is not a number</code> podríamos colocarle <code>it.only</code> (Para probarlos en la demo saquen los <code>xit</code> y <code>xdescribe</code>).</p>
<pre class="language-js"><code class="hljs language-js"><span class="token operator">...</span><br><br><span class="token function">describe</span><span class="token punctuation">(</span><span class="token string">'Invalid inputs'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>  it<span class="token punctuation">.</span><span class="token function">only</span><span class="token punctuation">(</span><span class="token string">'should throw an TypeError if first parameter is not a number'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token string">'Franco'</span><span class="token punctuation">,</span> <span class="token number">5</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toThrow</span><span class="token punctuation">(</span>TypeError<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <br>  <span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should throw an TypeError if second parameter is not a number'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span> <span class="token boolean">true</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toThrow</span><span class="token punctuation">(</span>TypeError<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p>Ahora al ejecutar <code>npm test sum-describe</code> veremos que todo el resto de los tests fueron salteados:</p>
<p><img src="../_src/assets/EXTRA-Testing/it-only.png" alt="it only"></p>
<p>Lo mismo se puede aplicar sobre los <code>describe</code> para ejecutar únicamente un grupo de tests.</p>
<pre class="language-js"><code class="hljs language-js"><span class="token operator">...</span><br><br>describe<span class="token punctuation">.</span><span class="token function">only</span><span class="token punctuation">(</span><span class="token string">'Invalid inputs'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>  <span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should throw an TypeError if first parameter is not a number'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token string">'Franco'</span><span class="token punctuation">,</span> <span class="token number">5</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toThrow</span><span class="token punctuation">(</span>TypeError<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <br>  <span class="token function">it</span><span class="token punctuation">(</span><span class="token string">'should throw an TypeError if second parameter is not a number'</span><span class="token punctuation">,</span> <span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token punctuation">{</span><br>    <span class="token function">expect</span><span class="token punctuation">(</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token operator">=></span> <span class="token function">sum</span><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span> <span class="token boolean">true</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">toThrow</span><span class="token punctuation">(</span>TypeError<span class="token punctuation">)</span><span class="token punctuation">;</span><br>  <span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span><br><span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
<p><img src="../_src/assets/EXTRA-Testing/describe-only.png" alt="describe only"></p>
<h2 id="homework" tabindex="-1">Homework <a class="anchor-link" href="#homework"></a></h2>
<p>Completa la tarea descrita en el archivo <a href="https://github.com/soyHenry/FT-M1/blob/master/EXTRA-Testing/homework/README.md">README</a></p>

        </div>

      </main>

      
        <div class="feedback">
          <a href='https://airtable.com/shr5KEX8NFdrG14j9?prefill_clase=EXTRA-Testing' target="_blank">
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