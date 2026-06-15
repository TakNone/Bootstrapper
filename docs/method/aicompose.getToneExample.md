# aicompose.getToneExample

**Layer** : 227

```tl
aicompose.getToneExample#d1b4ab14 tone:InputAiComposeTone num:int = AiComposeToneExample;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | NOTHING |
| <mark>num</mark> | [`int`](type/int) | NOTHING |

---

## Result

[AiComposeToneExample](type/AiComposeToneExample)

---

## Example

```php
$aiComposeToneExample = $client->aicompose->getToneExample(
	tone : $client->inputAiComposeToneDefault(
		tone : '1h0fnwRUY6lgEdMK',
	),
	num : 97,
);
```