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
	authorization_ttl_days : 56,
	authorizations : array(
		$client->authorization(
			current : true,
			official_app : true,
			password_pending : true,
			encrypted_requests_disabled : true,
			call_requests_disabled : true,
			unconfirmed : true,
			hash : 0,
			device_model : 'JRmw1IOfyVQMXunz',
			platform : 'PrACemSfvphRxWyl',
			system_version : 'bwqY5U2gnZC6sI8a',
			api_id : 72,
			app_name : 'OTdHSrRVjfbmWUJP',
			app_version : 'q4zYfuSD8rXxe1ia',
			date_created : 2,
			date_active : 88,
			ip : '127.0.0.1',
			country : '1ce6oMS802GUYwvk',
			region : 'vuw1gozIylWDaZOf',
		),
	),
);
```