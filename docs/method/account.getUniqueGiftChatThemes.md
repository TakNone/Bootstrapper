# account.getUniqueGiftChatThemes

**Description** : *Obtain all chat themes &raquo; associated to owned or hosted collectible gifts &raquo;*

**Layer** : 229

```tl
account.getUniqueGiftChatThemes#e42ce9c9 offset:string limit:int hash:long = account.ChatThemes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, intially an empty string, then equal the value of the last returned account.chatThemes.next_offset (if set) |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination. Note that the server may return less than limit results, even if the actual number of remaining results is >= limit, paginate to fetch them all |
| <mark>hash</mark> | [`long`](type/long) | Hash from a previously returned account.chatThemes constructor, to avoid returning any result if the theme list hasn't changed |

---

## Result

[account.ChatThemes](type/account.ChatThemes)

---

## Example

```php
$accountChatThemes = $client->account->getUniqueGiftChatThemes(
	offset : 'n2Fpc15syiWGutgC',
	limit : 13,
	hash : 0,
);
```