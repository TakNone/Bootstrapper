# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 214

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
	authorization_ttl_days : 11,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 6867584390126998261,
			device_model : 'dTGP7xtE2B6i1svO',
			platform : 'Ozqjbi6LU93WefPY',
			system_version : 'knGc5sebvwVKBLQO',
			api_id : 38,
			app_name : 'iF34oPYsuUCEMO1f',
			app_version : 'FwvdkXGEJshrBeq4',
			date_created : 100,
			date_active : 59,
			ip : '127.0.0.1',
			country : 'rKqfDcHQC5s2UVWG',
			region : 'n9E7JXv5xYhtb34O',
		),
	),
);
```