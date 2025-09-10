# phone.createGroupCall

**Description** : *Create a group call or livestream*

**Layer** : 214

```tl
phone.createGroupCall#48cdc6d8 flags:# rtmp_stream:flags.2?true peer:InputPeer random_id:int title:flags.0?string schedule_date:flags.1?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **rtmp_stream** | [`flags.2?true`](type/true) | Whether RTMP stream support should be enabled: only the group/supergroup/channel owner can use this flag |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Associate the group call or livestream to the provided group/supergroup/channel |
| <mark>random_id</mark> | [`int`](type/int) | Unique client message ID required to prevent creation of duplicate group calls |
| **title** | [`flags.0?string`](type/string) | Call title |
| **schedule_date** | [`flags.1?int`](type/int) | For scheduled group call or livestreams, the absolute date when the group call will start |

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
	peer : $client->inputPeerEmpty(),
	random_id : 16,
	title : 'XqsuHI9vO27RFjQJ',
	schedule_date : 73,
);
```