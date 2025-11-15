# messages.reorderQuickReplies

**Description** : *Reorder quick reply shortcuts*

**Layer** : 218

```tl
messages.reorderQuickReplies#60331907 order:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>order</mark> | [`Vector<int>`](type/int) | IDs of all created quick reply shortcuts, in the desired order |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$bool = $client->messages->reorderQuickReplies(
	order : array(29),
);
```