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
	authorization_ttl_days : 5,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : '1EhjlV8G79ve5ubZ',
			platform : 'a3m9onbIUeglEPLT',
			system_version : 'wDgjhPNQaxVJfSYk',
			api_id : 97,
			app_name : '0zkNWylFIspdRDvO',
			app_version : 'pPfk80tYVjHbZo4m',
			date_created : 5,
			date_active : 74,
			ip : '127.0.0.1',
			country : 'ORYNHmxGwyEA3knV',
			region : 'H0hsKbxg91knc5Uw',
		),
	),
);
```