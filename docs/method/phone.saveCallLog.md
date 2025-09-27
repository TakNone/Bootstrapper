# phone.saveCallLog

**Description** : *Save phone call debug information*

**Layer** : 214

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
		id : -8822774267810397084,
		access_hash : 3617639811071104891,
	),
	file : $client->inputFile(
		id : 4318093552682092571,
		parts : 76,
		name : 'H0uqTP7SRtkpiZ6B',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
);
```