/**
 * demo.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2016, Codrops
 * http://www.codrops.com
 */
;(function(window) {

	'use strict';

	// taken from mo.js demos
	function isIOSSafari() {
		var userAgent;
		userAgent = window.navigator.userAgent;
		return userAgent.match(/iPad/i) || userAgent.match(/iPhone/i);
	};

	// taken from mo.js demos
	function isTouch() {
		var isIETouch;
		isIETouch = navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
		return [].indexOf.call(window, 'ontouchstart') >= 0 || isIETouch;
	};
	
	// taken from mo.js demos
	var isIOS = isIOSSafari(),
		clickHandler = isIOS || isTouch() ? 'touchstart' : 'click';

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	function Animocon(el, options) {
		this.el = el;
		this.options = extend( {}, this.options );
		extend( this.options, options );

		this.checked = false;

		this.timeline = new mojs.Timeline();
		
		for(var i = 0, len = this.options.tweens.length; i < len; ++i) {
			this.timeline.add(this.options.tweens[i]);
		}

		var self = this;
		this.el.addEventListener(clickHandler, function() {
			if( self.checked ) {
				self.options.onUnCheck();
			}
			else {
				self.options.onCheck();
				self.timeline.replay();
			}
			self.checked = !self.checked;
		});
	}

	Animocon.prototype.options = {
		tweens : [
			new mojs.Burst({})
		],
		onCheck : function() { return false; },
		onUnCheck : function() { return false; }
	};

	// grid items:
	var items = [].slice.call(document.querySelectorAll('div.grid > .grid__item'));

	function init() {
		/* Icon 1 */
		// var el1 = items[0].querySelector('button.icobutton'), el1span = el1.querySelector('span');
		// new Animocon(el1, {
		// 	tweens : [
		// 		// burst animation
		// 		new mojs.Burst({
		// 			parent: 			el1,
		// 			radius: 			{30:90},
		// 			count: 				6,
		// 			children : {
		// 				fill: 			'#C0C1C3',
		// 				opacity: 		0.6,
		// 				radius: 		15,
		// 				duration: 	1700,
		// 				easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
		// 			}
		// 		}),
		// 		// ring animation
		// 		new mojs.Shape({
		// 			parent: 		el1,
		// 			type: 			'circle',
		// 			radius: 		{0: 60},
		// 			fill: 			'transparent',
		// 			stroke: 		'#C0C1C3',
		// 			strokeWidth: {20:0},
		// 			opacity: 		0.6,
		// 			duration: 	700,
		// 			easing: 		mojs.easing.sin.out
		// 		}),
		// 		// icon scale animation
		// 		new mojs.Tween({
		// 			duration : 1200,
		// 			onUpdate: function(progress) {
		// 				if(progress > 0.3) {
		// 					var elasticOutProgress = mojs.easing.elastic.out(1.43*progress-0.43);
		// 					el1span.style.WebkitTransform = el1span.style.transform = 'scale3d(' + elasticOutProgress + ',' + elasticOutProgress + ',1)';
		// 				}
		// 				else {
		// 					el1span.style.WebkitTransform = el1span.style.transform = 'scale3d(0,0,1)';
		// 				}
		// 			}
		// 		})
		// 	],
		// 	onCheck : function() {
		// 		el1.style.color = '#988ADE';
		// 	},
		// 	onUnCheck : function() {
		// 		el1.style.color = '#C0C1C3';	
		// 	}
		// });
		
		/* Icon 9 */
		var el1 = items[0].querySelector('button.icobutton'), el1span = el1.querySelector('span');
		el1span.style.WebkitTransformOrigin = el1span.style.transformOrigin = '-10% 50%';
		new Animocon(el1, {
			tweens : [
				// burst animation
				new mojs.Burst({
					parent: 		el1,
					count: 			6,
					radius: 		{40:90},
					angle: 			135,
					degree: 		90,
					children: {
						fill : 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
						scale: 			2,
						radius: 		{ 10 : 0 },
						opacity: 		1,
						duration: 	1500,
						delay: 			350,
						easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
					}
				}),
				// burst animation
				new mojs.Burst({
					parent: 	el1,
					count: 		6,
					angle: 		45,
					degree:  -90,
					radius: 	{40:100},
					children: {
						fill: 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
						scale: 			2,
						radius: 		{ 10 : 0 },
						opacity: 		1,
						duration: 	1500,
						delay: 			550,
						easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
					}
				}),
				// ring animation
				new mojs.Shape({
					parent: 	el1,
					radius: 	{0: 50},
					fill: 		'transparent',
					stroke: 	'#988ADE',
					strokeWidth: {35:0},
					opacity: 		1,
					duration: 	750,
					easing: 		mojs.easing.bezier(0, 1, 0.5, 1)
				}),
				// ring animation
				new mojs.Shape({
					parent: 			el1,
					radius: 			{0: 80},
					fill: 				'transparent',
					stroke: 			'#988ADE',
					strokeWidth: 	{50:0},
					opacity: 			1,
					duration: 		750,
					delay: 				200,
					easing: 			mojs.easing.bezier(0, 1, 0.5, 1)
				}),
				// icon scale animation
				new mojs.Tween({
					duration : 1500,
					onUpdate: function(progress) {
						if(progress > 0.3) {
							var elasticOutProgress = mojs.easing.elastic.out(1.43*progress-0.43);
							el1span.style.WebkitTransform = el1span.style.transform = 'scale3d(' + elasticOutProgress + ',' + elasticOutProgress + ',1) rotate3d(0,0,1,' + 90*(1-elasticOutProgress) + 'deg)';
						}
						else {
							el1span.style.WebkitTransform = el1span.style.transform = 'scale3d(0,0,1)';
						}
					}
				})
			],
			onCheck : function() {
				el1.style.color = '#988ADE';
			},
			onUnCheck : function() {
				el1.style.color = '#C0C1C3';	
			}
		});
		/* Icon 9 */


		
		// bursts when hovering the mo.js link
		var molinkEl = document.querySelector('.special-link'),
			moTimeline = new mojs.Timeline(),
			moburst1 = new mojs.Burst({
				parent: 			molinkEl,
				count: 				6,
				left: 				'0%',
				top:  				'-50%',
				radius: 			{0:60},
				children: {
					fill : 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
					duration: 	1300,
					easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
				}
			}),
			moburst2 = new mojs.Burst({
				parent: 	molinkEl,
				left: '-100%', top: '-20%',
				count: 		14,
				radius: 		{0:120},
				children: {
					fill: 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
					duration: 	1600,
					delay: 			100,
					easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
				}
			}),
			moburst3 = new mojs.Burst({
				parent: 			molinkEl,
				left: '130%', top: '-70%',
				count: 				8,
				radius: 			{0:90},
				children: {
					fill: 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
					duration: 	1500,
					delay: 			200,
					easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
				}
			}),
			moburst4 = new mojs.Burst({
				parent: molinkEl,
				left: '-20%', top: '-150%',
				count: 		14,
				radius: 	{0:60},
				children: {
					fill: 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
					duration: 	2000,
					delay: 			300,
					easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
				}
			}),
			moburst5 = new mojs.Burst({
				parent: 	molinkEl,
				count: 		12,
				left: '30%', top: '-100%',
				radius: 		{0:60},
				children: {
					fill: 			[ '#988ADE', '#DE8AA0', '#8AAEDE', '#8ADEAD', '#DEC58A', '#8AD1DE' ],
					duration: 	1400,
					delay: 			400,
					easing: 		mojs.easing.bezier(0.1, 1, 0.3, 1)
				}
			});

		moTimeline.add(moburst1, moburst2, moburst3, moburst4, moburst5);
		molinkEl.addEventListener('mouseenter', function() {
			moTimeline.replay();
		});
	}
	
	init();

})(window);