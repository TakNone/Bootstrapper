# WebPageAttribute

**Description** : *Webpage attributes*

**Layer** : 218

```tl
webPageAttributeTheme#54b56617 flags:# documents:flags.0?Vector<Document> settings:flags.1?ThemeSettings = WebPageAttribute;
webPageAttributeStory#2e94c3e7 flags:# peer:Peer id:int story:flags.0?StoryItem = WebPageAttribute;
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
webPageAttributeUniqueStarGift#cf6f6db8 gift:StarGift = WebPageAttribute;
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
webPageAttributeStarGiftAuction#34986ab gift:StarGift end_date:int center_color:int edge_color:int text_color:int = WebPageAttribute;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**webPageAttributeTheme**](constructor/webPageAttributeTheme) | Page theme |
| [**webPageAttributeStory**](constructor/webPageAttributeStory) | Webpage preview of a Telegram story |
| [**webPageAttributeStickerSet**](constructor/webPageAttributeStickerSet) | Contains info about a stickerset », for a webPage preview of a stickerset deep link » (the webPage will have a type of telegram_stickerset) |
| [**webPageAttributeUniqueStarGift**](constructor/webPageAttributeUniqueStarGift) | Contains info about collectible gift » for a webPage preview of a collectible gift » (the webPage will have a type of telegram_nft) |
| [**webPageAttributeStarGiftCollection**](constructor/webPageAttributeStarGiftCollection) | Contains info about a gift collection » for a webPage preview of a gift collection » (the webPage will have a type of telegram_collection) |
| [**webPageAttributeStarGiftAuction**](constructor/webPageAttributeStarGiftAuction) | NOTHING |