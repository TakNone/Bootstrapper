# Document

**Description** : *A document*

**Layer** : 211

```tl
documentEmpty#36f8c871 id:long = Document;
document#8fd4c4d8 flags:# id:long access_hash:long file_reference:bytes date:int mime_type:string size:long thumbs:flags.0?Vector<PhotoSize> video_thumbs:flags.1?Vector<VideoSize> dc_id:int attributes:Vector<DocumentAttribute> = Document;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**documentEmpty**](constructor/documentEmpty) | Empty constructor, document doesn't exist |
| [**document**](constructor/document) | Document |