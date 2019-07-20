(function ($) {
    $(function () {
        $('input#lyricist').quicksearch('div.c-entry-tags a.lyricist-tag', {
            'delay': 100,
            'minValLength': 1
        });
        $('input#composer').quicksearch('div.c-entry-tags a.composer-tag', {
            'delay': 100,
            'minValLength': 1
        });
    });
})(jQuery);
