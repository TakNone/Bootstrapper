# aicompose.getToneExample

**Layer** : 225

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
		tone : 'GNulJ6Kb2Lhi19Xx',
	),
	num : 89,
);
```