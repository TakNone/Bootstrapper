# messages.FoundStickers

**Description** : *Found stickers*

**Layer** : 211

```tl
messages.foundStickersNotModified#6010c534 flags:# next_offset:flags.0?int = messages.FoundStickers;
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.foundStickersNotModified**](constructor/messages.foundStickersNotModified) | No new stickers were found for the specified query |
| [**messages.foundStickers**](constructor/messages.foundStickers) | Found stickers |