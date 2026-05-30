# phone.saveDefaultSendAs

**Layer** : 222

```tl
phone.saveDefaultSendAs#4167add1 call:InputGroupCall send_as:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>send_as</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->phone->saveDefaultSendAs(
	call : $client->inputGroupCall(
		id : -6742746215077687214,
		access_hash : 45872028109299732,
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```