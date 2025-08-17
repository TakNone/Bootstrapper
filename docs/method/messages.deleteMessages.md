# messages.deleteMessages

**Description** : *Deletes messages by their identifiers*

**Layer** : 211

```tl
messages.deleteMessages#e58e95d2 flags:# revoke:flags.0?true id:Vector<int> = messages.AffectedMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoke** | [`flags.0?true`](type/true) | Whether to delete messages for all participants of the chat |
| <mark>id</mark> | [`Vector<int>`](type/int) | Message ID list |

---

## Result

[messages.AffectedMessages](type/messages.AffectedMessages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_DELETE_FORBIDDEN** | `403` | You can't delete one of the messages you tried to delete, most likely because it is a service message |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |

---

## Example

```php
$messagesAffectedMessages = $client->messages->deleteMessages(
	revoke : true,
	id : array(74),
);
```