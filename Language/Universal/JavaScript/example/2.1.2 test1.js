function strlen(str) {
    var len;
    var i;
    len = 0;
    for (i = 0; i < str.length; i++) {
        if (str.charCodeAt(i) > 255)
            len += 2;
        else
            len++;
    }
    return len;
}

function temp(){
    return 3/2;
}