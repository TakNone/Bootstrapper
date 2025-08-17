# account.getChannelRestrictedStatusEmojis

**Description** : *Returns fetch the full list of custom emoji IDs » that cannot be used in channel emoji statuses »*

**Layer** : 211

```tl
account.getChannelRestrictedStatusEmojis#35a9e0d5 hash:long = EmojiList;
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
$emojiList = $client->account->getChannelRestrictedStatusEmojis(
	hash : 3873920727716269465,
);
```