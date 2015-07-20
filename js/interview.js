

document.addEvent('domready', function () {


    //MAC recognize 
    if (navigator.platform.match('Mac') !== null) {
        $$('body').addClass('OSX');
    }
    // face grid
    if ($('faceGrid')) {

        var faceGrid = new FaceGrid($('faceGrid'), {
            elements: {
                loading: $('loadingPage'),
                empty: $('emptyPage')
            },
            onLoaderHidden: function () {
                var navigBG = new FFTween($('navigBG'), {
                    duration: 200,
                    transition: Fx.Transitions.Quad.easeIn,
                    property: 'height'
                });

                var navig = new FFTween($('navigation'), {
                    duration: 300,
                    transition: Fx.Transitions.Quad.easeIn,
                    property: 'top'
                });

                navigBG.start(1008);
                navig.start(-110);

            }
        });

        window.addEvent('resize', function () {
            faceGrid.resizeFaces();
        });

    }
    // END face grid

    detona.addEvent('click', function () {
        $('sus').addClass('activar');  
    });
     exit_form.addEvent('click', function () {
        $('sus').removeClass('activar');  
    });
});