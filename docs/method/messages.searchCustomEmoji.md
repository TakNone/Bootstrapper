# messages.searchCustomEmoji

**Description** : *Look for custom emojis associated to a UTF8 emoji*

**Layer** : 211

```tl
messages.searchCustomEmoji#2c11c0d7 emoticon:string hash:long = EmojiList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[EmojiList](type/EmojiList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMOTICON_EMPTY** | `400` | The emoji is empty |

---

## Example

```php
$emojiList = $client->messages->searchCustomEmoji(
	emoticon : 'RVnaD8lMSFg3Kx92',
	hash : 1742117736573091512,
);
```