# webPageAttributeAiComposeTone

**Description** : *Webpage attribute attached to a webPage of type telegram\_aicomposetone, generated when previewing a shared AI composer tone &raquo; via an AI compose tone link &raquo;*

**Layer** : 229

```tl
webPageAttributeAiComposeTone#7781fe18 emoji_id:long = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoji_id</mark> | [`long`](type/long) | Custom emoji ID of the tone's icon |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeAiComposeTone(
	emoji_id : 2035123615851259286,
);
```