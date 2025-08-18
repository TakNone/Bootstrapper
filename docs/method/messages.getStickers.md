# messages.getStickers

**Description** : *Get stickers by emoji*

**Layer** : 211

```tl
messages.getStickers#d5a5d3a1 emoticon:string hash:long = messages.Stickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.Stickers](type/messages.Stickers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMOTICON_EMPTY** | `400` | The emoji is empty |

---

## Example

```php
$messagesStickers = $client->messages->getStickers(
	emoticon : 'dljzZw9g1Ye54a6P',
	hash : -789866926525202021,
);
```