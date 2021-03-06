// scrollToFixed

(function (a) {
    a.isScrollToFixed = function (b) {
        return !!a(b).data("ScrollToFixed")
    };
    a.ScrollToFixed = function (d, i) {
        var m = this;
        m.$el = a(d);
        m.el = d;
        m.$el.data("ScrollToFixed", m);
        var c = false;
        var H = m.$el;
        var I;
        var F;
        var k;
        var e;
        var z;
        var E = 0;
        var r = 0;
        var j = -1;
        var f = -1;
        var u = null;
        var A;
        var g;

        function v() {
            H.trigger("preUnfixed.ScrollToFixed");
            l();
            H.trigger("unfixed.ScrollToFixed");
            f = -1;
            E = H.offset().top;
            r = H.offset().left;
            if (m.options.offsets) {
                r += (H.offset().left - H.position().left)
            }
            if (j == -1) {
                j = r
            }
            I = H.css("position");
            c = true;
            if (m.options.bottom != -1) {
                H.trigger("preFixed.ScrollToFixed");
                x();
                H.trigger("fixed.ScrollToFixed")
            }
        }

        function o() {
            var J = m.options.limit;
            if (!J) {
                return 0
            }
            if (typeof (J) === "function") {
                return J.apply(H)
            }
            return J
        }

        function q() {
            return I === "fixed"
        }

        function y() {
            return I === "absolute"
        }

        function h() {
            return !(q() || y())
        }

        function x() {
            if (!q()) {
                var J = H[0].getBoundingClientRect();
                u.css({display: H.css("display"), width: J.width, height: J.height, "float": H.css("float")});
                cssOptions = {
                    "z-index": m.options.zIndex,
                    position: "fixed",
                    top: m.options.bottom == -1 ? t() : "",
                    bottom: m.options.bottom == -1 ? "" : m.options.bottom,
                    "margin-left": "0px"
                };
                if (!m.options.dontSetWidth) {
                    cssOptions.width = H.css("width")
                }
                H.css(cssOptions);
                H.addClass(m.options.baseClassName);
                if (m.options.className) {
                    H.addClass(m.options.className)
                }
                I = "fixed"
            }
        }

        function b() {
            var K = o();
            var J = r;
            if (m.options.removeOffsets) {
                J = "";
                K = K - E
            }
            cssOptions = {position: "absolute", top: K, left: J, "margin-left": "0px", bottom: ""};
            if (!m.options.dontSetWidth) {
                cssOptions.width = H.css("width")
            }
            H.css(cssOptions);
            I = "absolute"
        }

        function l() {
            if (!h()) {
                f = -1;
                u.css("display", "none");
                H.css({"z-index": z, width: "", position: F, left: "", top: e, "margin-left": ""});
                H.removeClass("scroll-to-fixed-fixed");
                if (m.options.className) {
                    H.removeClass(m.options.className)
                }
                I = null
            }
        }

        function w(J) {
            if (J != f) {
                H.css("left", r - J);
                f = J
            }
        }

        function t() {
            var J = m.options.marginTop;
            if (!J) {
                return 0
            }
            if (typeof (J) === "function") {
                return J.apply(H)
            }
            return J
        }

        function B() {
            if (!a.isScrollToFixed(H) || H.is(":hidden")) {
                return
            }
            var M = c;
            var L = h();
            if (!c) {
                v()
            } else {
                if (h()) {
                    E = H.offset().top;
                    r = H.offset().left
                }
            }
            var J = a(window).scrollLeft();
            var N = a(window).scrollTop();
            var K = o();
            if (m.options.minWidth && a(window).width() < m.options.minWidth) {
                if (!h() || !M) {
                    p();
                    H.trigger("preUnfixed.ScrollToFixed");
                    l();
                    H.trigger("unfixed.ScrollToFixed")
                }
            } else {
                if (m.options.maxWidth && a(window).width() > m.options.maxWidth) {
                    if (!h() || !M) {
                        p();
                        H.trigger("preUnfixed.ScrollToFixed");
                        l();
                        H.trigger("unfixed.ScrollToFixed")
                    }
                } else {
                    if (m.options.bottom == -1) {
                        if (K > 0 && N >= K - t()) {
                            if (!L && (!y() || !M)) {
                                p();
                                H.trigger("preAbsolute.ScrollToFixed");
                                b();
                                H.trigger("unfixed.ScrollToFixed")
                            }
                        } else {
                            if (N >= E - t()) {
                                if (!q() || !M) {
                                    p();
                                    H.trigger("preFixed.ScrollToFixed");
                                    x();
                                    f = -1;
                                    H.trigger("fixed.ScrollToFixed")
                                }
                                w(J)
                            } else {
                                if (!h() || !M) {
                                    p();
                                    H.trigger("preUnfixed.ScrollToFixed");
                                    l();
                                    H.trigger("unfixed.ScrollToFixed")
                                }
                            }
                        }
                    } else {
                        if (K > 0) {
                            if (N + a(window).height() - H.outerHeight(true) >= K - (t() || -n())) {
                                if (q()) {
                                    p();
                                    H.trigger("preUnfixed.ScrollToFixed");
                                    if (F === "absolute") {
                                        b()
                                    } else {
                                        l()
                                    }
                                    H.trigger("unfixed.ScrollToFixed")
                                }
                            } else {
                                if (!q()) {
                                    p();
                                    H.trigger("preFixed.ScrollToFixed");
                                    x()
                                }
                                w(J);
                                H.trigger("fixed.ScrollToFixed")
                            }
                        } else {
                            w(J)
                        }
                    }
                }
            }
        }

        function n() {
            if (!m.options.bottom) {
                return 0
            }
            return m.options.bottom
        }

        function p() {
            var J = H.css("position");
            if (J == "absolute") {
                H.trigger("postAbsolute.ScrollToFixed")
            } else {
                if (J == "fixed") {
                    H.trigger("postFixed.ScrollToFixed")
                } else {
                    H.trigger("postUnfixed.ScrollToFixed")
                }
            }
        }

        var D = function (J) {
            if (H.is(":visible")) {
                c = false;
                B()
            } else {
                l()
            }
        };
        var G = function (J) {
            (!!window.requestAnimationFrame) ? requestAnimationFrame(B) : B()
        };
        var C = function () {
            var K = document.body;
            if (document.createElement && K && K.appendChild && K.removeChild) {
                var M = document.createElement("div");
                if (!M.getBoundingClientRect) {
                    return null
                }
                M.innerHTML = "x";
                M.style.cssText = "position:fixed;top:100px;";
                K.appendChild(M);
                var N = K.style.height, O = K.scrollTop;
                K.style.height = "3000px";
                K.scrollTop = 500;
                var J = M.getBoundingClientRect().top;
                K.style.height = N;
                var L = (J === 100);
                K.removeChild(M);
                K.scrollTop = O;
                return L
            }
            return null
        };
        var s = function (J) {
            J = J || window.event;
            if (J.preventDefault) {
                J.preventDefault()
            }
            J.returnValue = false
        };
        m.init = function () {
            m.options = a.extend({}, a.ScrollToFixed.defaultOptions, i);
            z = H.css("z-index");
            m.$el.css("z-index", m.options.zIndex);
            u = a("<div />");
            I = H.css("position");
            F = H.css("position");
            k = H.css("float");
            e = H.css("top");
            if (h()) {
                m.$el.after(u)
            }
            a(window).bind("resize.ScrollToFixed", D);
            a(window).bind("scroll.ScrollToFixed", G);
            if ("ontouchmove" in window) {
                a(window).bind("touchmove.ScrollToFixed", B)
            }
            if (m.options.preFixed) {
                H.bind("preFixed.ScrollToFixed", m.options.preFixed)
            }
            if (m.options.postFixed) {
                H.bind("postFixed.ScrollToFixed", m.options.postFixed)
            }
            if (m.options.preUnfixed) {
                H.bind("preUnfixed.ScrollToFixed", m.options.preUnfixed)
            }
            if (m.options.postUnfixed) {
                H.bind("postUnfixed.ScrollToFixed", m.options.postUnfixed)
            }
            if (m.options.preAbsolute) {
                H.bind("preAbsolute.ScrollToFixed", m.options.preAbsolute)
            }
            if (m.options.postAbsolute) {
                H.bind("postAbsolute.ScrollToFixed", m.options.postAbsolute)
            }
            if (m.options.fixed) {
                H.bind("fixed.ScrollToFixed", m.options.fixed)
            }
            if (m.options.unfixed) {
                H.bind("unfixed.ScrollToFixed", m.options.unfixed)
            }
            if (m.options.spacerClass) {
                u.addClass(m.options.spacerClass)
            }
            H.bind("resize.ScrollToFixed", function () {
                u.height(H.height())
            });
            H.bind("scroll.ScrollToFixed", function () {
                H.trigger("preUnfixed.ScrollToFixed");
                l();
                H.trigger("unfixed.ScrollToFixed");
                B()
            });
            H.bind("detach.ScrollToFixed", function (J) {
                s(J);
                H.trigger("preUnfixed.ScrollToFixed");
                l();
                H.trigger("unfixed.ScrollToFixed");
                a(window).unbind("resize.ScrollToFixed", D);
                a(window).unbind("scroll.ScrollToFixed", G);
                H.unbind(".ScrollToFixed");
                u.remove();
                m.$el.removeData("ScrollToFixed")
            });
            D()
        };
        m.init()
    };
    a.ScrollToFixed.defaultOptions = {
        marginTop: 0,
        limit: 0,
        bottom: -1,
        zIndex: 1000,
        baseClassName: "scroll-to-fixed-fixed"
    };
    a.fn.scrollToFixed = function (b) {
        return this.each(function () {
            (new a.ScrollToFixed(this, b))
        })
    }
})(jQuery);

