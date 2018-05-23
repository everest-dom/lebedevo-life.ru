console.log("подключение скриптов аналитики");



function include(b) {

    var a = document.createElement("script");

    a.src = b;

    document.getElementsByTagName("head")[0].appendChild(a)

}

//include("js/sourcebuster.js");



$.getScript("js/sourcebuster.js", function (data, textStatus) {

    if (textStatus === "success") {

        try {
            setTimeout(function() {
                console.log('r7k12 loaded');
                (function(w,d,k){w['r7k12']=w['r7k12']||[];var s=d.createElement('script');s.async=1;s.src='https://r7k12.com/scripts/'+k+'/counter.js';s.type='application/javascript';d.head.appendChild(s);})(window,document,'b05277575ae6922f82684ecdeec75d14');r7k12.push({hit:'pageview'});
                    $('form').each(function(){
                        var form = this;
                        $(form).find('button[type="submit"]').click(function(e){
                          e.preventDefault();

                            var data = {type: "Form"};
                            data.name = form.querySelector('input[name="name"]').value;

                            if(form.querySelector('input[name="email"]')) {
                              data.email = form.querySelector('input[name="email"]').value;
                            }
                            if(form.querySelector('input[name="phone"]')) {
                              data.phone = form.querySelector('input[name="phone"]').value;
                            }

                          console.log(data);

                            if((data.name && data.phone) || (data.name && data.email)) {
                            	console.log('good');
                              setTimeout(function() {
                                window.location = 'https://lebedevo-life.ru/thank-you.php';
                              }, 1500);
                            }
                        });

                    });
            }, 1000);
			setTimeout(function() {
			console.log("yadrocrm Start load");

			(function(g, b, c) {

				b.introvert_callback = function() {

					try {

						b.II = new IntrovertIntegration(c)

					} catch (d) {

						console.log(d)

					}

				};
				var a = g.getElementsByTagName("script")[0],

					f = g.createElement("script");

				f.type = "text/javascript";

				f.async = true;

				f.src = "https://api.yadrocrm.ru/js/cache/" + c + ".js";

				a.parentNode.insertBefore(f, a)

			})(document, window, "b7e88ad8");

			}, 5000);

        } catch(err) {

            console.log(err);

        }

    } else {

        console.log("script not loaded");

    }

});

/*var _alloka = {

    objects: {

        de7c41d6b2c8a636: {

            block_class: "phone_alloka",

            jivosite: false,

            email_tracking: false,

            format: "8 (#{XXXX}) #{XX}-#{XX}-#{XX}"

        }

    },

    trackable_source_types: ["type_in", "referrer", "utm"],

    last_source: false,

    use_geo: false

	};

include("https://analytics.alloka.ru/v4/alloka.js");*/


include("//cdn.callbackhunter.com/cbh.js?hunter_code=24ab2c2a2a4d77ec07b02b72c1a94ead");

include("js/google_analytics.js");

(window.Image ? (new Image()) : document.createElement("img")).src = "https://vk.com/rtrg?p=VK-RTRG-202713-1UQ3C";