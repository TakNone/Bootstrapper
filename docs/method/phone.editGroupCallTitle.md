# phone.editGroupCallTitle

**Description** : *Edit the title of a group call or livestream*

**Layer** : 211

```tl
phone.editGroupCallTitle#1ca6ac0a call:InputGroupCall title:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| <mark>title</mark> | [`string`](type/string) | New title |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The group call has already ended |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->editGroupCallTitle(
	call : $client->inputGroupCall(
		id : -580856859342273675,
		access_hash : 8404913188154387594,
	),
	title : 'c7QIPwnM0R6BLgaY',
);
```