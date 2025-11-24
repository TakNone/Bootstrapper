# phone.sendConferenceCallBroadcast

**Description** : *Broadcast a blockchain block to all members of a conference call, see here &raquo; for more info*

**Layer** : 218

```tl
phone.sendConferenceCallBroadcast#c6701900 call:InputGroupCall block:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The conference where to broadcast the block |
| <mark>block</mark> | [`bytes`](type/bytes) | The block to broadcast |

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
		id : -7319795755581482915,
		access_hash : 8294613411490244092,
	),
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```