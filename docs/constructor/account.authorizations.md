# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 225

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
	authorization_ttl_days : 50,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'gDOWKB7AlnpFVdiL',
			platform : '5dpEhgn6FTQs4Bf7',
			system_version : 'BHtsfl1gkpNMG40q',
			api_id : 17,
			app_name : 'ZpMUVmIjSbR6lTE4',
			app_version : 'JVcUbzrRPGfIWFOZ',
			date_created : 73,
			date_active : 44,
			ip : '127.0.0.1',
			country : 'AtdJQWz9KuhUcfpl',
			region : 'Jqxbk9MIegCY7QAF',
		),
	),
);
```