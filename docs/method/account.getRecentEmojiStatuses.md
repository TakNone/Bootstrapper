# account.getRecentEmojiStatuses

**Description** : *Get recently used emoji statuses*

**Layer** : 211

```tl
account.getRecentEmojiStatuses#f578105 hash:long = account.EmojiStatuses;
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
$accountEmojiStatuses = $client->account->getRecentEmojiStatuses(
	hash : 1093551208271996775,
);
```