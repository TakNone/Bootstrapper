# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 216

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
	authorization_ttl_days : 13,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'LIrwq7g2JjDsbp9U',
			platform : 'quBo2TY3jdItzCPr',
			system_version : '6kfUni5o7rKREHDT',
			api_id : 80,
			app_name : 'pO5tl8JhvuzjFbaG',
			app_version : 'NwGuliERcztWg9qU',
			date_created : 79,
			date_active : 14,
			ip : '127.0.0.1',
			country : 'r10pjGT3b7ak6yOP',
			region : 'Qj1q9tFaKykVPNiH',
		),
	),
);
```