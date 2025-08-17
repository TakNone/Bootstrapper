# textImage

**Description** : *Inline image*

**Layer** : 211

```tl
textImage#81ccf4f document_id:long w:int h:int = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`long`](type/long) | Document ID |
| <mark>w</mark> | [`int`](type/int) | Width |
| <mark>h</mark> | [`int`](type/int) | Height |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textImage(
	document_id : 7808253274434345448,
	w : 32,
	h : 69,
);
```