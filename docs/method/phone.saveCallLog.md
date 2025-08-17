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
		id : -841418485624606937,
		access_hash : -2062518094338632174,
	),
	file : $client->inputFile(
		id : -1945096356661786104,
		parts : 2,
		name : 'sqWgwz7Hd30IZi2N',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
);
```