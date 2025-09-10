# phone.getGroupParticipants

**Description** : *Get group call participants*

**Layer** : 214

```tl
phone.getGroupParticipants#c558d8ab call:InputGroupCall ids:Vector<InputPeer> sources:Vector<int> offset:string limit:int = phone.GroupParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| <mark>ids</mark> | [`Vector<InputPeer>`](type/InputPeer) | If specified, will fetch group participant info about the specified peers |
| <mark>sources</mark> | [`Vector<int>`](type/int) | If specified, will fetch group participant info about the specified WebRTC source IDs |
| <mark>offset</mark> | [`string`](type/string) | Offset for results, taken from the next_offset field of phone.groupParticipants, initially an empty string. Note: if no more results are available, the method call will return an empty next_offset; thus, avoid providing the next_offset returned in phone.groupParticipants if it is empty, to avoid an infinite loop |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[phone.GroupParticipants](type/phone.GroupParticipants)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$phoneGroupParticipants = $client->phone->getGroupParticipants(
	call : $client->inputGroupCall(
		id : -4023664325837348995,
		access_hash : 923850723016118381,
	),
	ids : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -1201120295861220074,
		),
		$client->inputPeerUser(
			user_id : 6315495814406628396,
			access_hash : -5427856115747514,
		),
		$client->inputPeerChannel(
			channel_id : 8909596843316888582,
			access_hash : -544068470268480232,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 93,
			user_id : -7815195751558781808,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 87,
			channel_id : 4143918120949749477,
		),
	),
	sources : array(49),
	offset : '90FKwyonxV4blgXU',
	limit : 51,
);
```