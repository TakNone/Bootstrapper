# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 229

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
	authorization_ttl_days : 32,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'qY60iZmC7EvzjIrh',
			platform : 'hROFSL8X1IMYzuJo',
			system_version : 'NvSe6Z3BLoc25EAb',
			api_id : 93,
			app_name : 'oSnatieFD1Rd7GZQ',
			app_version : 'L3iUXmDaIR9qsc6M',
			date_created : 84,
			date_active : 91,
			ip : '127.0.0.1',
			country : 'AvPnM6SVyQtbT9Xo',
			region : 'Akfa5HhWnS4svFLj',
		),
	),
);
```