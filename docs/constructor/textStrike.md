# textStrike

**Description** : *Strikethrough text*

**Layer** : 211

```tl
textStrike#9bf8bb95 text:RichText = RichText;
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
$richText = $client->textStrike(
	text : $client->textEmpty(),
);
```