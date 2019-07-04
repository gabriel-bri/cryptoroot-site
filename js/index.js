var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}var Slide = function () {
	function Slide(slideElement) {_classCallCheck(this, Slide);
		this.$slide = slideElement;
		this.$items = this.$slide.querySelectorAll('.slide-list-item');
		this.current = -1;
		this.last = -1;
	}_createClass(Slide, [{ key: '__change', value: function __change(

		index) {var _this = this;var show = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;var transitionComplete = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : function () {};
			if (index < 0 || index >= this.$items.length) {
				transitionComplete(this);
				return this;
			}

			var $item = this.$items[index];

			if (!show && !$item.classList.contains('visible')) return transitionComplete(this);

			var transitionListener = function transitionListener(e) {
				transitionComplete(_this);
				$item.removeEventListener('transitionend', transitionListener);
			};

			$item.addEventListener('transitionend', transitionListener);

			if (show) $item.classList.add('visible');else
			$item.classList.remove('visible');
		} }, { key: '__hide', value: function __hide(

		transitionComplete) {var _this2 = this;
			var hideAnimations = [];var _loop = function _loop(

			i) {
				hideAnimations.push(new Promise(function (resolve) {
					_this2.__change(i, false, resolve);
				}));};for (var i = 0; i < this.$items.length; i++) {_loop(i);
			}

			Promise.all(hideAnimations).then(transitionComplete);
		} }, { key: '__show', value: function __show(

		index, transitionComplete) {
			this.__change(index, true, transitionComplete);
		} }, { key: 'go', value: function go(

		index) {var _this3 = this;var transitionComplete = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : function () {};
			this.__hide(function () {
				_this3.last = _this3.current;
				_this3.current = Math.max(0, Math.min(_this3.$items.length - 1, index));
				_this3.__show(index, function () {
					transitionComplete(_this3);
				});
			});
		} }, { key: 'next', value: function next()

		{var pause = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;var transitionComplete = arguments[1];
			pause && this.pause();
			var index = this.current + 1 < this.$items.length ?
			this.current + 1 :
			0;
			this.go(index, transitionComplete);
		} }, { key: 'prev', value: function prev()

		{var pause = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;var transitionComplete = arguments[1];
			pause && this.pause();
			var index = this.current - 1 > 0 ?
			this.current - 1 :
			this.$items.length - 1;
			this.go(index, transitionComplete);
		} }, { key: 'play', value: function play()

		{var _this4 = this;var time = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;var first = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
			this.pause;
			this._time = setTimeout(function () {
				_this4.next(false, function () {return _this4.play(time);});
			}, time);
		} }, { key: 'pause', value: function pause()

		{
			clearTimeout(this._time);
		} }]);return Slide;}();


var mySlide = new Slide(document.getElementById('slide-comments'));
mySlide.play(1000);

var btnAnterior = document.getElementById('btnAnterior');
var btnToggle = document.getElementById('btnToggle');
var btnProximo = document.getElementById('btnProximo');

btnAnterior.addEventListener('click', function () {return mySlide.prev();});
btnProximo.addEventListener('click', function () {return mySlide.next();});