# account.getUniqueGiftChatThemes

**Layer** : 214

```tl
account.getUniqueGiftChatThemes#fe74ef9f offset:int limit:int hash:long = account.ChatThemes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[account.ChatThemes](type/account.ChatThemes)

---

## Example

```php
$accountChatThemes = $client->account->getUniqueGiftChatThemes(
	offset : 0,
	limit : 23,
	hash : 0,
);
```