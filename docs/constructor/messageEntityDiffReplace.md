# messageEntityDiffReplace

**Layer** : 227

```tl
messageEntityDiffReplace#c6c1e5a7 offset:int length:int old_text:string = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | NOTHING |
| <mark>length</mark> | [`int`](type/int) | NOTHING |
| <mark>old_text</mark> | [`string`](type/string) | NOTHING |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityDiffReplace(
	offset : 0,
	length : 31,
	old_text : 'mEbTrdqjkSNuH1gZ',
);
```