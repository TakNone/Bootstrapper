# textDiff

**Layer** : 233

```tl
textDiff#9686cb50 text:RichText old_text:RichText = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | NOTHING |
| <mark>old_text</mark> | [`RichText`](type/RichText) | NOTHING |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textDiff(
	text : $client->textEmpty(),
	old_text : $client->textEmpty(),
);
```