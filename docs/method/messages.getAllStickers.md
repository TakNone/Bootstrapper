# messages.getAllStickers

**Description** : *Get all installed stickers*

**Layer** : 211

```tl
messages.getAllStickers#b8a0a1a8 hash:long = messages.AllStickers;
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
$messagesAllStickers = $client->messages->getAllStickers(
	hash : -5798502127038312523,
);
```