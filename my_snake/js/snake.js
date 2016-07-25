	$(document).ready(function () {

	//подготавливаем рабочую область

	var	canvas = $('#canvas')[0];
	var ctx = canvas.getContext("2d");

	//размер рабочей области

	var w = $('#canvas').width();
	var h = $('#canvas').height();

	//Переменные для удобного обращения к ним

	var	cw = 10;
	var d;
	var meat;
	var score;

	//Переменная змейки

	var	snake;

	function init() {
	d = "right"; // расположение головы по умолчанию
	create_snake(); //Инициализирую змейку размером 2 ячейки
	create_meat(); //Создаем еденицу еды
	score = 0; //Счетчик счета ставим в 0

	if(typeof game_loop != "undefined") clearInterval(game_loop);
	game_loop = setInterval(paint, 60);
}

	$('#start').click(function () {
			init();
	});

//Создание змейки
function create_snake() {
var lenght = 2; //размер змейки(ячейки 1=10px)
snake = [];  // Объявляю змейку как пустой массив
for(var i = lenght-1;i>=0;i--){ //@заполняю змейку элементами заданными при иницализации, используя цикл for
	snake.push({x:i,y:0});
}
}

//Создаем еду рандомно на рабочей области  #canvas
function create_meat() {
	meat = {
						x: Math.round(Math.random()*(w-cw)/cw), // рандомом вычисляем координаты еды на рабочей области, дабы еда не выходила за 
						y: Math.round(Math.random()*(h-cw)/cw), // пределы экрана рандом функциявычисляется по формуле @(длинна - масштаб)/масштаб@ 
					};
}

//Прорисую элементы на canvas 
function paint() {
	ctx.fillStyle = "white";
	ctx.fillRect(0,0,w,h);
	ctx.strokeStyle = "black";
	ctx.strokeRect(0,0,w,h);

//Немного логики прорисовки
// @nx и @ny это координаты головы змейки

var nx = snake[0].x;
var ny = snake[0].y;

//определяем прорисовку элементов головы змейки при нажатых клавишах, клавиши объявленны ниже

if(d == "right") nx++;
else if(d == "left") nx--;
else if(d == "up") ny--;
else if(d == "down")ny++;

if(nx == -1 || nx == w/cw || ny == -1 || ny == h/cw || check_collision(nx, ny, snake))
{
	
	alert('Вы проиграли! Ваш счет '+score);
	init();
	return;
}

if(nx == meat.x && ny == meat.y)
{
	var tail = {x: nx, y: ny};
	score++;
	//Создаем пищу для змейки xD
	create_meat();
}
else
{
	var tail = snake.pop(); //берем последнюю яейчку
	tail.x = nx; tail.y = ny;
}

snake.unshift(tail); //Возращаем, но уже в качестве первой

for(var i = 0; i < snake.length; i++)
{
	var c = snake[i];
	//Прорисую новые ячейки змейки, таким же размером
	paint_snake(c.x, c.y);
}

paint_meat(meat.x, meat.y);

var score_text = "Счет: " + score; //Счетчик, прорисуем в нижней части холста, чтоб проще было отслеживать
ctx.fillText(score_text, 5, h-5);		// не используя php
}
function paint_snake(x, y)
{
	ctx.fillStyle = "orange";
	ctx.fillRect(x*cw, y*cw, cw, cw);
	ctx.strokeStyle = "white";
	ctx.strokeRect(x*cw, y*cw, cw, cw);
}

function paint_meat(x, y)
{
	ctx.fillStyle = "red";
	ctx.fillRect(x*cw, y*cw, cw, cw);
}

function check_collision(x, y, array)
{
	//Проверяем, существют ли координаты в массиве 
	for(var i = 0; i < array.length; i++)
	{
		if(array[i].x == x && array[i].y == y)
			return true;
	}
	return false;
}

//имитация нажатия управляющих клавиш
$(document).keydown(function(e){
	var key = e.which;
	if(key == "65" && d != "right") d = "left";
	else if(key == "87" && d != "down") d = "up";
	else if(key == "68" && d != "left") d = "right";
	else if(key == "83" && d != "up") d = "down";
})

})