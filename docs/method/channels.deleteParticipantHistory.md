# channels.deleteParticipantHistory

**Description** : *Delete all messages sent by a specific participant of a given supergroup*

**Layer** : 211

```tl
channels.deleteParticipantHistory#367544db channel:InputChannel participant:InputPeer = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The participant whose messages should be deleted |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PARTICIPANT_ID_INVALID** | `400` | The specified participant ID is invalid |

---

## Example

```php
$messagesAffectedHistory = $client->channels->deleteParticipantHistory(
	channel : $client->inputChannelEmpty(),
	participant : $client->inputPeerEmpty(),
);
```