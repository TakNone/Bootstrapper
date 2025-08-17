# phone.sendConferenceCallBroadcast

**Layer** : 211

```tl
phone.sendConferenceCallBroadcast#c6701900 call:InputGroupCall block:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>block</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->sendConferenceCallBroadcast(
	call : $client->inputGroupCall(
		id : -6044996043033543755,
		access_hash : -1441917458959680078,
	),
	block : '??4LiveProto??Dd',
);
```