# account.getCollectibleEmojiStatuses

**Description** : *Obtain a list of emoji statuses &raquo; for owned collectible gifts*

**Layer** : 216

```tl
account.getCollectibleEmojiStatuses#2e7b4543 hash:long = account.EmojiStatuses;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash for pagination |

---

## Result

[account.EmojiStatuses](type/account.EmojiStatuses)

---

## Example

```php
$accountEmojiStatuses = $client->account->getCollectibleEmojiStatuses(
	hash : 0,
);
```