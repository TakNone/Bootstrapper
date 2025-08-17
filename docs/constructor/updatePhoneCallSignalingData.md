# updatePhoneCallSignalingData

**Description** : *Incoming phone call signaling payload*

**Layer** : 211

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
	phone_call_id : 8497621306304445172,
	data : '??F1bLiveProtoY??u?',
);
```