// SmoothScroll for websites v1.4.6 (Balazs Galambosi)
// http://www.smoothscroll.net/
//
// Licensed under the terms of the MIT license.
//
// You may use it in your theme if you credit me.
// It is also free to use on any individual website.
//
// Exception:
// The only restriction is to not publish any
// extension for browsers or native application
// without getting a written permission first.
!function () {
    function e() {
        z.keyboardSupport && m("keydown", a)
    }

    function t() {
        if (!Y && document.body) {
            Y = !0;
            var t = document.body, o = document.documentElement, n = window.innerHeight, r = t.scrollHeight;
            if (A = document.compatMode.indexOf("CSS") >= 0 ? o : t, D = t, e(), top != self) O = !0; else if (oe && r > n && (t.offsetHeight <= n || o.offsetHeight <= n)) {
                var a = document.createElement("div");
                a.style.cssText = "position:absolute; z-index:-10000; top:0; left:0; right:0; height:" + A.scrollHeight + "px", document.body.appendChild(a);
                var i;
                T = function () {
                    i || (i = setTimeout(function () {
                        L || (a.style.height = "0", a.style.height = A.scrollHeight + "px", i = null)
                    }, 500))
                }, setTimeout(T, 10), m("resize", T);
                var l = {attributes: !0, childList: !0, characterData: !1};
                if (M = new $(T), M.observe(t, l), A.offsetHeight <= n) {
                    var c = document.createElement("div");
                    c.style.clear = "both", t.appendChild(c)
                }
            }
            z.fixedBackground || L || (t.style.backgroundAttachment = "scroll", o.style.backgroundAttachment = "scroll")
        }
    }

    function o() {
        M && M.disconnect(), w(_, r), w("mousedown", i), w("keydown", a), w("resize", T), w("load", t)
    }

    function n(e, t, o) {
        if (p(t, o), 1 != z.accelerationMax) {
            var n = Date.now(), r = n - q;
            if (r < z.accelerationDelta) {
                var a = (1 + 50 / r) / 2;
                a > 1 && (a = Math.min(a, z.accelerationMax), t *= a, o *= a)
            }
            q = Date.now()
        }
        if (R.push({x: t, y: o, lastX: 0 > t ? .99 : -.99, lastY: 0 > o ? .99 : -.99, start: Date.now()}), !j) {
            var i = e === document.body, l = function (n) {
                for (var r = Date.now(), a = 0, c = 0, u = 0; u < R.length; u++) {
                    var d = R[u], s = r - d.start, f = s >= z.animationTime, m = f ? 1 : s / z.animationTime;
                    z.pulseAlgorithm && (m = x(m));
                    var w = d.x * m - d.lastX >> 0, h = d.y * m - d.lastY >> 0;
                    a += w, c += h, d.lastX += w, d.lastY += h, f && (R.splice(u, 1), u--)
                }
                i ? window.scrollBy(a, c) : (a && (e.scrollLeft += a), c && (e.scrollTop += c)), t || o || (R = []), R.length ? W(l, e, 1e3 / z.frameRate + 1) : j = !1
            };
            W(l, e, 0), j = !0
        }
    }

    function r(e) {
        Y || t();
        var o = e.target;
        if (e.defaultPrevented || e.ctrlKey) return !0;
        if (h(D, "embed") || h(o, "embed") && /\.pdf/i.test(o.src) || h(D, "object") || o.shadowRoot) return !0;
        var r = -e.wheelDeltaX || e.deltaX || 0, a = -e.wheelDeltaY || e.deltaY || 0;
        N && (e.wheelDeltaX && y(e.wheelDeltaX, 120) && (r = -120 * (e.wheelDeltaX / Math.abs(e.wheelDeltaX))), e.wheelDeltaY && y(e.wheelDeltaY, 120) && (a = -120 * (e.wheelDeltaY / Math.abs(e.wheelDeltaY)))), r || a || (a = -e.wheelDelta || 0), 1 === e.deltaMode && (r *= 40, a *= 40);
        var i = u(o);
        return i ? v(a) ? !0 : (Math.abs(r) > 1.2 && (r *= z.stepSize / 120), Math.abs(a) > 1.2 && (a *= z.stepSize / 120), n(i, r, a), e.preventDefault(), void l()) : O && Q ? (Object.defineProperty(e, "target", {value: window.frameElement}), parent.wheel(e)) : !0
    }

    function a(e) {
        var t = e.target, o = e.ctrlKey || e.altKey || e.metaKey || e.shiftKey && e.keyCode !== K.spacebar;
        document.body.contains(D) || (D = document.activeElement);
        var r = /^(textarea|select|embed|object)$/i, a = /^(button|submit|radio|checkbox|file|color|image)$/i;
        if (e.defaultPrevented || r.test(t.nodeName) || h(t, "input") && !a.test(t.type) || h(D, "video") || g(e) || t.isContentEditable || o) return !0;
        if ((h(t, "button") || h(t, "input") && a.test(t.type)) && e.keyCode === K.spacebar) return !0;
        if (h(t, "input") && "radio" == t.type && P[e.keyCode]) return !0;
        var i, c = 0, d = 0, s = u(D);
        if (!s) return O && Q ? parent.keydown(e) : !0;
        var f = s.clientHeight;
        switch (s == document.body && (f = window.innerHeight), e.keyCode) {
            case K.up:
                d = -z.arrowScroll;
                break;
            case K.down:
                d = z.arrowScroll;
                break;
            case K.spacebar:
                i = e.shiftKey ? 1 : -1, d = -i * f * .9;
                break;
            case K.pageup:
                d = .9 * -f;
                break;
            case K.pagedown:
                d = .9 * f;
                break;
            case K.home:
                d = -s.scrollTop;
                break;
            case K.end:
                var m = s.scrollHeight - s.scrollTop, w = m - f;
                d = w > 0 ? w + 10 : 0;
                break;
            case K.left:
                c = -z.arrowScroll;
                break;
            case K.right:
                c = z.arrowScroll;
                break;
            default:
                return !0
        }
        n(s, c, d), e.preventDefault(), l()
    }

    function i(e) {
        D = e.target
    }

    function l() {
        clearTimeout(E), E = setInterval(function () {
            F = {}
        }, 1e3)
    }

    function c(e, t) {
        for (var o = e.length; o--;) F[V(e[o])] = t;
        return t
    }

    function u(e) {
        var t = [], o = document.body, n = A.scrollHeight;
        do {
            var r = F[V(e)];
            if (r) return c(t, r);
            if (t.push(e), n === e.scrollHeight) {
                var a = s(A) && s(o), i = a || f(A);
                if (O && d(A) || !O && i) return c(t, U())
            } else if (d(e) && f(e)) return c(t, e)
        } while (e = e.parentElement)
    }

    function d(e) {
        return e.clientHeight + 10 < e.scrollHeight
    }

    function s(e) {
        var t = getComputedStyle(e, "").getPropertyValue("overflow-y");
        return "hidden" !== t
    }

    function f(e) {
        var t = getComputedStyle(e, "").getPropertyValue("overflow-y");
        return "scroll" === t || "auto" === t
    }

    function m(e, t) {
        window.addEventListener(e, t, !1)
    }

    function w(e, t) {
        window.removeEventListener(e, t, !1)
    }

    function h(e, t) {
        return (e.nodeName || "").toLowerCase() === t.toLowerCase()
    }

    function p(e, t) {
        e = e > 0 ? 1 : -1, t = t > 0 ? 1 : -1, (X.x !== e || X.y !== t) && (X.x = e, X.y = t, R = [], q = 0)
    }

    function v(e) {
        return e ? (B.length || (B = [e, e, e]), e = Math.abs(e), B.push(e), B.shift(), clearTimeout(C), C = setTimeout(function () {
            try {
                localStorage.SS_deltaBuffer = B.join(",")
            } catch (e) {
            }
        }, 1e3), !b(120) && !b(100)) : void 0
    }

    function y(e, t) {
        return Math.floor(e / t) == e / t
    }

    function b(e) {
        return y(B[0], e) && y(B[1], e) && y(B[2], e)
    }

    function g(e) {
        var t = e.target, o = !1;
        if (-1 != document.URL.indexOf("www.youtube.com/watch")) do if (o = t.classList && t.classList.contains("html5-video-controls")) break; while (t = t.parentNode);
        return o
    }

    function S(e) {
        var t, o, n;
        return e *= z.pulseScale, 1 > e ? t = e - (1 - Math.exp(-e)) : (o = Math.exp(-1), e -= 1, n = 1 - Math.exp(-e), t = o + n * (1 - o)), t * z.pulseNormalize
    }

    function x(e) {
        return e >= 1 ? 1 : 0 >= e ? 0 : (1 == z.pulseNormalize && (z.pulseNormalize /= S(1)), S(e))
    }

    function k(e) {
        for (var t in e) H.hasOwnProperty(t) && (z[t] = e[t])
    }

    var D, M, T, E, C, H = {
            frameRate: 150,
            animationTime: 400,
            stepSize: 100,
            pulseAlgorithm: !0,
            pulseScale: 4,
            pulseNormalize: 1,
            accelerationDelta: 50,
            accelerationMax: 3,
            keyboardSupport: !0,
            arrowScroll: 50,
            fixedBackground: !0,
            excluded: ""
        }, z = H, L = !1, O = !1, X = {x: 0, y: 0}, Y = !1, A = document.documentElement, B = [],
        N = /^Mac/.test(navigator.platform),
        K = {left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36},
        P = {37: 1, 38: 1, 39: 1, 40: 1}, R = [], j = !1, q = Date.now(), V = function () {
            var e = 0;
            return function (t) {
                return t.uniqueID || (t.uniqueID = e++)
            }
        }(), F = {};
    if (window.localStorage && localStorage.SS_deltaBuffer) try {
        B = localStorage.SS_deltaBuffer.split(",")
    } catch (I) {
    }
    var _, W = function () {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (e, t, o) {
                window.setTimeout(e, o || 1e3 / 60)
            }
        }(), $ = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver, U = function () {
            var e;
            return function () {
                if (!e) {
                    var t = document.createElement("div");
                    t.style.cssText = "height:10000px;width:1px;", document.body.appendChild(t);
                    var o = document.body.scrollTop;
                    document.documentElement.scrollTop;
                    window.scrollBy(0, 3), e = document.body.scrollTop != o ? document.body : document.documentElement, window.scrollBy(0, -3), document.body.removeChild(t)
                }
                return e
            }
        }(), G = window.navigator.userAgent, J = /Edge/.test(G), Q = /chrome/i.test(G) && !J, Z = /safari/i.test(G) && !J,
        ee = /mobile/i.test(G), te = /Windows NT 6.1/i.test(G) && /rv:11/i.test(G),
        oe = Z && (/Version\/8/i.test(G) || /Version\/9/i.test(G)), ne = (Q || Z || te) && !ee;
    "onwheel" in document.createElement("div") ? _ = "wheel" : "onmousewheel" in document.createElement("div") && (_ = "mousewheel"), _ && ne && (m(_, r), m("mousedown", i), m("load", t)), k.destroy = o, window.SmoothScrollOptions && k(window.SmoothScrollOptions), "function" == typeof define && define.amd ? define(function () {
        return k
    }) : "object" == typeof exports ? module.exports = k : window.SmoothScroll = k
}();