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
	authorization_ttl_days : 30,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'EzYZDia5uXknbQPh',
			platform : 'H6lhWertJzTiwqXZ',
			system_version : 'BQS2rvnO4EfPKd7y',
			api_id : 89,
			app_name : 'yWZi1GplkbzaLKsg',
			app_version : '3QcglSOIJX4yRZiE',
			date_created : 77,
			date_active : 6,
			ip : '127.0.0.1',
			country : 'XDLTgwlIEQekurmG',
			region : 'IBSbXgWx7Yj5lFT2',
		),
	),
);
```