# account.getCollectibleEmojiStatuses

**Layer** : 211

```tl
account.getCollectibleEmojiStatuses#2e7b4543 hash:long = account.EmojiStatuses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[account.EmojiStatuses](type/account.EmojiStatuses)

---

## Example

```php
$accountEmojiStatuses = $client->account->getCollectibleEmojiStatuses(
	hash : 5927919255715566137,
);
```