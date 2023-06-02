(function() { "use strict"; var t; var mvc = google.maps.MVCObject; function o(t, o, i, s) { var n = mvc.call(this) || this; n.c = null, n.b = null, n.a = null, n.i = null; var p = { clickable: !1, cursor: "pointer", draggable: !1, flat: !0, icon: { path: google.maps.SymbolPath.CIRCLE, fillColor: "#c8ecd0", fillOpacity: 0, scale: 14, strokeWeight: 0 }, position: new google.maps.LatLng(0, 0), title: "Current location", zIndex: 95 }, r = { clickable: !1, cursor: "pointer", draggable: !1, flat: !0, icon: { path: google.maps.SymbolPath.CIRCLE, fillColor: "#23ca2f", fillOpacity: 0, scale: 7, strokeColor: "white", strokeWeight: 6, strokeOpacity: 0 }, optimized: !1, position: new google.maps.LatLng(0, 0), title: "Current location", zIndex: 96 }; return o && (p = e(p, o)), i && (r = e(r, i)), o = { clickable: !1, radius: 0, strokeColor: "#1bff4b", strokeOpacity: 0, fillColor: "#61bf7e", fillOpacity: 0, strokeWeight: 1, zIndex: 94 }, s && (o = e(o, s)), n.c = new google.maps.Marker(p), n.b = new google.maps.Marker(r), n.a = new google.maps.Circle(o), mvc.prototype.set.call(n, "accuracy", null), mvc.prototype.set.call(n, "position", null), mvc.prototype.set.call(n, "map", null), n.set("minimum_accuracy", null), n.set("position_options", { enableHighAccuracy: true, timeout: 1000, maximumAge: Infinity }), n.a.bindTo("map", n.c), n.a.bindTo("map", n.b), t && n.setMap(t), n }  function e(t, o) { for (var e in o) !0 !== i[e] && (t[e] = o[e]); return t }! function(t, o) { function e() {} for (var i in e.prototype = o.prototype, t.B = o.prototype, t.prototype = new e, t.prototype.constructor = t, o) if ("prototype" != i) if (Object.defineProperties) { var s = Object.getOwnPropertyDescriptor(o, i); s && Object.defineProperty(t, i, s) } else t[i] = o[i] }(o, mvc), (t = o.prototype).set = function(t, o) { if (s.test(t)) throw "'" + t + "' is a read-only property."; "map" == t ? this.setMap(o) : mvc.prototype.set.call(this, t, o) }, t.f = function() { return this.get("map") }, t.l = function() { return this.get("position_options") }, t.w = function(t) { this.set("position_options", t) }, t.g = function() { return this.get("position") }, t.m = function() { return this.get("position") ? this.a.getBounds() : null }, t.j = function() { return this.get("accuracy") }, t.h = function() { return this.get("minimum_accuracy") }, t.v = function(t) { this.set("minimum_accuracy", t) }, t.setMap = function(t) { mvc.prototype.set.call(this, "map", t), t ? navigator.geolocation && (this.i = navigator.geolocation.watchPosition(this.A.bind(this), this.o.bind(this), this.l())) : (this.c.unbind("position"), this.b.unbind("position"), this.a.unbind("center"), this.a.unbind("radius"), mvc.prototype.set.call(this, "accuracy", null), mvc.prototype.set.call(this, "position", null), navigator.geolocation.clearWatch(this.i), this.i = null, this.c.setMap(t), this.b.setMap(t)) }, t.u = function(t) { this.b.setOptions(e({}, t)) }, t.s = function(t) { this.a.setOptions(e({}, t)) }, t.A = function(t) { var o = new google.maps.LatLng(t.coords.latitude, t.coords.longitude), e = !this.b.getMap(); if (e) { if (null != this.h() && t.coords.accuracy > this.h()) return; this.c.setMap(this.f()), this.b.setMap(this.f()), this.c.bindTo("position", this), this.b.bindTo("position", this), this.a.bindTo("center", this, "position"), this.a.bindTo("radius", this, "accuracy") } this.j() != t.coords.accuracy && mvc.prototype.set.call(this, "accuracy", t.coords.accuracy), !e && this.g() && this.g().equals(o) || mvc.prototype.set.call(this, "position", o) }, t.o = function(t) { google.maps.event.trigger(this, "geolocation_error", t) }; var i = { map: !0, position: !0, radius: !0 }, s = /^(?:position|accuracy)$/i, n = window;  function p() { return o.prototype.getAccuracy = o.prototype.j, o.prototype.getBounds = o.prototype.m, o.prototype.getMap = o.prototype.f, o.prototype.getMinimumAccuracy = o.prototype.h, o.prototype.getPosition = o.prototype.g, o.prototype.getPositionOptions = o.prototype.l, o.prototype.setCircleOptions = o.prototype.s, o.prototype.setMap = o.prototype.setMap, o.prototype.setMarkerOptions = o.prototype.u, o.prototype.setMinimumAccuracy = o.prototype.v, o.prototype.setPositionOptions = o.prototype.w, o } "function" == typeof n.define && n.define.amd ? n.define([], p) : "object" == typeof n.exports ? n.module.exports = p() : n.GeoDriver = p() }).call(this);