# phone.saveCallLog

**Description** : *Save phone call debug information*

**Layer** : 216

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
		id : 3275329666045779878,
		access_hash : -1635892893248322638,
	),
	file : $client->inputFile(
		id : -2445310772717836470,
		parts : 88,
		name : 'RJQ5DbEZzWkHYXos',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
);
```