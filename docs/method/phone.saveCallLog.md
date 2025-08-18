# phone.saveCallLog

**Description** : *Save phone call debug information*

**Layer** : 211

```tl
phone.saveCallLog#41248786 peer:InputPhoneCall file:InputFile = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | Phone call |
| <mark>file</mark> | [`InputFile`](type/InputFile) | Logs |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |

---

## Example

```php
$bool = $client->phone->saveCallLog(
	peer : $client->inputPhoneCall(
		id : -6812515728871084398,
		access_hash : -5060057509844070173,
	),
	file : $client->inputFile(
		id : 5410804271343904669,
		parts : 0,
		name : 'FaC2r1QczvOseuIt',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
);
```