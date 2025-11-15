# phone.receivedCall

**Description** : *Optional: notify the server that the user is currently busy in a call: this will automatically refuse all incoming phone calls until the current phone call is ended*

**Layer** : 216

```tl
phone.receivedCall#17d54f61 peer:InputPhoneCall = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | The phone call we're currently in |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_ALREADY_DECLINED** | `400` | The call was already declined |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |

---

## Example

```php
$bool = $client->phone->receivedCall(
	peer : $client->inputPhoneCall(
		id : 5015420228111701513,
		access_hash : 3251770939929078310,
	),
);
```