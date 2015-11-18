$(function() {
    var ball = new ui.Actor('#globely-logo');
    var trackPointer = new ui.Track({
        values: {
            x: {},
            y: {}
        }
    });
    var springToCenter = new ui.Simulate({
        friction: 0.005,
        values: {
            x: {
                max: 221,
                bounce: 1,
                min: -221
            },
            y: {
                acceleration: 2000,
                max: 367,
                bounce: 1,
                min: -20
            }
        }
    });

    $('body').on('mousedown touchstart', '#globely-logo', function (e) {
        e.preventDefault();
     
        ball.start(trackPointer, e);

        $('body').one('touchend mouseup', function () {
            ball.start(springToCenter);
        });
    });
});
