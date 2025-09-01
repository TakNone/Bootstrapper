# updates.getChannelDifference

**Description** : *Returns the difference between the current state of updates of a certain channel and transmitted*

**Layer** : 214

```tl
updates.getChannelDifference#3173d78 flags:# force:flags.0?true channel:InputChannel filter:ChannelMessagesFilter pts:int limit:int = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **force** | [`flags.0?true`](type/true) | Set to true to skip some possibly unneeded updates and reduce server-side load |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel |
| <mark>filter</mark> | [`ChannelMessagesFilter`](type/ChannelMessagesFilter) | Messsage filter |
| <mark>pts</mark> | [`int`](type/int) | Persistent timestamp (see updates) |
| <mark>limit</mark> | [`int`](type/int) | How many updates to fetch, max 100000Ordinary (non-bot) users are supposed to pass 10-100 |

---

## Result

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHANNEL_PUBLIC_GROUP_NA** | `403` | channel/supergroup not available |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **FROM_MESSAGE_BOT_DISABLED** | `400` | Bots can't use fromMessage min constructors |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PERSISTENT_TIMESTAMP_EMPTY** | `400` | Persistent timestamp empty |
| **PERSISTENT_TIMESTAMP_INVALID** | `400` | Persistent timestamp invalid |
| **PERSISTENT_TIMESTAMP_OUTDATED** | `500` | Channel internal replication issues, try again later (treat this like an RPC_CALL_FAIL) |
| **PINNED_DIALOGS_TOO_MUCH** | `400` | Too many pinned dialogs |
| **RANGES_INVALID** | `400` | Invalid range provided |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$updatesChannelDifference = $client->updates->getChannelDifference(
	force : true,
	channel : $client->inputChannelEmpty(),
	filter : $client->channelMessagesFilterEmpty(),
	pts : 45,
	limit : 89,
);
```