# updateSmsJob

**Description** : *A new SMS job was received*

**Layer** : 216

```tl
updateSmsJob#f16269d4 job_id:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>job_id</mark> | [`string`](type/string) | SMS job ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateSmsJob(
	job_id : 'vxBdNqh5Is0bQK4u',
);
```