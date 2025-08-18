# messages.getEmojiStatusGroups

**Description** : *Represents a list of emoji categories, to be used when selecting custom emojis to set as custom emoji status*

**Layer** : 211

```tl
messages.getEmojiStatusGroups#2ecd56cd hash:int = messages.EmojiGroups;
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
$messagesEmojiGroups = $client->messages->getEmojiStatusGroups(
	hash : 100,
);
```