# account.getUniqueGiftChatThemes

**Description** : *Obtain all chat themes &raquo; associated to owned collectible gifts &raquo;*

**Layer** : 216

```tl
account.getUniqueGiftChatThemes#fe74ef9f offset:int limit:int hash:long = account.ChatThemes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash from a previously returned account.chatThemes constructor, to avoid returning any result if the theme list hasn't changed |

---

## Result

[account.ChatThemes](type/account.ChatThemes)

---

## Example

```php
$accountChatThemes = $client->account->getUniqueGiftChatThemes(
	offset : 0,
	limit : 98,
	hash : 0,
);
```