# account.authorizations

**Description** : *Logged\-in sessions*

**Layer** : 216

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
			device_model : 'YtpNwmMDb8erHyxo',
			platform : 'q2saP8YEnCiUNJQ3',
			system_version : 'ltXEF59GdwyikZ68',
			api_id : 6,
			app_name : 'JTMFX8qDVrjo7ApZ',
			app_version : 'glAoZWau9i6j4KPc',
			date_created : 80,
			date_active : 37,
			ip : '127.0.0.1',
			country : 'wXTrtsNF05Auf2g3',
			region : 'PBEz38Ai5el0FnbS',
		),
	),
);
```