# channels.getMessages

**Description** : *Get channel/supergroup messages*

**Layer** : 214

```tl
channels.getMessages#ad8c9a23 channel:InputChannel id:Vector<InputMessage> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>id</mark> | [`Vector<InputMessage>`](type/InputMessage) | IDs of messages to get |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **MESSAGE_IDS_EMPTY** | `400` | No message ids were provided |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$messagesMessages = $client->channels->getMessages(
	channel : $client->inputChannelEmpty(),
	id : array(
		$client->inputMessageID(
			id : 54,
		),
		$client->inputMessageReplyTo(
			id : 46,
		),
		$client->inputMessagePinned(),
		$client->inputMessageCallbackQuery(
			id : 5,
			query_id : -5437385682198222631,
		),
	),
);
```