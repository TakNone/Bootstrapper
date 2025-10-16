# textImage

**Description** : *Inline image*

**Layer** : 216

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
	document_id : -8867784856798634999,
	w : 69,
	h : 26,
);
```