# channels.getParticipants

**Description** : *Get the participants of a supergroup/channel*

**Layer** : 211

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
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$channelsChannelParticipants = $client->channels->getParticipants(
	channel : $client->inputChannelEmpty(),
	filter : $client->channelParticipantsRecent(),
	offset : 44,
	limit : 68,
	hash : -136816562880759322,
);
```