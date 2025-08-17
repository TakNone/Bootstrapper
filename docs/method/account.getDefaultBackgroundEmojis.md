# account.getDefaultBackgroundEmojis

**Description** : *Get a set of suggested custom emoji stickers that can be used in an accent color pattern*

**Layer** : 211

```tl
account.getDefaultBackgroundEmojis#a60ab9ce hash:long = EmojiList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[EmojiList](type/EmojiList)

---

## Example

```php
$emojiList = $client->account->getDefaultBackgroundEmojis(
	hash : 6071251652237744076,
);
```