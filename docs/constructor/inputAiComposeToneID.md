# inputAiComposeToneID

**Description** : *References a custom AI composer tone &raquo; by its ID and access hash*

**Layer** : 233

```tl
inputAiComposeToneID#773c080 id:long access_hash:long = InputAiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Tone identifier, as returned in aiComposeTone.id |
| <mark>access_hash</mark> | [`long`](type/long) | Tone access hash, as returned in aiComposeTone.access_hash |

---

## Type

[InputAiComposeTone](type/InputAiComposeTone)

---

## Example

```php
$inputAiComposeTone = $client->inputAiComposeToneID(
	id : 3208656140723216379,
	access_hash : 7622681447240682218,
);
```