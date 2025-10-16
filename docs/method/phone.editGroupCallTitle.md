# phone.editGroupCallTitle

**Description** : *Edit the title of a group call or livestream*

**Layer** : 216

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
		id : -8418182817958672340,
		access_hash : -140381267477929698,
	),
	title : 'RUbFf5ipP7BlkaZQ',
);
```