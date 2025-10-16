# channels.getMessages

**Description** : *Get channel/supergroup messages*

**Layer** : 216

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
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **FROZEN_PARTICIPANT_MISSING** | `400` | The current account is frozen, and cannot access the specified peer |
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
			id : 44,
		),
		$client->inputMessageReplyTo(
			id : 81,
		),
		$client->inputMessagePinned(),
		$client->inputMessageCallbackQuery(
			id : 90,
			query_id : -5146879642895547758,
		),
	),
);
```