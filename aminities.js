function start() {
    var amenities = document.getElementById('amenitiesSelect');
  
    amenities.addEventListener('change', function() {
      var category = amenities.value;
  
      switch (category) {
        case 'kitchen':
          setImages('kitchen');
          break;
        case 'bathroom':
          setImages('bath');
          break;
        case 'bedroom':
          setImages('bed');
          break;
        case 'livingroom':
          setImages('room');
          break;
        default:
          setImages('outdoor');
      }
    });//change event function for consdering the selection done by user
  
    function setImages(imgType) {
      for (let i = 1; i <= 6; i++) {
        let myImage = document.querySelector(`#amenitiesImg${i}`);
        myImage.setAttribute('src', `images/${imgType}${i}.jpg`);
      }//end for loop
    }//end setImages()
  }//end start()
  
  //window load event
  window.addEventListener("load", start, false);