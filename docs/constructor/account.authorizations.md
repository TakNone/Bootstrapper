# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 222

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
	authorization_ttl_days : 67,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'WV0Z4baHYguCO5Af',
			platform : 'X0Q7FxKoiNLRbIep',
			system_version : 'Xn1r8e4U0dKDRfmt',
			api_id : 9,
			app_name : 'G9EDSOs2Brk43dQl',
			app_version : 'OshF5DeVjqwRmUyJ',
			date_created : 72,
			date_active : 77,
			ip : '127.0.0.1',
			country : 'wLkpH4r5Y8e0iXJf',
			region : 'Ict6gSpLs1rnwzXo',
		),
	),
);
```