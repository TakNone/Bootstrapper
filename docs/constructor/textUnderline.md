# textUnderline

**Description** : *Underlined text*

**Layer** : 211

```tl
textUnderline#c12622c4 text:RichText = RichText;
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
$richText = $client->textUnderline(
	text : $client->textEmpty(),
);
```