# updates.differenceTooLong

**Description** : *The difference is too long, and the specified state must be used to refetch updates*

**Layer** : 216

```tl
updates.differenceTooLong#4afe8f6d pts:int = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pts</mark> | [`int`](type/int) | The new state to use |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceTooLong(
	pts : 7,
);
```