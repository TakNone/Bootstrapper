# readParticipantDate

**Description** : *Contains info about when a certain participant has read a message*

**Layer** : 211

```tl
readParticipantDate#4a4ff172 user_id:long date:int = ReadParticipantDate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>date</mark> | [`int`](type/int) | When the user read the message |

---

## Type

[ReadParticipantDate](type/ReadParticipantDate)

---

## Example

```php
$readParticipantDate = $client->readParticipantDate(
	user_id : 4180827762727696799,
	date : 61,
);
```