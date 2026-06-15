# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 227

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
	authorization_ttl_days : 68,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'maDGSW81JglX6Udo',
			platform : 'ix0Sl3ptgAQOE29C',
			system_version : 'FAguG3mOS58hMyJx',
			api_id : 47,
			app_name : 'j6ElqAJWD8KioUST',
			app_version : 'Qo3i0zO6jEqv97X1',
			date_created : 83,
			date_active : 84,
			ip : '127.0.0.1',
			country : 'PMcHi6UX8C420KSe',
			region : 'XcPtJLli02A7GarK',
		),
	),
);
```