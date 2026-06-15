# messageActionManagedBotCreated

**Layer** : 227

```tl
messageActionManagedBotCreated#16605e3e bot_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionManagedBotCreated(
	bot_id : -7159098477030283088,
);
```