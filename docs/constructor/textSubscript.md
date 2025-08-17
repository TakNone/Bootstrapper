# textSubscript

**Description** : *Subscript text*

**Layer** : 211

```tl
textSubscript#ed6a8504 text:RichText = RichText;
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
$richText = $client->textSubscript(
	text : $client->textEmpty(),
);
```