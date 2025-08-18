# invokeWithMessagesRange

**Description** : *Invoke with the given message range*

**Layer** : 211

```tl
invokeWithMessagesRange#365275f2 {X:Type} range:MessageRange query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>range</mark> | [`MessageRange`](type/MessageRange) | Message range |
| <mark>query</mark> | [`!X`](type/X) | Query |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithMessagesRange(
	range : $client->messageRange(
		min_id : 92,
		max_id : 87,
	),
	query : $client->help->getConfig(raw : true),
);
```