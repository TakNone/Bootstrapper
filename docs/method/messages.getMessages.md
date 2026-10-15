# messages.getMessages

**Description** : *Returns the list of messages by their IDs*

**Layer** : 229

```tl
messages.getMessages#63c66506 id:Vector<InputMessage> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputMessage>`](type/InputMessage) | Message ID list |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$messagesMessages = $client->messages->getMessages(
	id : array(
		$client->inputMessageID(
			id : 38,
		),
		$client->inputMessageReplyTo(
			id : 75,
		),
		$client->inputMessagePinned(),
		$client->inputMessageCallbackQuery(
			id : 76,
			query_id : 2015578918762856927,
		),
	),
);
```