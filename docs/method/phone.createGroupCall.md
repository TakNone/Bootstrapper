# phone.createGroupCall

**Description** : *Create a video chat or livestream, see here &raquo; for the full flow*

**Layer** : 229

```tl
phone.createGroupCall#48cdc6d8 flags:# rtmp_stream:flags.2?true peer:InputPeer random_id:int title:flags.0?string schedule_date:flags.1?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **rtmp_stream** | [`flags.2?true`](type/true) | Create the call in RTMP livestream mode », where one external streamer publishes all audio and video |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Associate the group call or livestream to the provided group/supergroup/channel |
| <mark>random_id</mark> | [`int`](type/int) | Unique client message ID required to prevent creation of duplicate group calls. See here » for more info on random ID deduplication and updateMessageID mapping |
| **title** | [`flags.0?string`](type/string) | Call title, if not set defaults to the group/channel's name |
| **schedule_date** | [`flags.1?int`](type/int) | Schedule date, at least 10 seconds and at most 8 days in the future; the call must still be manually started using phone.startScheduledGroupCall |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CREATE_CALL_FAILED** | `400` | An error occurred while creating the call |
| **GROUPCALL_ALREADY_DISCARDED** | `400` | The group call was already discarded |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SCHEDULE_DATE_INVALID** | `400` | Invalid schedule date provided |

---

## Example

```php
$updates = $client->phone->createGroupCall(
	rtmp_stream : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	random_id : 88,
	title : '8MmJdY7cXVC3enKj',
	schedule_date : 27,
);
```