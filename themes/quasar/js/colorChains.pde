/* 2D grid sketch */
 
//Define object color (hex colors)
int color = #85288F;
//Define distance variable
int maxDistance = 300;
 

void setup() {
  size(1024, 300, P3D);
 }
 
 
//--------------------------------------------------DRAW LOOP
 
void draw() {
  //Define background to be black
  background(0);
  //Define drawn objects to be smooth
  smooth();
  //Define objects to be without fill (faster to render)
  noFill();
  //Define line (stroke) color of drawn objects
  stroke(color);
  //Define lineweight of drawn objects
  strokeWeight(5);
 
  //Create loop beginning at 0, with 25px increments. Loop is named gridY and constrained by sketch height.
  for (int gridY=0; gridY<height; gridY=gridY+15)
 
  {
    //Create new loop within last, beginning at 0, with 25px increments. Loop is named gridX and constrained by sketch width.
    for (int gridX=0; gridX<width; gridX=gridX+25)
 
    {
      //Create two PVectors (types of drawn objects)
      PVector mousePos, shapePos;
      //Define mousePos with mouse coordinates
      mousePos = new PVector (mouseX, mouseY);
      //Define shapePos with grid coordinates
      shapePos = new PVector (gridX, gridY);
       
      //Define diameter of objects to be related to the distance between mousePos and shapePos.
      float diameter = dist(mousePos.x, mousePos.y, shapePos.x, shapePos.y);
       
      //Initiate pushMatrix to enable 3-dimensional shifts in coordinates
      pushMatrix();
 
      //Define diameter variables to be 20 times divided by the maxDistance variable.
      diameter = diameter*20/maxDistance;
 
      //Enable translate to allow height change
      translate(gridX, gridY, 0);
       
      //Define type of shape the objects are (circles) with coordinates and diameter variables.
      ellipse(0, 0, diameter, diameter);
 
      //Enable popMatrix at the end of loop for matrix to repeat.
      popMatrix();
    }
  }
}
 
//Define mouseMoved variables to enable changes when mouse cursor moves across sketch.
void mouseMoved()
{
  //Define color variable to increase in value by 250 (hex colors).
  if(mouseX < width/3)
    color = #85288F;  
  else if(mouseX > width/3 && mouseX < width/2)
    color = #00ADEF; 
  else
    color = #2A2B7A;

}
 

