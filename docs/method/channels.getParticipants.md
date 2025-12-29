# channels.getParticipants

**Description** : *Get the participants of a supergroup/channel*

**Layer** : 218

```tl
channels.getParticipants#77ced9d0 channel:InputChannel filter:ChannelParticipantsFilter offset:int limit:int hash:long = channels.ChannelParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel |
| <mark>filter</mark> | [`ChannelParticipantsFilter`](type/ChannelParticipantsFilter) | Which participant types to fetch |
| <mark>offset</mark> | [`int`](type/int) | Offset |
| <mark>limit</mark> | [`int`](type/int) | Limit |
| <mark>hash</mark> | [`long`](type/long) | Hash |

---

## Result

[channels.ChannelParticipants](type/channels.ChannelParticipants)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_MONOFORUM_UNSUPPORTED** | `400` | Monoforums do not support this feature |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$channelsChannelParticipants = $client->channels->getParticipants(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	filter : $client->channelParticipantsRecent(),
	offset : 0,
	limit : 76,
	hash : 0,
);
```