const getMenu = document.getElementById("site-nav");

const getHamburger = document.getElementById("hamburger-menu");

const getClose = document.getElementById("hamburger-close");

function showMenu() {
    event.stopPropagation();
    getMenu.style.display = "block";

    getHamburger.style.display = "none";

    getClose.style.display = "block";
}
getHamburger.addEventListener("click", showMenu);

function hideMenu() {
    event.stopPropagation();
    getMenu.style.display = "none";

    getClose.style.display = "none";

    getHamburger.style.display = "block";
}
getClose.addEventListener("click", hideMenu);

//sub menu

var menuItems = getMenu.querySelectorAll("li.menu-item-has-children");
var subMenu;
Array.prototype.forEach.call(menuItems, function (el, i) {
    var toggleButton = el.querySelector(".sub-menu-toggle");

    toggleButton.addEventListener("click", function (event) {
        var toggleParent = this.parentElement;
        subMenu = toggleParent.nextElementSibling;
        subMenu.setAttribute("tabindex", 0);
        subMenu.classList.toggle("show-submenu");
        event.stopPropagation();
        document.addEventListener("click", hideMenuOnEvent);
        document.addEventListener("touchStart", hideMenuOnEvent);
    });
});

function hideMenuOnEvent() {
    const isSubMenu = subMenu.contains(event.target);
    const isMainMenu = getMenu.contains(event.target);

    if (!isSubMenu) {
        subMenu.classList.remove("show-submenu");
    }
    if (!isMainMenu) {
        hideMenu();
    }
}

/* 
        ---Table of Contents Js --------
*/

const article = document.getElementById("single-article");
const headings = article.querySelectorAll("h2, h3");
const toc = document.getElementById("toc");
const totalHeadings = headings.length;
let tocOl = document.createElement("ol");
let tocFragment = new DocumentFragment();
let mainLi = null;
let subUl = null;
let subLi = null;
isSibling = false;
if(totalHeadings > 1) {
for (let element of headings) {
    let anchor = document.createElement("a");
    let anchorText = element.innerText;
    anchor.innerText = anchorText;
    let elementId = anchorText.replaceAll(" ", "-").toLowerCase();
    anchor.href = "#" + elementId;
    element.id = elementId;
    let level = element.nodeName;

    if ("H3" === level) {
        if (mainLi) {
            subLi = document.createElement("li");
            subLi.appendChild(anchor);

            if (isSibling === false) {
                subUl = document.createElement("ul");
            }
            subUl.appendChild(subLi);
            mainLi.appendChild(subUl);

            isSibling = true;
        }
    } else {
        mainLi = document.createElement("li");
        mainLi.appendChild(anchor);
        tocFragment.appendChild(mainLi);
        isSibling = false;
        subUl = null;
    }
}
tocOl.append(tocFragment);
toc.append(tocOl);
} else {
	toc.style.display = "none";
}
