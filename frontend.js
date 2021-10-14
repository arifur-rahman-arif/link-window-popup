// const links = document.querySelectorAll(".fusion-social-networks-wrapper > a");

// console.log(links);

// for (let i = 0; i < links.length; i++) {
//     const link = links[i];

//     link.addEventListener("click", (e) => {
//         e.preventDefault();
//         let url = e.target.getAttribute("href");
//         console.log(url);
//         let windowFeature = "location=yes,height=580,width=550,scrollbars=yes,status=yes";
//         window.open(url, "", windowFeature);
//     });
// }

jQuery(document).ready(function ($) {
    const links = $(".fusion-social-networks-wrapper > a, #post-1 > div > div > h3");
    console.log(links);
    $(links).click(function (e) {
        let target = $(e.currentTarget);
        if (!target.hasClass("fusion-facebook")) {
            e.preventDefault();
            let url = target.attr("href");
            console.log(url);
            let windowFeature = "location=yes,height=700,width=580,scrollbars=yes,status=yes";
            window.open(url, "", windowFeature);
        }
    });
});

// jQuery(document).ready(function ($) {
//     const links = $(".fusion-social-networks-wrapper > a");
//     console.log(links);
//     $(document).on("click", ".fusion-social-networks-wrapper > a", function (e) {
//         e.preventDefault();
//         let url = $(e.currentTarget).attr("href");
//         console.log($(e.currentTarget));
//         console.log(url);
//         let windowFeature = "location=yes,height=580,width=550,scrollbars=yes,status=yes";
//         window.open(url, "", windowFeature);
//     });
// });
