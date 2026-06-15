# aicompose.getTone

**Layer** : 227

```tl
aicompose.getTone#b2e8ba03 tone:InputAiComposeTone = aicompose.Tones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | NOTHING |

---

## Result

[aicompose.Tones](type/aicompose.Tones)

---

## Example

```php
$aicomposeTones = $client->aicompose->getTone(
	tone : $client->inputAiComposeToneDefault(
		tone : 'ov0xDLiPwksrNb5H',
	),
);
```