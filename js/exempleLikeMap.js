
map = {
    1: () => {console.log('1')},
    2: () => {console.log('2')},
    3: () => {console.log('3')},
    4: () => {console.log('4')},
    5: () => {console.log('5')},
    6: () => {console.log('6')},
    default: () => {console.log('default')},
}

function switchh(key) {
    if (map[key]) {
        map[key]();
    } else {
        map['default']();
    }
}

switchh(3);