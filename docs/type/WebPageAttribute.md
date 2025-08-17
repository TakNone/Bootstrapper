# WebPageAttribute

**Description** : *Webpage attributes*

**Layer** : 211

```tl
webPageAttributeTheme#54b56617 flags:# documents:flags.0?Vector<Document> settings:flags.1?ThemeSettings = WebPageAttribute;
webPageAttributeStory#2e94c3e7 flags:# peer:Peer id:int story:flags.0?StoryItem = WebPageAttribute;
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
webPageAttributeUniqueStarGift#cf6f6db8 gift:StarGift = WebPageAttribute;
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**webPageAttributeTheme**](constructor/webPageAttributeTheme) | Page theme |
| [**webPageAttributeStory**](constructor/webPageAttributeStory) | Webpage preview of a Telegram story |
| [**webPageAttributeStickerSet**](constructor/webPageAttributeStickerSet) | Contains info about a stickerset », for a webPage preview of a stickerset deep link » (the webPage will have a type of telegram_stickerset) |
| [**webPageAttributeUniqueStarGift**](constructor/webPageAttributeUniqueStarGift) | NOTHING |
| [**webPageAttributeStarGiftCollection**](constructor/webPageAttributeStarGiftCollection) | NOTHING |