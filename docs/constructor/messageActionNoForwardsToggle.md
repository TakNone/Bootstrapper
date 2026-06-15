# messageActionNoForwardsToggle

**Layer** : 227

```tl
messageActionNoForwardsToggle#bf7d6572 prev_value:Bool new_value:Bool = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`Bool`](type/Bool) | NOTHING |
| <mark>new_value</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionNoForwardsToggle(
	prev_value : true,
	new_value : true,
);
```