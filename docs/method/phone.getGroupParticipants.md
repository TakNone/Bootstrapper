# phone.getGroupParticipants

**Description** : *Get group call participants*

**Layer** : 216

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
		id : -3300893877427945433,
		access_hash : 3803410886378569959,
	),
	ids : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -4281729363996142838,
		),
		$client->inputPeerUser(
			user_id : -3226367610250390803,
			access_hash : 4132755592188054829,
		),
		$client->inputPeerChannel(
			channel_id : -8372930004656374762,
			access_hash : -5617346525184383134,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 64,
			user_id : 8244018525258081391,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 18,
			channel_id : 4054805283232062034,
		),
	),
	sources : array(76),
	offset : '0zqLoXtPFGhJl4OV',
	limit : 34,
);
```