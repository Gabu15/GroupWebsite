var i = 1;
var imgs = ['HomepagePics/Ad_1.png','HomepagePics/Ad_2.png','HomepagePics/Ad_3.png'];  //load images
var time = 10000;
var imgID = document.getElementById("slide");
imgID.src = `HomepagePics/Ad_1.png`;
var timer = setTimeout("changeimgAuto()", time);

function changeimgAuto()
{  
  
    console.log(imgID);
    if( i < imgs.length)
    {
      i++;
      
    }
    else
    {
        i = 1;
    }
    imgID.src = `HomepagePics/Ad_${i}.png`;
    timer = setTimeout("changeimgAuto()", time);
}

function leftBtn()
{
  if (i < imgs.length + 1 )
  {
    console.log("hlll")
    
    i = i -1;
    if (i == 0)
    {

      i = 3
    }
    imgID.src = `HomepagePics/Ad_${i}.png`;
    clearTimeout(timer);
    timer = setTimeout("changeimgAuto()", time + 10000);

  }

}

function rightBtn()
{
  if (i < imgs.length + 1)
  {
    i++;
    if (i == 4)
    {
      i = 1
    }
    imgID.src = `HomepagePics/Ad_${i}.png`;
    clearTimeout(timer);
    timer = setTimeout("changeimgAuto()", time + 10000);


  }
}
