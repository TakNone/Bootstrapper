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
		id : 5678623836146573583,
		access_hash : -2136619025340823475,
	),
	ids : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 4910216760466723207,
		),
		$client->inputPeerUser(
			user_id : 4704550051045499340,
			access_hash : -9118206262038583114,
		),
		$client->inputPeerChannel(
			channel_id : -4809678660068608312,
			access_hash : 3190135971106339163,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 56,
			user_id : 2083425904018097594,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 5,
			channel_id : 4799117650596844162,
		),
	),
	sources : array(73),
	offset : 'pxmuR0Pkr5J3UK4O',
	limit : 46,
);
```