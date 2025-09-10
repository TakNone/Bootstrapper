# account.getChannelDefaultEmojiStatuses

**Description** : *Get a list of default suggested channel emoji statuses*

**Layer** : 214

```tl
account.getChannelDefaultEmojiStatuses#7727a7d5 hash:long = account.EmojiStatuses;
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
$accountEmojiStatuses = $client->account->getChannelDefaultEmojiStatuses(
	hash : 5614113748849535653,
);
```