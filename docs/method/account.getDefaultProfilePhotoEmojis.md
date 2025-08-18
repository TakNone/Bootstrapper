# account.getDefaultProfilePhotoEmojis

**Description** : *Get a set of suggested custom emoji stickers that can be used as profile picture*

**Layer** : 211

```tl
account.getDefaultProfilePhotoEmojis#e2750328 hash:long = EmojiList;
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
$emojiList = $client->account->getDefaultProfilePhotoEmojis(
	hash : 6390655014258340164,
);
```