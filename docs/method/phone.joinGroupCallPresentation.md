# phone.joinGroupCallPresentation

**Description** : *Start screen sharing in a call*

**Layer** : 227

```tl
phone.joinGroupCallPresentation#cbea6bc4 call:InputGroupCall params:DataJSON = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>params</mark> | [`DataJSON`](type/DataJSON) | WebRTC parameters |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **PARTICIPANT_JOIN_MISSING** | `403` | Trying to enable a presentation, when the user hasn't joined the Video Chat with phone.joinGroupCall |

---

## Example

```php
$updates = $client->phone->joinGroupCallPresentation(
	call : $client->inputGroupCall(
		id : -189429306709987250,
		access_hash : -701448318174244589,
	),
	params : $client->dataJSON(
		data : 'bCPdzOQUqAgBrwsZ',
	),
);
```