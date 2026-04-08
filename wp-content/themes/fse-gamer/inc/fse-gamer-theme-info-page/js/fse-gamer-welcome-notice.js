(function ($) {
    "use strict";

    // Install + Activate button
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();

        var button = $(this);
        button.prop("disabled", true)
              .text("Installing & Activating recommended plugins…")
              .addClass("processing-spinner");

        $.post(fse_gamer_localize.ajax_url, {
            action: "fse_gamer_install_and_activate_plugins",
            nonce: fse_gamer_localize.nonce
        }, function (response) {
            if (response.success) {
                window.location.href = fse_gamer_localize.redirect_url;
            } else {
                button.text(response.data?.message || "Installation failed");
            }
        });
    });

})(jQuery);
