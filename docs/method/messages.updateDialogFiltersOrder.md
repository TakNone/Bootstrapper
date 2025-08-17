# messages.updateDialogFiltersOrder

**Description** : *Reorder folders*

**Layer** : 211

```tl
messages.updateDialogFiltersOrder#c563c1e4 order:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>order</mark> | [`Vector<int>`](type/int) | New folder order |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->updateDialogFiltersOrder(
	order : array(12),
);
```