# messages.getFeaturedEmojiStickers

**Description** : *Gets featured custom emoji stickersets*

**Layer** : 211

```tl
messages.getFeaturedEmojiStickers#ecf6736 hash:long = messages.FeaturedStickers;
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
$messagesFeaturedStickers = $client->messages->getFeaturedEmojiStickers(
	hash : 5846489828474607607,
);
```