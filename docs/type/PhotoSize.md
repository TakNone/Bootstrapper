# PhotoSize

**Description** : *Location of a certain size of a picture*

**Layer** : 211

```tl
photoSizeEmpty#e17e23c type:string = PhotoSize;
photoSize#75c78e60 type:string w:int h:int size:int = PhotoSize;
photoCachedSize#21e1ad6 type:string w:int h:int bytes:bytes = PhotoSize;
photoStrippedSize#e0b0bc2e type:string bytes:bytes = PhotoSize;
photoSizeProgressive#fa3efb95 type:string w:int h:int sizes:Vector<int> = PhotoSize;
photoPathSize#d8214d41 type:string bytes:bytes = PhotoSize;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**photoSizeEmpty**](constructor/photoSizeEmpty) | Empty constructor. Image with this thumbnail is unavailable |
| [**photoSize**](constructor/photoSize) | Image description |
| [**photoCachedSize**](constructor/photoCachedSize) | Description of an image and its content |
| [**photoStrippedSize**](constructor/photoStrippedSize) | A low-resolution compressed JPG payload |
| [**photoSizeProgressive**](constructor/photoSizeProgressive) | Progressively encoded photosize |
| [**photoPathSize**](constructor/photoPathSize) | Messages with animated stickers can have a compressed svg (< 300 bytes) to show the outline of the sticker before fetching the actual lottie animation |