# account.getDefaultEmojiStatuses

**Description** : *Get a list of default suggested emoji statuses*

**Layer** : 211

```tl
account.getDefaultEmojiStatuses#d6753386 hash:long = account.EmojiStatuses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[account.EmojiStatuses](type/account.EmojiStatuses)

---

## Example

```php
$accountEmojiStatuses = $client->account->getDefaultEmojiStatuses(
	hash : -8644038404936761600,
);
```