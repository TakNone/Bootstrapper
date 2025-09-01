# messages.getUniqueGiftChatThemes

**Layer** : 214

```tl
messages.getUniqueGiftChatThemes#fe74ef9f offset:int limit:int hash:long = ChatThemes;
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

[ChatThemes](type/ChatThemes)

---

## Example

```php
$chatThemes = $client->messages->getUniqueGiftChatThemes(
	offset : 51,
	limit : 75,
	hash : 2951007269882023714,
);
```