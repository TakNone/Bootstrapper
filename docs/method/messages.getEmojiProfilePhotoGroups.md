# messages.getEmojiProfilePhotoGroups

**Description** : *Represents a list of emoji categories, to be used when selecting custom emojis to set as profile picture*

**Layer** : 216

```tl
messages.getEmojiProfilePhotoGroups#21a548f3 hash:int = messages.EmojiGroups;
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
$messagesEmojiGroups = $client->messages->getEmojiProfilePhotoGroups(
	hash : 0,
);
```