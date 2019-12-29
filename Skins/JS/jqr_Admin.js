function checkAll(n, fldName) {
    if (!fldName) {
        fldName = 'cb';
    }

    var f = document.vswForm;
    var c = f.toggle.checked;
    var n2 = 0;

    for (var i = 0; i < n; i++) {
        var cb = eval('f.' + fldName + '' + i);
        if (cb) {
            cb.checked = c;
            n2++;
        }
    }

    if (c) {
        document.vswForm.boxchecked.value = n2;
    } else {
        document.vswForm.boxchecked.value = 0;
    }
}