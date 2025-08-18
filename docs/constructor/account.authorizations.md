# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 211

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
	authorization_ttl_days : 64,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 7630319120638761508,
			device_model : '0Qwkug374VUGRBxe',
			platform : 'RK4fspInQA5V8elZ',
			system_version : 'B1Yw6UeCRrp3P0ia',
			api_id : 55,
			app_name : 'WlndveT5FKEAz7sb',
			app_version : '3frjzqhveaQGsZTd',
			date_created : 58,
			date_active : 87,
			ip : '127.0.0.1',
			country : 'QZEajOw14v3CtkMh',
			region : 'UdPS5sXYg1qxkFpm',
		),
	),
);
```