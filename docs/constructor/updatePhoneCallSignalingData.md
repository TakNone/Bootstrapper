# updatePhoneCallSignalingData

**Description** : *Incoming phone call signaling payload*

**Layer** : 216

```tl
updatePhoneCallSignalingData#2661bf09 phone_call_id:long data:bytes = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_call_id</mark> | [`long`](type/long) | Phone call ID |
| <mark>data</mark> | [`bytes`](type/bytes) | Signaling payload |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePhoneCallSignalingData(
	phone_call_id : -3790373373899293791,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```