# textBold

**Description** : *Bold text*

**Layer** : 211

```tl
textBold#6724abc4 text:RichText = RichText;
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
$richText = $client->textBold(
	text : $client->textEmpty(),
);
```