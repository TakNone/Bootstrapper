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
	authorization_ttl_days : 66,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'eQIN23VZ84amMAyr',
			platform : 'IDUbMhRrH1NekgsG',
			system_version : 'LWcbmM1GJEyza7Ou',
			api_id : 34,
			app_name : 'oSePlk79sqTyKIG6',
			app_version : 'e9cVDiOz4dFMgIy0',
			date_created : 92,
			date_active : 95,
			ip : '127.0.0.1',
			country : 'INf3vUjXE9KTas7R',
			region : '8JMSjgrHOtWUnXp3',
		),
	),
);
```