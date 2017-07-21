<html>
<head>
<script>
var GB_Top = 10;
var GB_Left = 10;
function ShowCanvas()
{
   var canvas1 = document.getElementById('canvas1');
   canvas1.style.position = 'absolute';
   canvas1.style.top = GB_Top;
   canvas1.style.left = GB_Left;
   canvas1.width = 100
   canvas1.height = 100
   var ctx1 = canvas1.getContext('2d');
   ctx1.beginPath();
   ctx1.arc(50,50,40,0,2*Math.PI);
   ctx1.stroke(); 
}
function MyKeyD (event)
{
	var MyObj = document.getElementById('canvas1');
	var MyIN = document.getElementById('k1');
	switch (event.keyCode)
	{
		case 37 : // Key left
		    GB_Left--;
			break;
		case 38 : // Key up
		    GB_Top--;
			break;
		case 39 : // Key right
		    GB_Left++;
			break;
		case 40 : // Key down
		    GB_Top++;
			break;
	}
	MyObj.style.top = GB_Top;
	MyObj.style.left = GB_Left;
    MyIN.value = event.keyCode + ":" + MyObj.style.top + ":" + MyObj.style.left;
}
</script>

<script src="../WebGL/WebGL/resources/webgl-utils.js"></script>
<script id="2d-vertex-shader" type="notjs">

  // an attribute will receive data from a buffer
  attribute vec4 a_position;

  // all shaders have a main function
  void main() {

    // gl_Position is a special variable a vertex shader
    // is responsible for setting
    gl_Position = a_position;
  }

</script>

<script id="2d-fragment-shader" type="notjs">

  // fragment shaders don't have a default precision so we need
  // to pick one. mediump is a good default
  precision mediump float;

  void main() {
    // gl_FragColor is a special variable a fragment shader
    // is responsible for setting
    gl_FragColor = vec4(1, 0, 0.5, 1); // return redish-purple
  }

</script>
<script>
"use strict";

function createShader(gl, type, source) {
  var shader = gl.createShader(type);
  gl.shaderSource(shader, source);
  gl.compileShader(shader);
  var success = gl.getShaderParameter(shader, gl.COMPILE_STATUS);
  if (success) {
    return shader;
  }

  console.log(gl.getShaderInfoLog(shader));
  gl.deleteShader(shader);
}

function createProgram(gl, vertexShader, fragmentShader) {
  var program = gl.createProgram();
  gl.attachShader(program, vertexShader);
  gl.attachShader(program, fragmentShader);
  gl.linkProgram(program);
  var success = gl.getProgramParameter(program, gl.LINK_STATUS);
  if (success) {
    return program;
  }

  console.log(gl.getProgramInfoLog(program));
  gl.deleteProgram(program);
}

function main() {
  // Get A WebGL context
  var canvas = document.getElementById("c");
  var gl = canvas.getContext("webgl");
  if (!gl) {
    return;
  }

  // Get the strings for our GLSL shaders
  var vertexShaderSource = document.getElementById("2d-vertex-shader").text;
  var fragmentShaderSource = document.getElementById("2d-fragment-shader").text;

  // create GLSL shaders, upload the GLSL source, compile the shaders
  var vertexShader = createShader(gl, gl.VERTEX_SHADER, vertexShaderSource);
  var fragmentShader = createShader(gl, gl.FRAGMENT_SHADER, fragmentShaderSource);

  // Link the two shaders into a program
  var program = createProgram(gl, vertexShader, fragmentShader);

  // look up where the vertex data needs to go.
  var positionAttributeLocation = gl.getAttribLocation(program, "a_position");

  // Create a buffer and put three 2d clip space points in it
  var positionBuffer = gl.createBuffer();

  // Bind it to ARRAY_BUFFER (think of it as ARRAY_BUFFER = positionBuffer)
  gl.bindBuffer(gl.ARRAY_BUFFER, positionBuffer);

  var positions = [
    0, 0,
    0, 0.5,
    0.7, 0,
  ];
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(positions), gl.STATIC_DRAW);

  // code above this line is initialization code.
  // code below this line is rendering code.

  webglUtils.resizeCanvasToDisplaySize(gl.canvas);

  // Tell WebGL how to convert from clip space to pixels
  gl.viewport(0, 0, gl.canvas.width, gl.canvas.height);

  // Clear the canvas
  gl.clearColor(0, 0, 0, 0);
  gl.clear(gl.COLOR_BUFFER_BIT);

  // Tell it to use our program (pair of shaders)
  gl.useProgram(program);

  // Turn on the attribute
  gl.enableVertexAttribArray(positionAttributeLocation);

  // Bind the position buffer.
  gl.bindBuffer(gl.ARRAY_BUFFER, positionBuffer);

  // Tell the attribute how to get data out of positionBuffer (ARRAY_BUFFER)
  var size = 2;          // 2 components per iteration
  var type = gl.FLOAT;   // the data is 32bit floats
  var normalize = false; // don't normalize the data
  var stride = 0;        // 0 = move forward size * sizeof(type) each iteration to get the next position
  var offset = 0;        // start at the beginning of the buffer
  gl.vertexAttribPointer(
      positionAttributeLocation, size, type, normalize, stride, offset)

  // draw
  var primitiveType = gl.TRIANGLES;
  var offset = 0;
  var count = 3;
  gl.drawArrays(primitiveType, offset, count);
}

main();
</script>

</head>
<body onkeypress="return MyKeyD(event);">
<input type=text size=10 id=k1 name=k1>
<canvas id="canvas1" name="canvas1" ></canvas>
<canvas id="c" name="c" ></canvas>
<script>
ShowCanvas()
window.setInterval(DropBall, 75);
function DropBall()
{
   var MyObj = document.getElementById('canvas1');
   GB_Top++;
   MyObj.style.top = GB_Top;
   MyObj.style.left = GB_Left;
}
</script>



</body>
</html>