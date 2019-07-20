(function ($) {
    $(function () {
        // Add icon to lyricist, composer tags.
        $('div.c-entry-tags a.lyricist-tag').prepend($('<i class="fas fa-book-open" />'));
        $('div.c-entry-tags a.composer-tag').prepend($('<i class="fas fa-music" />'));
    });
})(jQuery);
