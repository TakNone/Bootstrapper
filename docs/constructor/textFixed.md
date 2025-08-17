# textFixed

**Description** : *fixed-width rich text*

**Layer** : 211

```tl
textFixed#6c3f19b9 text:RichText = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textFixed(
	text : $client->textEmpty(),
);
```