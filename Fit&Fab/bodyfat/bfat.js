// Body Fat Calculator
// copyright 23rd April 2006, 21 January 2014 by Stephen Chapman
// permission to use this Javascript on your web page is granted
// provided that all of the code in this script (including these
// comments) is used without any alteration
(function() {
"use strict";
var valButton, calc, maleFat, femaleFat, thou, sex;
valButton = function(btn) {
var i, cnt;
cnt = -1;
for (i=btn.length-1; i > -1; i--) {
   if (btn[i].checked) {cnt = i; i = -1;}}
if (cnt > -1) return btn[cnt].value;
else return null;
};

maleFat = function(h,n,w) {
return thou(495/(1.0324-0.19077*(Math.log(w-n)/Math.LN10)+0.15456*(Math.log(h)/Math.LN10))-450);
};
femaleFat = function(h,n,w,r) {
return thou(495/(1.29579-0.35004*(Math.log(w+r-n)/Math.LN10)+0.22100*(Math.log(h)/Math.LN10))-450);
};
thou = function(n) {
return Math.round(n*10)/10+'%';
};
sex = function(thisform) {
var s = valButton(thisform.s);
thisform.r.disabled = (s != 'f');
};

calc = function(thisform) {
var s, d, dm, cv, h, n, w, r;
s = valButton(thisform.s);
d = valButton(thisform.d);
dm = document.getElementsByTagName('span')[0];
dm.innerHTML = '';
thisform.f.value = '';
if (s == null) {dm.innerHTML = 'Choose Male or Female';return false;}
if (d == null) {dm.innerHTML = 'Choose Centimetres or Inches';return false;}
h = thisform.h.value.trim();
if (h == '') {dm.innerHTML = 'Enter your height';thisform.h.focus();return false;}
if ((h != +h) || (h = h*d) < 100 || h > 250) {dm.innerHTML = 'Invalid height entered';thisform.h.focus();return false;}
n = thisform.n.value.trim();
if (n == '') {dm.innerHTML = 'Enter your neck size';thisform.n.focus();return false;}
if ((n != +n) || (n =n*d) < 20 || n > 60) {dm.innerHTML = 'Invalid neck size entered';thisform.n.focus();return false;} 
w = thisform.w.value.trim();
if (w == '') {dm.innerHTML = 'Enter your waist size';thisform.w.focus();return false;}
if ((w != +w) || (w =w*d) < 30 || w > h) {dm.innerHTML = 'Invalid weight entered';thisform.w.focus();return false;}
if (s == 'f') {
r = thisform.r.value.trim();
if (r == '') {dm.innerHTML = 'Enter your hip size';thisform.r.focus();return false;}
if ((r != +r) || (r =r*d) < 40 || r > 200) {dm.innerHTML = 'Invalid hip size entered';thisform.r.focus();return false;} 
thisform.f.value = femaleFat(h,n,w,r);
} else thisform.f.value = maleFat(h,n,w);
};
document.getElementById('bfats1').onclick= function() {sex(this.form);};
document.getElementById('bfats2').onclick= function() {sex(this.form);};
document.getElementById('bfatbutton').onclick= function() {calc(this.form);return false;};
})();
