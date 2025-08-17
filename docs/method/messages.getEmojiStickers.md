# messages.getEmojiStickers

**Description** : *Gets the list of currently installed custom emoji stickersets*

**Layer** : 211

```tl
messages.getEmojiStickers#fbfca18f hash:long = messages.AllStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.AllStickers](type/messages.AllStickers)

---

## Example

```php
$messagesAllStickers = $client->messages->getEmojiStickers(
	hash : 6751436205060739030,
);
```