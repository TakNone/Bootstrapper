# phone.editGroupCallTitle

**Description** : *Edit the title of a video chat or livestream\. This method cannot be used with live stories or conferences, see here &raquo; for more info*

**Layer** : 229

```tl
phone.editGroupCallTitle#1ca6ac0a call:InputGroupCall title:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat or livestream whose title should be changed |
| <mark>title</mark> | [`string`](type/string) | New title |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->editGroupCallTitle(
	call : $client->inputGroupCall(
		id : -4986012994488570493,
		access_hash : -3690341104244070746,
	),
	title : '7t2SOWCFGrw4fpDV',
);
```