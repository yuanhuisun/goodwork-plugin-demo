import MailPreview from './MailPreview.vue'

var ComponentClass = Vue.extend(MailPreview)
var component = window.comp = new ComponentClass().$mount()

const targetNode = document.getElementById('profile-dropdown-container');

const config = { childList: true };

const callback = function (mutationsList, observer) {
    for (let mutation of mutationsList) {
        if (mutation.type === 'childList' && mutation.addedNodes[0] && mutation.addedNodes[0].id === 'profile-menu') {
            var refNode = document.getElementById('profile-menu').childNodes[4]
            
            document.getElementById('profile-menu').insertBefore(component.$el, refNode)
        }
    }
};

const observer = new MutationObserver(callback);
observer.observe(targetNode, config);
