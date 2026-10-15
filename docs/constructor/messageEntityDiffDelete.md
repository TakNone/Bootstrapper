# messageEntityDiffDelete

**Description** : *Represents an diff deletion: render it by simply underlining the specified section and coloring it in red, see here &raquo; for more info on how to render diff entities*

**Layer** : 229

```tl
messageEntityDiffDelete#652c1c5 offset:int length:int = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityDiffDelete(
	offset : 0,
	length : 57,
);
```