# EmojiStatus

**Description** : *Emoji status*

**Layer** : 211

```tl
emojiStatusEmpty#2de11aae = EmojiStatus;
emojiStatus#e7ff068a flags:# document_id:long until:flags.0?int = EmojiStatus;
emojiStatusCollectible#7184603b flags:# collectible_id:long document_id:long title:string slug:string pattern_document_id:long center_color:int edge_color:int pattern_color:int text_color:int until:flags.0?int = EmojiStatus;
inputEmojiStatusCollectible#7141dbf flags:# collectible_id:long until:flags.0?int = EmojiStatus;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**emojiStatusEmpty**](constructor/emojiStatusEmpty) | No emoji status is set |
| [**emojiStatus**](constructor/emojiStatus) | An emoji status |
| [**emojiStatusCollectible**](constructor/emojiStatusCollectible) | NOTHING |
| [**inputEmojiStatusCollectible**](constructor/inputEmojiStatusCollectible) | NOTHING |