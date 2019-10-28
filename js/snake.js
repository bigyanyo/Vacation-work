function game() 
{

var lvl = 160; // Game level, by decreasing will speed up
var box_width = 45; // Width 
var box_height = 30; // Height
var points = 50; // Score
var color_snake = "#006699"; // Snake Color
var canvas_attb; // Canvas attributes
var tn = []; // temp directions storage
var x_ax = [-1, 0, 1, 0]; // position adjusments
var y_ax = [0, -1, 0, 1]; // position adjusments
var queue = []; 
var food = 1; // defalut food

var map = [];
var math_randomp = Math.random; 
var X = 5 + (math_randomp() * (box_width - 10))|0; // Calculate positions
var Y = 5 + (math_randomp() * (box_height - 10))|0; // Calculate positions
var direction = math_randomp() * 3 | 0; 
var interval = 0;
var score = 0;
var sum = 0, easy = 0;
var i, dir;

// getting play area 
var c = document.getElementById('playArea');
canvas_attb = c.getContext('2d');

// Map positions
for (i = 0; i < box_width; i++)
{
map[i] = [];
}

// random placement of snake food
function rand_food() 
{
var x, y;
do 
{
x = math_randomp() * box_width|0;
y = math_randomp() * box_height|0;
} 
while (map[x][y]);
map[x][y] = 1;
canvas_attb.fillStyle = color_snake;
canvas_attb.strokeRect(x * 10+1, y * 10+1, 8, 8);
}

// Default somewhere placement 
rand_food();
function set_game_speed() 
{
if (easy) 
{
X = (X+box_width)%box_width;
Y = (Y+box_height)%box_height;
}
--points;
if (tn.length) 
{
dir = tn.pop();
if ((dir % 2) !== (direction % 2)) 
{
direction = dir;
}
}
if ((easy || (0 <= X && 0 <= Y && X < box_width && Y < box_height)) && 2 !== map[X][Y]) 
{
if (1 === map[X][Y]) 
{
score+= Math.max(5, points);
points = 50;
rand_food();
food++;
}

//canvas_attb.fillStyle("#ffffff");
canvas_attb.fillRect(X * 10, Y * 10, 9, 9);
map[X][Y] = 2;
queue.unshift([X, Y]);
X+= x_ax[direction];
Y+= y_ax[direction];
if (food < queue.length) 
{
dir = queue.pop()
map[dir[0]][dir[1]] = 0;
canvas_attb.clearRect(dir[0] * 10, dir[1] * 10, 10, 10);
}
} 
else if (!tn.length) 
{
var msg_score = document.getElementById("message");
msg_score.innerHTML = "Score : <b>"+score+"</b><br /><br /><input type='button' value='Play Again' onclick='window.location.reload();' />";
document.getElementById("playArea").style.display = 'none';
window.clearInterval(interval);
}
}
interval = window.setInterval(set_game_speed, lvl);

document.onkeydown = function(e) {
var code = e.keyCode - 37;
if (0 <= code && code < 4 && code !== tn[0]) 
{
tn.unshift(code);
} 
else if (-5 == code) 
{
if (interval) 
{
window.clearInterval(interval);
interval = 0;
} 
else 
{
interval = window.setInterval(set_game_speed, 60);
}
}
else 
{ 
dir = sum + code;
if (dir == 44||dir==94||dir==126||dir==171) {
sum+= code
} else if (dir === 218) easy = 1;
}
}