# account.getUniqueGiftChatThemes

**Description** : *Obtain all chat themes &raquo; associated to owned collectible gifts &raquo;*

**Layer** : 225

```tl
account.getUniqueGiftChatThemes#e42ce9c9 offset:string limit:int hash:long = account.ChatThemes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash from a previously returned account.chatThemes constructor, to avoid returning any result if the theme list hasn't changed |

---

## Result

[account.ChatThemes](type/account.ChatThemes)

---

## Example

```php
$accountChatThemes = $client->account->getUniqueGiftChatThemes(
	offset : 'db9pMkguBFS2U7QI',
	limit : 98,
	hash : 0,
);
```