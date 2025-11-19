# textImage

**Description** : *Inline image*

**Layer** : 218

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
	document_id : 4854931800862878030,
	w : 48,
	h : 53,
);
```