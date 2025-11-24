# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 218

```tl
account.authorizations#4bff8ea0 authorization_ttl_days:int authorizations:Vector<Authorization> = account.Authorizations;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>authorization_ttl_days</mark> | [`int`](type/int) | Time-to-live of session |
| <mark>authorizations</mark> | [`Vector<Authorization>`](type/Authorization) | Logged-in sessions |

---

## Type

[account.Authorizations](type/account.Authorizations)

---

## Example

```php
$accountAuthorizations = $client->account->authorizations(
	authorization_ttl_days : 57,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'vDbQ1a2NVRWjxPTC',
			platform : 'Q28dv4FkYmzCVw7q',
			system_version : 'WqJPf1HrXE2O6G73',
			api_id : 19,
			app_name : 'VoaIQLFHevR0JCml',
			app_version : 'cSI8J5lBavRgCTk1',
			date_created : 86,
			date_active : 4,
			ip : '127.0.0.1',
			country : 'c5jbUHyBaFmAEDC2',
			region : 'uDKMGhqQCJX0wmZt',
		),
	),
);
```