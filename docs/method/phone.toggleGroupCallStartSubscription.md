# phone.toggleGroupCallStartSubscription

**Description** : *Subscribe or unsubscribe to a scheduled group call*

**Layer** : 214

```tl
phone.toggleGroupCallStartSubscription#219c34e6 call:InputGroupCall subscribed:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Scheduled group call |
| <mark>subscribed</mark> | [`Bool`](type/Bool) | Enable or disable subscription |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_ALREADY_STARTED** | `403` | The groupcall has already started, you can join directly using phone.joinGroupCall |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->toggleGroupCallStartSubscription(
	call : $client->inputGroupCall(
		id : 7043229705586559163,
		access_hash : 8724004942052671349,
	),
	subscribed : false,
);
```