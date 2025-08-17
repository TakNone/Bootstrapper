# messages.FeaturedStickers

**Description** : *Featured stickers*

**Layer** : 211

```tl
messages.featuredStickersNotModified#c6dc0c66 count:int = messages.FeaturedStickers;
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.featuredStickersNotModified**](constructor/messages.featuredStickersNotModified) | Featured stickers haven't changed |
| [**messages.featuredStickers**](constructor/messages.featuredStickers) | Featured stickersets |