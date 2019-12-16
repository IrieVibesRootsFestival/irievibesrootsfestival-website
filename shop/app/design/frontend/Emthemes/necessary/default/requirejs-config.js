var config = {
  map: {
        "*": {
            'emslider': 'js/owlcarousel/owlslider',
            'modal' : 'Magento_Ui/js/modal/modal',
            'emmenu': 'js/menu/menu',
            'equalElement' : 'js/equalElement',
            'emCollapsible': 'js/emCollapsible'        
        }
    },
    paths:  {
        "owlslider" : "js/owlcarousel/owl.carousel.min",
        "detectmobile": "js/detectmobilebrowser"
    },
    "shim": {
      "js/owlcarousel/owl.carousel.min": ["jquery"],
      "js/detectmobilebrowser": ["jquery"]                
      },
  deps: [    
        "js/em0146",
        "js/emMegaMenu"
    ]
  
};
 
