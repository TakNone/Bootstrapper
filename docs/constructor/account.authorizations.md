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
	authorization_ttl_days : 21,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'lIbvYPTnDHAaoNCd',
			platform : 'mYEzltKw1nCu7PV9',
			system_version : 'ByM0EJOatQzFTcu8',
			api_id : 53,
			app_name : 'zQs9y6WAU0qpXVDM',
			app_version : 'lQF9tmYr0vufyPR7',
			date_created : 38,
			date_active : 27,
			ip : '127.0.0.1',
			country : 'CmgGwqfFha9HzMKR',
			region : '23of6eYKlvmGp5NJ',
		),
	),
);
```