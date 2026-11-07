# messageEntityDiffReplace

**Description** : *Represents an diff replacement, render it as follows:*

**Layer** : 229

```tl
messageEntityDiffReplace#c6c1e5a7 offset:int length:int old_text:string = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>old_text</mark> | [`string`](type/string) | The chunk of text that was removed |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityDiffReplace(
	offset : 0,
	length : 29,
	old_text : '0ERx64dvOAl53jMX',
);
```