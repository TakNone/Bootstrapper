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
		id : 7954825109994000891,
		access_hash : 1009018858462986761,
	),
	file : $client->inputFile(
		id : -220474088854219375,
		parts : 90,
		name : 'P0buqe7pjZ8GAJKo',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
);
```