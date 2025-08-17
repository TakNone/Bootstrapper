# messages.getFeaturedStickers

**Description** : *Get featured stickers*

**Layer** : 211

```tl
messages.getFeaturedStickers#64780b14 hash:long = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->getFeaturedStickers(
	hash : 2574862533190543664,
);
```