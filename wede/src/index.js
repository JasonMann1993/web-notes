import { cube } from './math.js';

function component() {
    var element = document.createElement('pre');
    element.innerHTML = [
        'hello webpack!',
        '5 cubed is equal to ' + cube(5)
    ].join('\n\n');

    return element;
}
// var array1 = [1,2,3,4]
// array1.map(item => {
//     console.log(this)// 箭头函数不会创建自己的this,它只会从自己的作用域链的上一层继承this
//     console.log(item);
// })
var todos = ['1', '2', '3']
const names = Array.from(todos, todo=>todo+'l') // 遍历并使用 map 方法
console.log(names)
document.body.appendChild(component());
