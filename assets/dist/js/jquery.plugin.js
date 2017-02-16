;(function($, window, document, undefined){
    'use strict';

    var $visibleContent, $hiddenContents, $icons;

    var init = function() {
        $visibleContent = $('.collapsible-content--visible');
        $hiddenContents = $visibleContent.next();
        $icons = $visibleContent.find('.collapsible-content--icon');
        $visibleContent.on('click', clickHandler);
    };

    /**
     * CLick event hanlder
     * @param event
     */
    var clickHandler = function( event ) {
        var index = $visibleContent.index( this ),
            $hiddenContent = $( $hiddenContents[ index ]),
            isHiddenContentShowing = $hiddenContent.is(':visible');

        if ( isHiddenContentShowing ) {
            $hiddenContent.slideUp( function() {
                changeIcon( index, isHiddenContentShowing );
            } );
        } else {
            $hiddenContent.slideDown( function() {
                changeIcon( index, isHiddenContentShowing );
            } );
        }
    };

    /*******************
     * Helper Functions
     ********************/

    /**
     * Change the Icon
     */
    function changeIcon( index, isHiddenContentShowing ) {
        var $iconElement = $( $icons[ index ] ),
            showIcon = $iconElement.data( 'showIcon' ),
            hideIcon = $iconElement.data( 'hideIcon' ),
            removeClass, addClass;

        if( isHiddenContentShowing ) {
            addClass = showIcon;
            removeClass = hideIcon;
        } else {
            addClass = hideIcon;
            removeClass = showIcon;
        }

        $iconElement
            .removeClass( removeClass )
            .addClass( addClass );
    }

    $(document).ready(function() {
        init();
    });


})(jQuery, window, document);