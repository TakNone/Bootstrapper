# updateDialogFilterOrder

**Description** : *New folder order*

**Layer** : 216

```tl
updateDialogFilterOrder#a5d72105 order:Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>order</mark> | [`Vector<int>`](type/int) | Ordered folder IDs |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogFilterOrder(
	order : array(17),
);
```