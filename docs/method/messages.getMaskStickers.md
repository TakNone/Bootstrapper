# messages.getMaskStickers

**Description** : *Get installed mask stickers*

**Layer** : 211

```tl
messages.getMaskStickers#640f82b8 hash:long = messages.AllStickers;
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
$messagesAllStickers = $client->messages->getMaskStickers(
	hash : -3808596441658508448,
);
```