import { useEffect } from "react";

const usePreloadImages = (images) => {
  useEffect(() => {
    images.forEach((src) => {
      const img = new Image();
      img.src = src;

      //img.onload = () =>
      //console.log(`✅ Immagine caricata con successo: ${src}`);
      //img.onerror = () =>
      //console.error(`❌ Errore nel caricamento dell'immagine: ${src}`);
    });
  }, [images]);
};

export default usePreloadImages;
