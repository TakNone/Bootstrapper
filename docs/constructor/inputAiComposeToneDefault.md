# inputAiComposeToneDefault

**Description** : *References a built\-in, default AI composer tone &raquo; by its string identifier*

**Layer** : 233

```tl
inputAiComposeToneDefault#1fe9a9bf tone:string = InputAiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`string`](type/string) | String identifier of the built-in tone, as returned in aiComposeToneDefault.tone |

---

## Type

[InputAiComposeTone](type/InputAiComposeTone)

---

## Example

```php
$inputAiComposeTone = $client->inputAiComposeToneDefault(
	tone : 'ARFiWr9osLxPMGef',
);
```