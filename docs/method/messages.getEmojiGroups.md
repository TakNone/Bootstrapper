# messages.getEmojiGroups

**Description** : *Represents a list of emoji categories*

**Layer** : 216

```tl
messages.getEmojiGroups#7488ce5b hash:int = messages.EmojiGroups;
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
$messagesEmojiGroups = $client->messages->getEmojiGroups(
	hash : 0,
);
```