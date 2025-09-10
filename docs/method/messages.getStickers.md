# messages.getStickers

**Description** : *Get stickers by emoji*

**Layer** : 214

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
	emoticon : '2B3MWcUGZgzX7PvA',
	hash : -205633847909475069,
);
```