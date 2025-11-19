# messages.getFavedStickers

**Description** : *Get faved stickers*

**Layer** : 218

```tl
messages.getFavedStickers#4f1aaa9 hash:long = messages.FavedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.FavedStickers](type/messages.FavedStickers)

---

## Example

```php
$messagesFavedStickers = $client->messages->getFavedStickers(
	hash : 0,
);
```