(function () {
    function getLink(e) {
        if (e.target.tagName === 'I') {
            return e.target.parentNode.getAttribute('href');
        }

        return e.target.getAttribute('href');
    }

    KB.onClick('.js-modal-large', function (e) {
        KB.modal.open(getLink(e), 'large', false);
    });

    KB.onClick('.js-modal-medium', function (e) {
        KB.modal.open(getLink(e), 'medium', false);
    });

    KB.onClick('.js-modal-small', function (e) {
        KB.modal.open(getLink(e), 'small', false);
    });

    KB.onClick('.js-modal-confirm', function (e) {
        KB.modal.open(getLink(e), 'small');
    });

    KB.onClick('.js-modal-close', function () {
        KB.modal.close();
    });
}());
