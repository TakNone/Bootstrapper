# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 233

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
	authorization_ttl_days : 77,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : '71GYlabem2UJNhpx',
			platform : 'tXVuzPREhoGdnJ3O',
			system_version : 'RUgXh5zni1rIQD6E',
			api_id : 86,
			app_name : 'Ngx9bhYsMk1iwIuC',
			app_version : 'BvhCYMTqnc2KrpEO',
			date_created : 70,
			date_active : 66,
			ip : '127.0.0.1',
			country : 'daveALxhGiIonsPj',
			region : 'NzT43LuYUMbJQm7F',
		),
	),
);
```