let BandV = {
    $pageBody: undefined, 
    navbar: undefined,
	menuColour: '128, 128, 128',
	navbarClicked: false,

    onload: function() {
        this.$pageBody = $(document.getElementById('pagebody'));
        this.navbar = document.getElementById('navbar');
        window.onscroll = () => {
            this.checkHeaderPosition();
            this.checkAffixPosition();
        };

        this.checkHeaderPosition();
		this.checkAffixPosition();
		
		this.setNavbar();

        $('.carousel.lazy-load').bind('slide.bs.carousel', function (e) {
            let image = $(e.relatedTarget).find('img[data-src]');
            image.attr('src', image.data('src'));
            image.removeAttr('data-src');
        });
	},

	showFromSelect: function(id, tgt) {
		const dd = document.getElementById(id);
		let val = dd.options[dd.selectedIndex].value;

		window.open(val, tgt || '_blank');
	},
	
	setNavbar: function() {

		$('#navbar-toggler').on('click', (e) => {
			this.navbarClicked = !this.navbarClicked;

			if (this.navbarClicked) {
				$('body').css('overflow', 'hidden');
			}
			else {
				$('body').css('overflow', 'auto');
			}

		});
	},

    checkHeaderPosition: function() {    
        let eTop = this.$pageBody.offset().top;
        let offset = eTop - $(window).scrollTop();   

        if (offset <= 80) {
            this.navbar.style.background = `rgba(${this.menuColour}, 1)`;
        }
        else if (offset < 120) {
            offset = 120 - offset;
            offset = parseFloat(offset / 40);
            this.navbar.style.background = `linear-gradient(to bottom,  rgba(${this.menuColour}, 0.95) 0%,rgba(${this.menuColour}, ${offset}) 100%)`;
        }
        else {
            this.navbar.style.background = `linear-gradient(to bottom,  rgba(${this.menuColour}, 0.95) 0%,rgba(${this.menuColour}, 0) 100%)`;
        }
    },

    checkAffixPosition: function() {    
        let eTop = this.$pageBody.offset().top;
        let offset = eTop - $(window).scrollTop();   

        if (offset <= 80) {
            if (!$('.affix').hasClass('affix-top')) {
                $('.affix').addClass('affix-top');
            }
        }
        else {
            if ($('.affix').hasClass('affix-top')) {
                $('.affix').removeClass('affix-top');
            }
        }
    },

    manageBlogs: function() {
        let notFound = $('#notfound');
        let blogDate = $('#blogdate').val();
        let blogCategory = $('#blogcategory').val();
        let found = false;
        let back = encodeURIComponent(`blog.php?date=${blogDate}&category=${blogCategory}`);

        $('.blog-summary-card').each(function() {
            let date = $(this).attr('date');
            let category = $(this).attr('category');
            let showDate = false;
            let showCategory = false;
            let a = $($(this).find('a')[0]);

            if (blogDate === 'all' ||
                    blogDate === date) {
                showDate = true;
            }

            if (blogCategory === 'all' || blogCategory === category) {
                showCategory = true;
            }

            if (showDate && showCategory) {
                if (!found) {
                    notFound.hide('slow');
                }
                $(this).show();
                found = true;
            }
            else {
                $(this).hide('slow');
            }

            let href = a.attr('href').split('back=')[0];
            href += 'back=' + back;
            a.attr('href', href);
        });

        if (!found) {
            notFound.show('fast');
        }
    },

	copyAddressToCB: function(btn, id) {
		let dummy = document.createElement("textarea");
		let val = document.getElementById(id);

		val = val.getAttribute('href');
		val = val.split(':');
		val = val[1] || val[0];

		dummy.style.top = '-1000px';
		document.body.appendChild(dummy);
		dummy.value = val;
		dummy.select();
		document.execCommand("copy");
		document.body.removeChild(dummy);

		btn.style.color = 'red';
		$(btn).addClass('fa-spin');

		setTimeout(() => {
			btn.style.color = 'grey';
			$(btn).removeClass('fa-spin');
		}, 750);

	}
};

