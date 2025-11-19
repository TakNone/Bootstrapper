# channels.getAdminLog

**Description** : *Get the admin log of a channel/supergroup*

**Layer** : 218

```tl
channels.getAdminLog#33ddf480 flags:# channel:InputChannel q:string events_filter:flags.0?ChannelAdminLogEventsFilter admins:flags.1?Vector<InputUser> max_id:long min_id:long limit:int = channels.AdminLogResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel |
| <mark>q</mark> | [`string`](type/string) | Search query, can be empty |
| **events_filter** | [`flags.0?ChannelAdminLogEventsFilter`](type/ChannelAdminLogEventsFilter) | Event filter |
| **admins** | [`flags.1?Vector<InputUser>`](type/InputUser) | Only show events from these admins |
| <mark>max_id</mark> | [`long`](type/long) | Maximum ID of message to return (see pagination) |
| <mark>min_id</mark> | [`long`](type/long) | Minimum ID of message to return (see pagination) |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[channels.AdminLogResults](type/channels.AdminLogResults)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$channelsAdminLogResults = $client->channels->getAdminLog(
	channel : $client->get_input_channel(peer : '@LiveProto'),
	q : '7bKJFh62CkoPM85Q',
	events_filter : $client->channelAdminLogEventsFilter(
		join : true,
		leave : true,
		invite : true,
		ban : true,
		unban : true,
		kick : true,
		unkick : true,
		promote : true,
		demote : true,
		info : true,
		settings : true,
		pinned : true,
		edit : true,
		delete : true,
		group_call : true,
		invites : true,
		send : true,
		forums : true,
		sub_extend : true,
	),
	admins : array($client->get_input_user(peer : '@TakNone')),
	max_id : -8996680506973872339,
	min_id : 2181301861717797488,
	limit : 8,
);
```