import lazysizes from 'lazysizes';

document.documentElement.className += ' js'; // adds class="js" to <html> element

function debounce(fn, ms) { // https://remysharp.com/2010/07/21/throttling-function-calls
    var time = null;
    return function() {
        var a = arguments, t = this;
        clearTimeout(time);
        time = setTimeout(function() { fn.apply(t, a); }, ms);
    }
}


function throttle(fn, ms) { // Ryan Taylor comment - https://remysharp.com/2010/07/21/throttling-function-calls
    var time, last = 0;
    return function() {
        var a = arguments, t = this, now = +(new Date), exe = function() { last = now; fn.apply(t, a); };
        clearTimeout(time);
        (now >= last + ms) ? exe() : time = setTimeout(exe, ms);
    }
}


function hasClass(el, cls) {
    if (el.className.match('(?:^|\\s)'+cls+'(?!\\S)')) { return true; }
}

function addClass(el, cls) {
    if (!el.className.match('(?:^|\\s)'+cls+'(?!\\S)')) { el.className += ' '+cls; }
}

function delClass(el, cls) {
    el.className = el.className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
}

function toggleClass(el, cls) {
    if ( hasClass(el, cls) ) {
        delClass(el, cls);
    } else {
        addClass(el, cls);
    }
}
