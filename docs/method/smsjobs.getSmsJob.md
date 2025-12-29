# smsjobs.getSmsJob

**Description** : *Get info about an SMS job \(official clients only\)*

**Layer** : 218

```tl
smsjobs.getSmsJob#778d902f job_id:string = SmsJob;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>job_id</mark> | [`string`](type/string) | Job ID |

---

## Result

[SmsJob](type/SmsJob)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SMSJOB_ID_INVALID** | `400` | The specified job ID is invalid |

---

## Example

```php
$smsJob = $client->smsjobs->getSmsJob(
	job_id : 'AdN4x9oDclkqnZOp',
);
```