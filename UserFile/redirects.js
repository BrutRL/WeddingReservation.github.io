const btnPhoto = document.getElementById('btndiscover3');

btnPhoto.addEventListener('click',()=>{
    window.location.assign("../GalleryFile/gallery.php");
})

const btnVenue = document.getElementById('btndiscover2');
     btnVenue.addEventListener('click',()=>{
        window.location.assign("../VenueFile/venues.php");
     })
const btnPackage = document.getElementById('btndiscover4');
       btnPackage.addEventListener('click',()=>{
            window.location.assign("../PackageFile/packageList.php");
        })

const btnFood = document.getElementById('btndiscover');
     btnFood.addEventListener('click',()=>{
          window.location.assign("../FoodFile/catteringList.php");
       })