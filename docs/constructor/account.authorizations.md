# account.authorizations

**Description** : *Logged-in sessions*

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
	authorization_ttl_days : 38,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 1089730299059150880,
			device_model : 'jaKAZLl0DE1MtU8b',
			platform : 'KDVM9Qo8z4EwsJkp',
			system_version : 'kv7Z4YPzfDIdSaCn',
			api_id : 55,
			app_name : 'uafKgR5iVW410lIE',
			app_version : 'wOYG0r8UlRb34NPT',
			date_created : 71,
			date_active : 86,
			ip : '127.0.0.1',
			country : 'Va2Z7Dxrhv4un3IU',
			region : 'OH7notMKyl1PCT9D',
		),
	),
);
```