# textAnchor

**Description** : *Text linking to another section of the page*

**Layer** : 214

```tl
textAnchor#35553762 text:RichText name:string = RichText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |
| <mark>name</mark> | [`string`](type/string) | Section name |

---

## Type

[RichText](type/RichText)

---

## Example

```php
$richText = $client->textAnchor(
	text : $client->textEmpty(),
	name : 'Zge5sW60kwX9KtTH',
);
```