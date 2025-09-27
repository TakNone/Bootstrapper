# messages.getUniqueGiftChatThemes

**Layer** : 216

```tl
messages.getUniqueGiftChatThemes#e42ce9c9 offset:string limit:int hash:long = ChatThemes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[ChatThemes](type/ChatThemes)

---

## Example

```php
$chatThemes = $client->messages->getUniqueGiftChatThemes(
	offset : 'Z7liJBAuV9qRosgT',
	limit : 81,
	hash : 0,
);
```