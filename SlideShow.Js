var i = 1;
var imgs = ['HomepagePics/1.png','HomepagePics/2.png','HomepagePics/3.png'];  //load images
var time = 10000;
var imgID = document.getElementById("slide");
imgID.src = `HomepagePics/1.png`;

function changeimg()
{  
  
    console.log(imgID);
    if( i < imgs.length )
    {
      i++;
      
    }
    else
    {
        i = 1;
    }
    imgID.src = `HomepagePics/${i}.png`;
    setTimeout("changeimg()", time);
}

function leftBtn()
{
  if (i < imgs.length && i != 0)
  {
    i = i -1;
    imgID.src = `HomepagePics/${i}.png`;
  }
  else
  {
    i = 1;
    imgID.src = `HomepagePics/${i}.png`;
  }

}

function rightBtn()
{
  if (i < imgs.length  && i != 4)
  {
    i++;
    imgID.src = `HomepagePics/${i}.png`;
  }
  else
  {
    i = 1;
    imgID.src = `HomepagePics/${i}.png`;
  }
}
changeimg()
