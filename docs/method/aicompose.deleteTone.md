# aicompose.deleteTone

**Layer** : 227

```tl
aicompose.deleteTone#dd39316a tone:InputAiComposeTone = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->aicompose->deleteTone(
	tone : $client->inputAiComposeToneDefault(
		tone : 'eyGvR4rXAsM32PbN',
	),
);
```