# messageActionChangeCreator

**Layer** : 225

```tl
messageActionChangeCreator#e188503b new_creator_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_creator_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChangeCreator(
	new_creator_id : 6701003032141347071,
);
```