export const delegate = function (cssClass, myfunction) {
    return function (event) {
    // delegate code hier 
    if (event.target.matches(cssClass)) {
        myfunction(event);
        }
    }
};