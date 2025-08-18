# smsJob

**Description** : *Info about an SMS job*

**Layer** : 211

```tl
smsJob#e6a1eeb8 job_id:string phone_number:string text:string = SmsJob;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>job_id</mark> | [`string`](type/string) | Job ID |
| <mark>phone_number</mark> | [`string`](type/string) | Destination phone number |
| <mark>text</mark> | [`string`](type/string) | Text |

---

## Type

[SmsJob](type/SmsJob)

---

## Example

```php
$smsJob = $client->smsJob(
	job_id : 'gaKvUinlZzosLF45',
	phone_number : '+1234567890',
	text : 'f2qilLZRbdz0XUVD',
);
```