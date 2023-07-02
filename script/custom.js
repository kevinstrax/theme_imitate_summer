// var targetProtocol = "https:";

// if (window.location.protocol != targetProtocol){

// window.location.href = targetProtocol + window.location.href.substring(window.location.protocol.length);

// }

console.log("hello aqua!");

// 默认几张选好的大图，给首页使用，thanks for 
$(document).ready(function () {
    var imageUrls = [
        "https://hidamarirhodonite.kirara.ca/spread/200206.png",
        "https://hidamarirhodonite.kirara.ca/spread/200644.png",
        "https://hidamarirhodonite.kirara.ca/spread/200809.png",
        "https://hidamarirhodonite.kirara.ca/spread/200935.png",
        "https://hidamarirhodonite.kirara.ca/spread/201007.png",
        "https://hidamarirhodonite.kirara.ca/spread/300491.png",
    ];

    $(".header-wrap").css("background-image", "url(" + imageUrls.sort(function () {
        return .5 - Math.random();
    })[0] + ")");
});


// header重新设置高度
const convertStyle = () => {
    $(".header-wrap").css("height", `${window.innerHeight}px`)
    // document.body.style.setProperty('height', `${window.innerHeight}px`);
}

window.addEventListener("resize", convertStyle);
window.addEventListener("DOMContentLoaded", convertStyle);

