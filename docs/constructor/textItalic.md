# textItalic

**Description** : *Italic text*

**Layer** : 211

```tl
textItalic#d912a59c text:RichText = RichText;
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
$richText = $client->textItalic(
	text : $client->textEmpty(),
);
```