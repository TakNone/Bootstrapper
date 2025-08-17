# textSuperscript

**Description** : *Superscript text*

**Layer** : 211

```tl
textSuperscript#c7fb5e01 text:RichText = RichText;
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
$richText = $client->textSuperscript(
	text : $client->textEmpty(),
);
```