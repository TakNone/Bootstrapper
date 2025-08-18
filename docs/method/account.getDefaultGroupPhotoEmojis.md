# account.getDefaultGroupPhotoEmojis

**Description** : *Get a set of suggested custom emoji stickers that can be used as group picture*

**Layer** : 211

```tl
account.getDefaultGroupPhotoEmojis#915860ae hash:long = EmojiList;
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
$emojiList = $client->account->getDefaultGroupPhotoEmojis(
	hash : -7885005517505469294,
);
```