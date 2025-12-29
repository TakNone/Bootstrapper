# phone.getGroupParticipants

**Description** : *Get group call participants*

**Layer** : 218

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
		id : -8622190040991283382,
		access_hash : 5667325760977744380,
	),
	ids : array($client->get_input_peer(peer : '@LiveProtoChat')),
	sources : array(69),
	offset : 'whsiGYdRV0fxAbBC',
	limit : 81,
);
```