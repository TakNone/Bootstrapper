# phone.sendConferenceCallBroadcast

**Description** : *Submit a verification message to conference call subchain 1, see subchains &raquo;*

**Layer** : 229

```tl
phone.sendConferenceCallBroadcast#c6701900 call:InputGroupCall block:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Conference whose verification subchain should receive the message |
| <mark>block</mark> | [`bytes`](type/bytes) | Serialized e2e.chain.GroupBroadcast verification message |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->sendConferenceCallBroadcast(
	call : $client->inputGroupCall(
		id : 7124293941318069448,
		access_hash : 923761018614148791,
	),
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```