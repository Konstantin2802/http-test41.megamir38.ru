{"version":3,"file":"script.min.js","sources":["script.js"],"names":["BXUrlPreview","element","this","inputElement","id","carouselElement","carouselImages","currentImageId","init","prototype","querySelector","initCarousel","bindEventHandlers","detachUrlPreview","value","style","display","attachUrlPreview","params","ufIdInput","ufId","getAttribute","requestParams","action","userFieldId","elementId","sessid","BX","bitrix_sessid","hasOwnProperty","url","ajax","method","data","onsuccess","length","tempDiv","document","createElement","oldStyles","cssText","innerHTML","newElement","firstElementChild","parentNode","replaceChild","removeProperty","bind","_this","detachElement","addEventListener","switchableElement","showEmbed","prevElement","nextElement","previousImage","nextImage","i","imageId","querySelectorAll","dataset","parseInt","setCarouselImage","imageUrl","imgElement","ufValue","map","imageElement","split","hasClass","addClass","removeClass","bindEmbedHandler","switchableElements","item"],"mappings":"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"}