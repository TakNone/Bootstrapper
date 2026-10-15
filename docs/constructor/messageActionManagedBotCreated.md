# messageActionManagedBotCreated

**Description** : *Service message sent by a user to a manager bot when a new managed bot &raquo; is created through it, by invoking messages\.sendBotRequestedPeer with a requestPeerTypeCreateBot, see here &raquo; for more info*

**Layer** : 229

```tl
messageActionManagedBotCreated#16605e3e bot_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the newly created managed bot |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionManagedBotCreated(
	bot_id : -3575031842436841922,
);
```