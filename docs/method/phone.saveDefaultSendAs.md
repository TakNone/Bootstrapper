# phone.saveDefaultSendAs

**Description** : *Save the default peer displayed as the author of live story comments and reactions, see in\-call messages &raquo;*

**Layer** : 233

```tl
phone.saveDefaultSendAs#4167add1 call:InputGroupCall send_as:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Live story group call |
| <mark>send_as</mark> | [`InputPeer`](type/InputPeer) | Peer to display as the author of subsequent comments and reactions |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$bool = $client->phone->saveDefaultSendAs(
	call : $client->inputGroupCall(
		id : 1555194502746908530,
		access_hash : -6446548109951557799,
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```