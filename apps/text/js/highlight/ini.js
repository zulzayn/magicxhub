(window.textWebpackJsonp=window.textWebpackJsonp||[]).push([[82],{521:function(n,e,s){"use strict";function a(n){return n?"string"==typeof n?n:n.source:null}function i(...n){return n.map(n=>a(n)).join("")}n.exports=function(n){const e={className:"number",relevance:0,variants:[{begin:/([+-]+)?[\d]+_[\d_]+/},{begin:n.NUMBER_RE}]},s=n.COMMENT();s.variants=[{begin:/;/,end:/$/},{begin:/#/,end:/$/}];const t={className:"variable",variants:[{begin:/\$[\w\d"][\w\d_]*/},{begin:/\$\{(.*?)\}/}]},c={className:"literal",begin:/\bon|off|true|false|yes|no\b/},r={className:"string",contains:[n.BACKSLASH_ESCAPE],variants:[{begin:"'''",end:"'''",relevance:10},{begin:'"""',end:'"""',relevance:10},{begin:'"',end:'"'},{begin:"'",end:"'"}]},o={begin:/\[/,end:/\]/,contains:[s,c,t,r,e,"self"],relevance:0},l=function(...n){return"("+n.map(n=>a(n)).join("|")+")"}(/[A-Za-z0-9_-]+/,/"(\\"|[^"])*"/,/'[^']*'/);return{name:"TOML, also INI",aliases:["toml"],case_insensitive:!0,illegal:/\S/,contains:[s,{className:"section",begin:/\[+/,end:/\]+/},{begin:i(l,"(\\s*\\.\\s*",l,")*",i("(?=",/\s*=\s*[^#\s]/,")")),className:"attr",starts:{end:/$/,contains:[s,o,c,t,r,e]}}]}}}}]);
//# sourceMappingURL=ini.js.map?v=a4f320b3d50bcb50146c