# textMarked

**Description** : *Highlighted text*

**Layer** : 211

```tl
textMarked#34b8621 text:RichText = RichText;
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
$richText = $client->textMarked(
	text : $client->textEmpty(),
);
```