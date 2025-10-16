# phone.sendConferenceCallBroadcast

**Description** : *Broadcast a blockchain block to all members of a conference call, see here &raquo; for more info*

**Layer** : 216

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
		id : -4500665882292986108,
		access_hash : -6924068222632575510,
	),
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```