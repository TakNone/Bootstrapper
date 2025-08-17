# channels.getParticipant

**Description** : *Get info about a channel/supergroup participant*

**Layer** : 211

```tl
channels.getParticipant#a0ab6cc6 channel:InputChannel participant:InputPeer = channels.ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | Participant to get info about |

---

## Result

[channels.ChannelParticipant](type/channels.ChannelParticipant)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PARTICIPANT_ID_INVALID** | `400` | The specified participant ID is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_NOT_PARTICIPANT** | `400` | You're not a member of this supergroup/channel |

---

## Example

```php
$channelsChannelParticipant = $client->channels->getParticipant(
	channel : $client->inputChannelEmpty(),
	participant : $client->inputPeerEmpty(),
);
```