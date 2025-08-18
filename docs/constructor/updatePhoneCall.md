# updatePhoneCall

**Description** : *An incoming phone call*

**Layer** : 211

```tl
updatePhoneCall#ab0f6b1e phone_call:PhoneCall = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_call</mark> | [`PhoneCall`](type/PhoneCall) | Phone call |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePhoneCall(
	phone_call : $client->phoneCallEmpty(
		id : -7488510817635727301,
	),
);
```