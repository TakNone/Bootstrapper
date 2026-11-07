# inputAiComposeToneSlug

**Description** : *References a custom AI composer tone &raquo; by its public slug, used when opening an AI compose tone link &raquo;*

**Layer** : 233

```tl
inputAiComposeToneSlug#1fa01357 slug:string = InputAiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Public tone slug, as returned in aiComposeTone.slug |

---

## Type

[InputAiComposeTone](type/InputAiComposeTone)

---

## Example

```php
$inputAiComposeTone = $client->inputAiComposeToneSlug(
	slug : '9RkziWMXZFtOphN8',
);
```