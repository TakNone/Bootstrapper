# phone.saveCallDebug

**Description** : *Send phone call debug data to server*

**Layer** : 218

```tl
phone.saveCallDebug#277add7e peer:InputPhoneCall debug:DataJSON = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | Phone call |
| <mark>debug</mark> | [`DataJSON`](type/DataJSON) | Debug statistics obtained from libtgvoip |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |

---

## Example

```php
$bool = $client->phone->saveCallDebug(
	peer : $client->inputPhoneCall(
		id : 861861484305535836,
		access_hash : 8389987866622999506,
	),
	debug : $client->dataJSON(
		data : 'oRfVUBHLSxhGMbv6',
	),
);
```