let PFModal = {
	dialogue: undefined,
	timeout: undefined,
	title: undefined,
	body: undefined,
	cross: undefined,
    popup: {},
	buttons: {
		'1': undefined,
		'2': undefined,
		'3': undefined,
		'4': undefined
	},
	
	init: function() {
		this.dialogue = document.getElementById('modaldialogue');
		this.title = document.getElementById('modaltitle');
		this.body = document.getElementById('modalbody');
		this.cross = document.getElementById('modalcross');
		this.buttons['1'] = document.getElementById('modalbutton1');
		this.buttons['2'] = document.getElementById('modalbutton2');
		this.buttons['3'] = document.getElementById('modalbutton3');
		this.buttons['4'] = document.getElementById('modalbutton4');
                
        this.popup.dialogue = document.getElementById('popupdialogue');
		this.popup.header = document.getElementById('popupheader');
		this.popup.headerContent = document.getElementById('popupheadercontent');
		this.popup.body = document.getElementById('popupbody');
		this.popup.footer = document.getElementById('popupfooter');
		
		
		$(this.dialogue).modal({show: false, backdrop: false});
        $(this.popup.dialogue).modal({show: false, backdrop: false});
	},
	
	display: function(opts) {
		var b, button, i, name, opt, bname, el, fnc, that = this, classes = {'1': ' pull-left', '2': ' center-block', '3': ' center-block', '4': ' pull-right'};
		
		if (this.timeout) {
			clearTimeout(this.timeout);
			this.timeout = undefined;
		}
		
		// make sure the modal is no longer displaying
		this.hide();
		
		this.title.innerHTML = opts.title || '';
		//nodes.modalbody.element.innerHTML = (opts.append ? nodes.modalbody.element.innerHTML + '<br><br>' : '')  + (opts.body || '');
		if (!opts.append) {
			this.body.innerHTML = '';
		}
		
		if (typeof(opts.body) === 'string') {
			if (opts.append) {
				this.body.innerHTML += '<br><br>';
			}
			this.body.innerHTML += opts.body;
		}
		else {
			/*if (opts.body && opts.body.message) {
				this.body.innerHTML = opts.body.message;
			}*/
			this.body.appendChild(opts.body);
		}
		//nodes.modalbody.element.innerHTML = (opts.append ? nodes.modalbody.element.innerHTML + '<br><br>' : '')  + (opts.body || '');
		
		if (opts.bodyElements) {
			for (i = 0; i < opts.bodyElements.length; i++) {
				this.body.appendChild(opts.bodyElements[i]);
			}
		}
		
		this.buttons['1'].style.display = 'none';
		this.buttons['2'].style.display = 'none';
		this.buttons['3'].style.display = 'none';
		this.buttons['4'].style.display = 'none';
		
		for (b in this.buttons) {
			name = 'button' + b;
			button = this.buttons[b];
			opt = opts[name];
			if (opt) {
				button.style.display = 'block';								
				button.innerHTML = opt.text || 'OK';
				
				if (opt.fnc || opt.click) {
					button.onclick = opt.fnc;
				}
				else {
					button.onclick = undefined;
				}
				
				if (opt.dblclick) {
					button.ondblclick = opt.dblclick;
				}
				else {
					button.ondblclick = undefined;
				}
				
				if (opt.class) {
					button.className = opt.class + classes[b];
				}
			}
		}
		
		// set the cancel function
		if (opts.cancelFnc) {
			fnc = function(){
				opts.cancelFnc();
				that.hide();
			};
		}
		else {
			fnc = function() {
				that.hide();
			};
		}
		
		this.cross.onclick = fnc;

		setTimeout(function() {
			that.show();
		}, 10);
		
		if (opts.timeout) {
			this.timeout = setTimeout(function() {
					that.hide();
			}, opts.timeout);
		}
	},
	
	show: function() {
		var fnc, that = this;
		
		setTimeout(function() {
			$('.modal-backdrop').remove();
			$(that.dialogue).modal('show');
		}, 0);
		document.addEventListener("backbutton", this.hide, false);
	},
	
	hide: function() {
		$(this.dialogue).modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();
		document.removeEventListener("backbutton", this.hide, false);
	},
	
	hidePopup: function() {
		$(this.popup.dialogue).modal('hide');
		$('.modal-backdrop').remove();
	},
	
	showPopup: function(args) {
		var that = this, cls = 'modal-header ';
		
		args.body = args.body || '';
		
		// make sure we do not hide this because of the last invocation
		if (this.popup.timer) {
			clearTimeout(this.popup.timer);
			this.popup.timer = undefined;
		}
		
		// set the contents
		this.popup.headerContent.innerHTML = args.header || args.title || 'Information';
		this.popup.body.innerHTML = '';
		if (typeof args.body === 'string') {
			this.popup.body.innerHTML = args.body;
		}
		else {
			this.popup.body.appendChild(args.body);
		}		
		
		// set the header background
		if (args.type) {
			cls += 'bg-' + (args.type || 'info');
			this.popup.header.className = cls;
		}		
		
		// show it
		$('.modal-backdrop').remove();
		$(this.popup.dialogue).modal({show: true, backdrop: false});
		
		// perform any callback
		if (args.callback) {
			args.callback();
		}
		
		// set it to timeout - if required
		if (args.timeout) {
			this.popup.timer = setTimeout(function(){that.hidePopup();}, args.timeout);
		}
	},
	
	showStaticPopup: function(args) {
		switch (args.type) {
			case 'applicationok':
				args.type = 'info';
				args.body = 'Thank you for your application.<br><br>' +
							'We have sent you an automated email confirming your details.  We will be in touch shortly to discuss your application.';
			break;

			case 'quizok':
				args.type = 'info';
				args.body = 'Thank you for your entering our quiz.<br><br>' +
							'We will publish the answers on ' + args.date;
			break;
			
			case 'applicationfail':
				args.type = 'danger';
                                args.header = 'Error';
				args.body =	'Please ensure that you have completed all the fields highlighted in red.';
			break;
			
			default:
				args.type = 'info';
				args.body = '';
			break;
		}
		
		this.showPopup(args);
	}
};