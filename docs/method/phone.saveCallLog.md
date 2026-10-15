# phone.saveCallLog

**Description** : *Deprecated: send libtgvoip phone call debug information*

**Layer** : 229

```tl
phone.saveCallLog#41248786 peer:InputPhoneCall file:InputFile = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | Phone call |
| <mark>file</mark> | [`InputFile`](type/InputFile) | Libtgvoip logs |

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
		id : -322218383540526992,
		access_hash : -696426550544359240,
	),
	file : $client->upload_file(path : 'file.png'),
);
```