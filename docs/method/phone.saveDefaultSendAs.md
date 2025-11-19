# phone.saveDefaultSendAs

**Layer** : 218

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
		id : -5316308364284795784,
		access_hash : -1137395078435526571,
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```