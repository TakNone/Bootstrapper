# aicompose.saveTone

**Layer** : 227

```tl
aicompose.saveTone#1782cbb1 tone:InputAiComposeTone unsave:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | NOTHING |
| <mark>unsave</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->aicompose->saveTone(
	tone : $client->inputAiComposeToneDefault(
		tone : 'pjlL6omvy7JZckOM',
	),
	unsave : false,
);
```