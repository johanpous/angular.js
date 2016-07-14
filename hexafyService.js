app.service('hexafy', function() {
    this.myFunc = function (x) {
        return x.toString(16);
    }

    this.myFuncOctal = function (x) {
        return x.toString(8);
    }

    this.myFuncBinary = function (x) {
        return x.toString(2);
    }
});