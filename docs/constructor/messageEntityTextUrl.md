# messageEntityTextUrl

**Description** : *Message entity representing a text url: for in\-text urls like https://google\.com use messageEntityUrl*

**Layer** : 211

```tl
messageEntityTextUrl#76a6d327 offset:int length:int url:string = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>url</mark> | [`string`](type/string) | The actual URL |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityTextUrl(
	offset : 79,
	length : 12,
	url : 'https://docs.liveproto.dev',
);
```