/* -*- Mode: Javascript; indent-tabs-mode:nil; js-indent-level: 2 -*- */
/* vim: set ts=2 et sw=2 tw=80: */

/*************************************************************
 *
 *  MathJax/config/local/local.js
 *  
 *  Include changes and configuration local to your installation
 *  in this file.  For example, common macros can be defined here
 *  (see below).  To use this file, add "local/local.js" to the
 *  config array in MathJax.js or your MathJax.Hub.Config() call.
 *
 *  ---------------------------------------------------------------------
 *  
 *  Copyright (c) 2009-2017 The MathJax Consortium
 * 
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
var scriptFilename = 'mathjax-config.js'; // don't forget to set the filename 
var scriptUrl = (function() {
    if (document.currentScript) { // support defer & async (mozilla only)
        return document.currentScript.src;
    } else {
        var ls,s;
        var getSrc = function (ls, attr) {
            var i, l = ls.length, nf, s;
            for (i = 0; i < l; i++) {
                s = null;
                if (ls[i].getAttribute.length !== undefined) { 
                    s = ls[i].getAttribute(attr, 2);                    
                }               
                if (!s) continue; // tag with no src
                nf = s;
                nf = nf.split('?')[0].split('/').pop(); // get script filename
                if (nf === scriptFilename) {
                    return s;
                }
            }
        };          
        ls = document.getElementsByTagName('script');
        s = getSrc(ls, 'src');
        if ( !s ) { // search reference of script loaded by jQuery.getScript() in meta[name=srcipt][content=url]
            ls = document.getElementsByTagName('meta');             
            s = getSrc(ls, 'content');
        }           
        if ( s ) return s;
    }
    return '';
})();

var jsurl =  scriptUrl.substring(0, scriptUrl.lastIndexOf('/'))+"/";



MathJax.Ajax.config.path["Contrib"] = jsurl + "mathjax-contrib/";
MathJax.Ajax.config.path["jsRoot"] = jsurl;

 MathJax.Hub.Config({
  jax: ["input/TeX","input/MathML","output/HTML-CSS","output/NativeMML", "output/PreviewHTML"],
  extensions: ["tex2jax.js","mml2jax.js","MathMenu.js","MathZoom.js", "fast-preview.js", "AssistiveMML.js", "a11y/accessibility-menu.js", 
  			   "[Contrib]/counters.js", "[Contrib]/knowl.js", "[Contrib]/siunitx/siunitx.js" ],
  TeX: {
    extensions: ["AMSmath.js","AMSsymbols.js","noErrors.js","noUndefined.js","sinuitx.js"]
  }
});


MathJax.Hub.Register.StartupHook("TeX Jax Ready",function () {
  var TEX = MathJax.InputJax.TeX;

  // place macros here.  E.g.:
  //   TEX.Macro("R","{\\bf R}");
  //   TEX.Macro("op","\\mathop{\\rm #1}",1); // a macro with 1 parameter
  
});

MathJax.Ajax.loadComplete("[jsRoot]/config/local/local.js");

