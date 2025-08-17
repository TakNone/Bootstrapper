# phone.getGroupParticipants

**Description** : *Get group call participants*

**Layer** : 211

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
		id : 6343720677751283981,
		access_hash : -1252335492463257529,
	),
	ids : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -8369592437861247694,
		),
		$client->inputPeerUser(
			user_id : -2747404606910689052,
			access_hash : -6045391384589511925,
		),
		$client->inputPeerChannel(
			channel_id : 8412385097410211952,
			access_hash : -5301126040634971987,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 93,
			user_id : 6127034819146511176,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 74,
			channel_id : 192187750576220091,
		),
	),
	sources : array(74),
	offset : 'mV1dMq4jvb7JGlPz',
	limit : 71,
);
```