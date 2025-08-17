# EmojiGroup

**Description** : *Represents an emoji category*

**Layer** : 211

```tl
emojiGroup#7a9abda9 title:string icon_emoji_id:long emoticons:Vector<string> = EmojiGroup;
emojiGroupGreeting#80d26cc7 title:string icon_emoji_id:long emoticons:Vector<string> = EmojiGroup;
emojiGroupPremium#93bcf34 title:string icon_emoji_id:long = EmojiGroup;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**emojiGroup**](constructor/emojiGroup) | Represents an emoji category |
| [**emojiGroupGreeting**](constructor/emojiGroupGreeting) | Represents an emoji category, that should be moved to the top of the list when choosing a sticker for a business introduction |
| [**emojiGroupPremium**](constructor/emojiGroupPremium) | An emoji category, used to select all Premium-only stickers (i.e. those with a Premium effect »)/Premium-only custom emojis (i.e. those where the documentAttributeCustomEmoji.free flag is not set) |