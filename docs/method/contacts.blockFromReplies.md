# contacts.blockFromReplies

**Description** : *Stop getting notifications about discussion replies of a certain user in @replies*

**Layer** : 216

```tl
contacts.blockFromReplies#29a8962c flags:# delete_message:flags.0?true delete_history:flags.1?true report_spam:flags.2?true msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **delete_message** | [`flags.0?true`](type/true) | Whether to delete the specified message as well |
| **delete_history** | [`flags.1?true`](type/true) | Whether to delete all @replies messages from this user as well |
| **report_spam** | [`flags.2?true`](type/true) | Whether to also report this user for spam |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message in the @replies chat |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$updates = $client->contacts->blockFromReplies(
	delete_message : true,
	delete_history : true,
	report_spam : true,
	msg_id : 81,
);
```