# messages.getEmojiStickerGroups

**Description** : *Represents a list of emoji categories, to be used when choosing a sticker*

**Layer** : 211

```tl
messages.getEmojiStickerGroups#1dd840f5 hash:int = messages.EmojiGroups;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[messages.EmojiGroups](type/messages.EmojiGroups)

---

## Example

```php
$messagesEmojiGroups = $client->messages->getEmojiStickerGroups(
	hash : 84,
);
```