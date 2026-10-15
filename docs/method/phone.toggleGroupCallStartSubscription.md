# phone.toggleGroupCallStartSubscription

**Description** : *Subscribe or unsubscribe to a scheduled group call*

**Layer** : 229

```tl
phone.toggleGroupCallStartSubscription#219c34e6 call:InputGroupCall subscribed:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Scheduled video chat/livestream that has not started yet |
| <mark>subscribed</mark> | [`Bool`](type/Bool) | Whether to receive a service-notification message when the call starts |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_ALREADY_STARTED** | `403` | The groupcall has already started, you can join directly using phone.joinGroupCall |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->toggleGroupCallStartSubscription(
	call : $client->inputGroupCall(
		id : -862921261260325189,
		access_hash : 2332235635166940864,
	),
	subscribed : true,
);
```